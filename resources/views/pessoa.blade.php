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

  h2 {
    font-family: "Verdana"; 
    color: white;
  }
  
  .container {
    width: 60%;
    margin: 25px auto;
    height: 25px;
    line-height: 25px;
    color: #000;
    padding: 20px;
    background: #2c3e50;
    color: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;    
  }
  
form {
  text-align:center;  
}


</style>

<title>Pessoas Cadastradas</title>


<div class="container">

<h2>Pessoas Cadastradas: </h2><br>

@foreach($pessoas as $pessoa)

{{ $pessoa->nome }} <br>

@endforeach

</div>

<br><br><br><br>

<form action="pessoa/criar" method="get" target="_blank">
         <button type="submit">Cadastrar Nova Pessoa</button>
      </form>

      <!-- por alguma razão, os botões normais não funcionam nessa página