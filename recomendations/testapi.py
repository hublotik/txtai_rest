from flask import Flask, render_template, request, jsonify, json

import sys

from datetime import timedelta, date

app = Flask(__name__)
app.config['JSONIFY_PRETTYPRINT_REGULAR'] = False
app.config['DEBUG'] = True

# Connection

# Routes

@app.route('/api', methods=['POST'])

def index():
    content = request.json
    print(content)
    Name = content['name']
    Age = content['age']


    return jsonify({"Your name": Name})

@app.route('/Getdata', methods=['Get'])

def Getdata():
    T = [['Petr', 23], ['Ru', 21]]
    return jsonify(T)
app.run()

if __name__ == "__main__":
    app.run(debug=True)
