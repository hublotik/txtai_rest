from flask import Flask, render_template, request, jsonify, json

import sys

from datetime import timedelta, date
from txtai import Embeddings

app = Flask(__name__)
app.config['JSONIFY_PRETTYPRINT_REGULAR'] = False
app.config['DEBUG'] = True

# Connection

# Routes

@app.route('/api', methods=['POST'])

def test_txtai():
    # Works with a list, dataset or generator
    data = [
    "US tops 5 million confirmed virus cases",
    "Canada's last fully intact ice shelf has suddenly collapsed, forming a Manhattan-sized iceberg",
    "Beijing mobilises invasion craft along coast as Taiwan tensions escalate",
    "The National Park Service warns against sacrificing slower friends in a bear attack",
    "Maine man wins $1M from $25 lottery ticket",
    "Make huge profits without work, earn up to $100,000 a day"
    ]

    # Create an embeddings
    embeddings = Embeddings(path="sentence-transformers/nli-mpnet-base-v2")
    embeddings.index(data)
    s_res = []
    res = embeddings.search('virus')
    for i, res_list in enumerate(res):
        data_i = res_list[0]
        score = res_list[1]
        s_res += [score, data[data_i]]
    return s_res


def index():
    content = request.json
    print(content)
    Name = content['name']
    Age = content['age']


    return jsonify({"Your name": Name})

@app.route('/Getdata', methods=['Get'])

def Getdata():
    T = test_txtai()
    return jsonify(T)
app.run()

if __name__ == "__main__":
    app.run(debug=True)
