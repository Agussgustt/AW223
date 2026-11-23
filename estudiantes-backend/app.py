from flask import Flask

app= Flask(__name__)

@app.route('/')
def inicio():
    return " hello world Flask "

if __name__== '__main__':
    app.run(debug=True)

@app.route('/soyotraruta', method=['POST'])
def otra():
    return " otra ruta jeje "

if __name__== '__main__':
    app.run(debug=True)