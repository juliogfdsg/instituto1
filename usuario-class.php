<?php

class usuario{


    public function login( $nome, $email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE nome = :nome WHERE  email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if(sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['idu'] = $dado['idusuario'];

            return true;
        }else{
            return false;
        }

    }
}



?>