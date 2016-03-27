from flask import render_template
from app import app


@app.route('/')
@app.route('/index')
def index():
    return render_template('accueil.html')


@app.route('/<page>')
def get_root(page):
    return render_template(page + '.html')


@app.route('/entreprises/<page>')
def get_entreprises(page):
    return render_template('entreprises/' + page + '.html')


@app.route('/etudiants/<page>')
def get_etudiants(page):
    print('searching for', page)
    return render_template('etudiants/' + page + '.html')
