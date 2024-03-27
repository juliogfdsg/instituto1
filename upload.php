<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Database connection
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "file_upload_download";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Insert the file information into the database
                $sql = "INSERT INTO files (filename, filesize, filetype) VALUES ('$filename', $filesize, '$filetype')";

                if ($conn->query($sql) === TRUE) {
                    echo "Esse arquivo " . basename($_FILES["file"]["name"]) . " foi carregado e as informações foram armazenadas no banco de dados.<p><a href=\"portal.php\">Ir para portal da transparência</a></p>";
                    header("Location=portal.php");
                } else {
                    echo "Desculpe, ocorreu um erro ao enviar seu arquivo e armazenar informações no banco de dados:" . $conn->error;
                }

                $conn->close();
            } else {
                echo "Desculpe, ocorreu um erro ao enviar seu arquivo.";
            }
        }
    } else {
        echo "Nenhum arquivo foi carregado.";
    }
}
?>

