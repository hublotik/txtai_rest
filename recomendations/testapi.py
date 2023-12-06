from flask import Flask, render_template, request, jsonify, json

import sys

from datetime import timedelta, date
from txtai import Embeddings
from pathlib import Path
import pandas as pd

from txtai.pipeline import Similarity
similarity = Similarity("valhalla/distilbart-mnli-12-3")

# df_amp = pd.read_csv(f"/..{Path.cwd()}/parse/final_amp.csv", encoding='utf-8')
# df_amp = pd.read_csv(f"/..{Path.cwd()}/parse/final_amp.csv", encoding='utf-8')
embeddings = Embeddings(path="sentence-transformers/nli-mpnet-base-v2")
##uncl_amp_embeddings:
# embeddings.load(f"/..{Path.cwd()}/parse/amp_uncl")
embeddings.load(f"/..{Path.cwd()}/parse/hdph_clnd")

app = Flask(__name__)
app.config['JSONIFY_PRETTYPRINT_REGULAR'] = False
app.config['DEBUG'] = True

# Connection

# Routes
def similarity_apply(dataframe, query, emb_result):
    result_list = [(tuple_value[1], dataframe.loc[dataframe['uuid'] == tuple_value[0], 'review'].values[0], tuple_value[0]) for tuple_value in emb_result if tuple_value[0] in dataframe['uuid'].values]
    score = []
    reviews = []
    uid = []
    for sim_text_uid in result_list:
        score += [sim_text_uid[0]]
        reviews += [sim_text_uid[1]]
        uid += [sim_text_uid[2]]
    sim_res = similarity(query, reviews)
    sim_res_filtered = sorted(sim_res, key=lambda x: x[0])
    sim_res_score = [values[1] for values in sim_res_filtered]
    sim_result_arr = list(zip(uid, sim_res_score, reviews))
    return sim_result_arr

@app.route('/api', methods=['POST'])

def test_txtai():
    df = pd.read_csv(f"/..{Path.cwd()}/parse/hdph_clr.csv", encoding='utf-8')
    data = df['review'].to_list()
    # Works with a list, dataset or generator
    content = request.json
    query = content['query']
    res = embeddings.search(query)
    sim_res = similarity_apply(df, query, res)
    return sim_res


def index():
    content = request.json
    # print(content)
    query = content['query']
    # Age = content['age']
    return jsonify({"TEST": query})

@app.route('/Getdata', methods=['Get'])

def Getdata():
    T = test_txtai()
    return jsonify(T)
app.run()

if __name__ == "__main__":

    app.run(debug=True)



