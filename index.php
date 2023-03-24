<?php
    include("config.php");
    switch(@$_REQUEST["page"]){
     case "novo":
	include("novo_user.php");
	break;
	case "listar":
	 include("listar_user.php");
	break;
	default:
	print "Bem-vindos";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Cadastrar</title>
    <style>
        img{
            opacity: 0.2;
        }

        h1{
                position: center center;

        }
    </style>
  </head>
  <body>
  
    <center><h1>Cadastro do entegrador</h1></center>
    
    <div class="container-sm">
    <img src="./img/flash-logo.png" alt="flash-logo">
    
    <form action="salvar_user.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">


            <div class="mb-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome completo">
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="cpf" placeholder="CPF">
                ex. <small>000.000.000-00</small>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" maxlength="9" id="cep" placeholder="CEP">
                ex. <small>00000-000</small>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="endereco" placeholder="Endereço">
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="numero" placeholder="Número">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="bairro" placeholder="Bairro">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="cidade" placeholder="Cidade">
            </div>
          
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary"
                
                
                 >Enviar</button>
            </div>
        </form> 
            
            </div>
            </div>
    </div>
            </div>
        </div>
    </div>
</nav>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
        src="main.js"
    </script>
<footer><br><br><br></footer>

  </body>
</html>