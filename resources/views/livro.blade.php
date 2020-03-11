<html>

<style>* {
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: "Open Sans";
    font-size: 14px;
    background: #2c3e75;    
  }

  h1 {
    font-family: "Verdana"; 
    color: white;
    text-align:center;
  }

  h1 {
    font-family: "Verdana"; 
    color: white;
  }
  
  .container {
    width: 650px;
    margin: 25px auto;
  }
  
  form {
    padding: 20px;
    background: #2c3e50;
    color: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
  }
  form label,
  form input,
  form button {
    border: 0;
    margin-bottom: 3px;
    display: block;
    width: 100%;
  }
  form input {
    height: 25px;
    line-height: 25px;
    background: #fff;
    color: #000;
    padding: 0 6px;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  form button {
    height: 30px;
    line-height: 30px;
    background: #e67e22;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
  }

  form button:hover {
    height: 30px;
    line-height: 30px;
    background: #f68e10;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
  }

  form .error {
    color: #ff0000;
  }
</style>

<a href="/livro/criar"> Novo Livro</a>

<br><br>

<h2>Livros recebidos: </h2><br>

@foreach($livros as $livro)

{{ $livro->titulo }} <br>

@endforeach
