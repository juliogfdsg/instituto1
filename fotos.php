<?php
session_start();
if (empty($_SESSION)){
  print "<script>location.href='index.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos</title>

    <link rel="stylesheet" href="fotos.css" />
   
    
    <link rel="stylesheet" href="https://maxdn.bootstrapdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    

    <header>
        <nav>
          <a class="logo" href="menu-adm.php"></a>
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
            
          </ul>
        </nav>
      </header>

      <div class="fotos"><h1>FOTOS</h1></div>

        <div class="container">
        
          
        <?php require 'lista.php' ?>

        
        
        </div>
        </div>

        <style>
          .container{
            margin-top:20px;
            margin-left:60px;
            display:grid;
            grid-template-columns: repeat( 3, 1fr);
            gap: 1rem;
            align-items:center;
            justify-content:center;
            

          }


          @media (max-width: 999px){
            .container{
            margin-top:20px;
            display:grid;
            grid-template-columns: repeat( 1, 1fr);
            gap: 2rem;
            align-items:center;
            justify-content:center;
            

          }

          }
        </style>
   

        <script src="script.js"></script>



</body>
</html>