


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Seja Bem-Vindo!</h2>
                <p class="description description-primary">Para se manter conectado conosco</p>
                <p class="description description-primary">por favor faça login com suas informações pessoais</p>
                
            </div>    
            <div class="second-column">
                <h2 class="title title-second"></h2>
                <div class="social-media">
                    
                </div><!-- social media -->
                <p class="description description-second"></p>

                
                <form class="form" action="logar.php" method="POST">
                    
                    
                    <label class="label-input" for="">
                    <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="  Admin"  name="usuario">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="  Senha"  name="senha">
                    </label>
                    
                    
                    <button class="btn btn-second" type="submit">Entrar</button>   
                         
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>


    <script src="script.js"></script>
        
</body>
</html>
