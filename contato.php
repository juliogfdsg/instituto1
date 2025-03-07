<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="contato.css" />
    
    
    <link rel="stylesheet" href="https://maxdn.bootstrapdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/">INSTITUTO D&M</a>
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
          <li class="contato"><a href="contato.php">Contato</a></li>
          <li><a href="login-menu-adm.php">Portal Adm</a></li>
          
        </ul>
      </nav>
    </header>

    
    <div class="contato">
        <h2>Contato</h2>
    </div>
   
    <div class="para">
        <p>Endereço: Rua Aguas de Março 01A ( casa campo ) </p>
        <p class="ppp">Conjunto José Bonifacio – São Paulo – SP</p>
        <p class="pap">Telefone: 11 967179902 / 74 999538755</p>
        <p class="ult">E-mail: diasinstituto@gmail.com</p>
    </div>
   
    <section>
        <h2>Contato</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit">Enviar</button>

            <input type="hidden" name="accessKey" value="6dc4d554-e4b6-451d-8c5c-68b52a186cdd">
            <input type="hidden" name="redirectTo" value="http://127.0.0.1:5500/obrigado.php">
        </form>
    </section>


    

    <div id="progress">
      <i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL5JREFUSEvt09EJwzAMBNC7TZpN0k3aTbJJs0lWySYqChIY41hqwVBo8pUP+559tonBHwfn488AEblppST3bLXpiiz8BUCRexZJAUX4bCvXHaSQEGiEezsppAtU4Rp4nAEA/w+RU6AOJzmJiBgwAdgM7CJNoBWuwQ6QpI0JkTPgAUBvzK4r99JLwECtzJEnybW+vr2KFpJLOaEGCmRuhR9vJvtg6oqy8y4gbOq3KgqX2xjw0Q4u4JsGwjnDz+AN/glmGf5reIkAAAAASUVORK5CYII="/></i>
      </div>

    <div id="whatsapp">
      <a href="#" target="_blank" id="toggle1" class="wtsapp">
      <i class="whats"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAYNJREFUSEvVVdFNQzEM9G1CJ4FO0nYS6CR0kz4mASYx7yI78kucPH4qRKRKr4rj8519CeTBCw/OL38PoKpPInIWkWcReVm/v8LvA8BtpsKUgaq+icirJWDixb4JSjCuKwDGpSsFsKrvIsJEaYLAjAUQnHEdmxGAJ78A8KrTCkMx3D8CIFhdHUCQhcELE7SHWiQD+VwZ3wBchgBZoK6IlADAYdZMVeUgvBuLynrDIAQdWHX47/SHcoXiNj1rAVjBGetYMKOqclLYj10Aiy+xAI7OtgWgjovrGKrioV1TWv9OUc4MgHrXCoJMXQOTZm8UKGxikKp2FI26G66AGDMmo5OryVR1o0AGwOBTO8+JqWhAX5WZTdy0yTyYzrMx4T4r92uCpipmbP2TNtmSEIBNHc69MaIBy9iGaZsbzYJprN2GeoXxqsiKGhnt2kwIATd3TNKX9N5KjRaSMyl1j2/Ad3gbGDplm44px88MVy678OD49FB7AnXMWm/sunN2wf1m7/8D/ADQoeQZptwRNwAAAABJRU5ErkJggg=="
          /></i>
    </a>
    
    
    <div id="footer_copyright">
    &#169
    2024 Todos os direitos reservados

    </div>


 
    <script src="script.js"></script>
 
  </body>
</html>
