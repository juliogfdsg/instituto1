<?php
session_start();
if (empty($_SESSION)){
  print "<script>location.href='index.php';</script>";

  include("protect.php");
}




?>

<?php require 'conexão.php' ?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu adm</title>
    <link rel="stylesheet" href="adm-menu.css">      
        
    <link rel="stylesheet" href="https://maxdn.bootstrapdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   


</head>
<body>
<nav>
        <a class="logo" href="index.php">INSTITUTO D&M</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="index.php">Início</a></li>
          <li><a href="quem-somos.php">Quem Somos</a></li>
          <li><a href="portal.php">Portal de Transparência</a></li>
          <li><a href="fotos.php">Fotos</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="login-menu-adm.php">Portal Adm</a></li>


          <section></section>
          
        </ul>
      </nav>

      <style>
        #logou{
          
          align-items:center;
          margin-left:20px;
        }

        .logo {
      align-items:center;
      font-family: 'poppins 300';
      height: 15%;
      background-color: rgb(210,252,236);
      
  }
      </style>

      <div>
        <p> <a id="logou" href="logout.php">Sair</a> </p>
      </div>
        


        <div class="wrapper">

<form method= "POST" action="envia.php" enctype="multipart/form-data">
<input id="id_img" class="file-input" type="file" name="arquivo">
<label for="id_img"><i class="fas fa-cloud-upload-alt"></i></label>
<p>Selecione imagem</p>
<input class= "enviar"type="submit" value="enviar">
</form>
</div>






<div class="wrapper">

<form action="upload.php" method ="POST" enctype="multipart/form-data">
<label for="file"><i class="fas fa-cloud-upload-alt"></i></label>
<p>Selecione PDF</p>
<input id="file" class="file-input" type="file" name= file >
<input class= "enviar"  type="submit" name= enviar>
</form>
</div>


<script src="script.js"></script>
</body>
</html>