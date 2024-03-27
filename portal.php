<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "file_upload_download";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *FROM files";
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portal da transparência</title>
    <link rel="stylesheet" href="fotos.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<style>

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

.table-bordered>:not(caption)>*>* {
    border-width: 0 var(--bs-border-width);
}

    .btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: rgb(20,225,150);
    --bs-btn-border-color: rgb(18,225,150);
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: rgb(20,220,150);
    --bs-btn-hover-border-color: rgb(20,220,150);
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd;
}

a {
    color: #000;
    text-decoration: none;
}
</style>

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
            <li><a href="portal.php">Portal da Transparência</a></li>
            <li><a href="fotos.php">Fotos</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="login-menu-adm.php">Portal Adm</a></li>
            
          </ul>
        </nav>
      </header>

      <div class="fotos"><h1>PORTAL DA TRANSPARÊNCIA</h1></div>





	<div class="container mt-5">
        <h2></h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display the uploaded files and download links
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr>
                            <td><?php echo $row['filename']; ?></td>
                           
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">Nenhum arquivo enviado ainda.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
$conn->close();
?>