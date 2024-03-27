<?php
session_start();
if (empty($_SESSION)){
  print "<script>location.href='index.php';</script>";
}

?>

<?php require 'conexão.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos</title>

    <link rel="stylesheet" href="fotos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
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
            <li><a href="portal.php">Portal da Transparência</a></li>
            <li><a href="fotos.php">Fotos</a></li>
            <li><a href="contato.html">Contato</a></li>
            <li><a href="login-menu-adm.php">Portal Adm</a></li>
            
          </ul>
        </nav>
      </header>

      <div class="fotos"><h1>PORTAL DA TRANSPARÊNCIA</h1></div>

      <div class="container mt-5">
        <h2>Uploaded Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
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
                            <td><?php echo $row['filesize']; ?> bytes</td>
                            <td><?php echo $row['filetype']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
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