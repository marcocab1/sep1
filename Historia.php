<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo ' 
        <script>
            alert("Inicia sesion");
            window.location = "../index.php";
         </script>
        ';

        session_destroy();
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Historia de la Marimba</title>
  <link rel="stylesheet" href="assets/css/historia.css">


  <meta name="description" content="Bienvenidos">
  <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" type="image/png" href="assets/images/vm_16.png">
  <link rel="apple-touch-icon" href="assets/images/vm_16.png">
  <link rel="apple-touch-startup-image" href="assets/images/vm_16.png">
  <link rel="manifest" href="./manifest.json">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  </head>
  <body>
  <section class="box">
    <h2>historia de la Marimba en Guatemala</h2>
    <p>Históricamente algunos historiadores conocían la marimba como tímpano, ya que era un instrumento de un pueblo, ya utilizaban para sus celebraciones 
      importantes. Ejecutaban la marimba para realizar actividades como danzas y ceremonias. La marimba fue considerada un instrumento de paganos por parte 
      de los españoles, los que ejecutaban la marimba primitivamente eran los sacerdotes. Luego los sacerdotes autorizaron a personas mayores que eran 
      respetados por el pueblo para que ejecutaran el instrumento. En sus inicios solo se conocía la marimba pura es decir la marimba era el único 
      instrumento; es en esta etapa en la surgen los compositores, personas mayores eran considerados músicos. Según Chenoweth (1964), </p>
      
    <p>La marimba ha sido el instrumento musical popular de Guatemala. La Educación Musical en Guatemala sigue en crisis, a nadie le da importancia. A lo largo de los años, ha surgido una problemática en la población, ninguna persona se preocupa por aprender a ejecutar un instrumento durante la educación escolar. Muchas veces por la poca información que se tiene no nos damos cuenta el daño que nos hacemos al escuchar que alguien quiere aprender música, en la mayoría de los casos de les dice, para que se va a dedicar a eso, que no le va dejar ningún beneficio económico. Ese bombardeo psicológico hace que la mayoría muchas veces se desmoralicen y deciden no interesarse en el arte musical.</p>

  </section>
</body>
</html>