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
  
  .container {
    width: 60%;
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

<script>
function validarformulario() {
  var w = document.forms["formulario"]["nome"].value;
  var x = document.forms["formulario"]["cpf"].value;
  var y = document.forms["formulario"]["email"].value;
  var z = document.forms["formulario"]["idade"].value;

  if (w == "") {
    alert("O campo nome deve ser preenchido");
    return false;
  }
  if (x == "") {
    alert("O campo CPF deve ser preenchido");
    return false;
  }
  if (inputs[x].value < 11). {
    alert("O campo CPF deve conter 11 dígitos");
    return false;
  }  
  if (y == "") {
    alert("O campo email deve ser preenchido");
    return false;
  }  
  if (z == "") {
    alert("O campo idade deve ser preenchido");
    return false;
  }   

} 
</script>

<head>
<title>Cadastrar Nova Pessoa</title>
</head>
<body>

<script src="jquery.min.js"></script>
<div class="container">
  <h1>Cadastro de Nova Pessoa</h1>
  <br><br>
  <form name="formulario" method="post" onsubmit="return validarformulario()">
  @CSRF

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Maria"/>
    <br>
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf" maxlength="11" placeholder="00000000000"/>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="maria@email.com"/>
    <br>
    <label for="idade">Idade</label>
    <input type="text" name="idade" id="idade" maxlength="2" placeholder="25"/>
    <br>
    <br><br>
    <button type="submit">Enviar</button>

  </form>
</div>
</body>
</html>