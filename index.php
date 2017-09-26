<?php
  $erro = isset($_GET['error']) ? $_GET['error'] : 0;
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trab do Jamv</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        var campoPreenchido;
         function ValidarCampos(id){
            if($(id).val() == ''){
              campoPreenchido = true;
              $(id).css({'border-color':'red'});
            }else{
              $(id).css({'border-color':'#CCC'});
            }
          }
          $('#btnLogin').click(function(){
          campoPreenchido = false;
          ValidarCampos('#emailLogin');
          ValidarCampos('#pwdLogin');
          if(campoPreenchido) return false;
        });
        $('#btnRegistro').click(function(){
          campoPreenchido = false;
          ValidarCampos('#emailReg');
          ValidarCampos('#userReg');
          ValidarCampos('#pwdReg');
          if(campoPreenchido) return false;
        });
      });
    </script>
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Projeto 4º Bi - JAMV</h1>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <h2>Entrar</h2>
          <form action="php/acesso_usuarios.php" method="post" accept-charset="utf-8">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="emailLogin" name="emailLogin">
            </div>
            <div class="form-group">
              <label for="pwd">Senha</label>
              <input type="password" class="form-control" id="pwdLogin" name="pwdLogin">
            </div>
            <button type="submit" class="btn btn-default" id="btnLogin">Entrar</button>
          </form>
            <?php
              if($erro == 1){
                echo 'Usuário ou senha inválidos';
              }
            ?>
        </div>
        <div class="col-sm-7">
           <h2>Registrar</h2>
          <form action="php/registrar_usuario.php" method="POST" accept-charset="utf-8">
            <div class="form-group">
              <label for="user">Usuario</label>
              <input type="text" class="form-control" id="userReg" name="user">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="emailReg" name="email">
              <?php if($erro == 2) echo 'Email já cadastrado!!'; ?>
            </div>
            <div class="form-group">
              <label for="pwd">Senha</label>
              <input type="password" class="form-control" id="pwdReg" name="pwd">
            </div>
            <button type="submit" class="btn btn-default" id="btnRegistro">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>