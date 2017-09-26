<?php
   session_start();
   require_once("php/db.php");
   if(!isset($_SESSION['email'])){
      header('Location: index.php?error=1');
   }

  $dB = new db();
  $linkCon = $dB->mysqlConection();
  $profile = isset($_GET['profile']) ? $_GET['profile'] : 0;
  $photo = '';

  $sql = "SELECT * FROM personagens WHERE id = '$profile'";
  $id = mysqli_query($linkCon, $sql);

  if($id){
    $dados = mysqli_fetch_array($id);
    if(!isset($dados['id'])){
      echo 'personagem não encontrado';
    }
  }else{
    echo 'Erro na busca do personagem';
  }   
   switch ($profile) {
      case '1':
         $photo = 'img/Angela.jpg';
         break;
      case '2':
         $photo = 'img/Elliot.jpg';
         break;
      case '3':
        $photo = 'img/Robot.jpg';
      break; 
      case '4':
        $photo = 'img/Darlene.jpg';
      break;   
   }
?>


<html>
   <head>
      <meta charset="utf-8">
      <title>Mr Robot Profiles</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script
       src="https://code.jquery.com/jquery-3.2.1.min.js"
       integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
       crossorigin="anonymous"></script>
       <style type="text/css">
        ::selection{
      background: red;
      color: white; 
    }
    ::-moz-selection{
      background: red;
      color: white;
    }
      body{
        /*background-color: black;*/
        background-image: url("img/Wiki-background.jpg");
        color: red;
      }
      h1{
        font-family:"MrRobot";
      }
      @font-face{
        font-family: "MrRobot";
        src:url("css/MR ROBOT.ttf") format("truetype");
      }
    </style>
   </head>
   <body>
   <div class="container">
      <div class="page-header">
         <h1>Mr Robot profiles</h1>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <?php echo  '<h1>' . $dados['nome'] . '</h1>';  ?>
            <?php echo  '<p>' . $dados['especialidade'] . '</p>';  ?>
            <?php echo  '<p>' . $dados['parentesco'] . '</p>';  ?>
            <img src= <?php echo $photo ?> alt="" class="img-responsive thumbnail">
         </div>
      </div>
   </div>
   </body>
</html>