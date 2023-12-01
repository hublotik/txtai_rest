from flask import Flask, render_template, request, jsonify, json

import sys

from datetime import timedelta, date
from txtai import Embeddings
from pathlib import Path
import pandas as pd

df_amp = pd.read_csv(f"/..{Path.cwd()}/parse/final_amp.csv", encoding='utf-8')

embeddings = Embeddings(path="sentence-transformers/nli-mpnet-base-v2")
##uncl_amp_embeddings:
# embeddings.load(f"/..{Path.cwd()}/parse/amp_uncl")
embeddings.load(f"/..{Path.cwd()}/parse/amp_clnd")

app = Flask(__name__)
app.config['JSONIFY_PRETTYPRINT_REGULAR'] = False
app.config['DEBUG'] = True

# Connection

# Routes

@app.route('/api', methods=['POST'])

def test_txtai():
    df_amp = pd.read_csv(f"/..{Path.cwd()}/parse/final_amp.csv", encoding='utf-8')
    data = df_amp['review'].to_list()
    # Works with a list, dataset or generator
    
    content = request.json
    q = content['query']

    res = embeddings.search(q)
    def modify_tuples(tuples_list, attributes_list):
        modified_list = []
        for index, string in tuples_list:
            if index < len(attributes_list):
                modified_tuple = (attributes_list[index], string)
                modified_list.append(modified_tuple)
        return modified_list

    modified_tuple = modify_tuples(res, data)

    return modified_tuple


def index():
    content = request.json
    # print(content)
    query = content['query']
    # Age = content['age']


    return jsonify({"Your name": query})

@app.route('/Getdata', methods=['Get'])

def Getdata():
    T = test_txtai()
    return jsonify(T)
app.run()

if __name__ == "__main__":
    app.run(debug=True)



