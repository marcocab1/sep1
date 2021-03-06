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
    <title>Aprende las Notas</title>
    <link rel="stylesheet" href="assets/css/style3.css">


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
    <section>
        <header>
            <h1>VIRTUAL MARIMBA</h1>
            <h2>Aprendamos las notas musicales</h2>
        </header>
    </section class="main">
             <div class="nowplaying"></div>
             <div class="keys">
 
    
                <div class="key" data-key="90" data-note="C3">
                    <span class="hints">Z</span>
                </div>
                <div class="key sharp" data-key="83" data-note="C#3">
                    <span class="hints">S</span>
                </div>
                <div class="key" data-key="88" data-note="D3">
                    <span class="hints">X</span>
                </div>
                <div class="key sharp" data-key="68" data-note="D#3">
                    <span class="hints">D</span>
                </div>
                <div class="key" data-key="67" data-note="E3">
                    <span class="hints">C</span>
                </div>
                <div class="key" data-key="86" data-note="F3">
                    <span class="hints">V</span>
                </div>
                <div class="key sharp" data-key="71" data-note="F#3">
                    <span class="hints">G</span>
                </div>
                <div class="key" data-key="66" data-note="G">
                    <span class="hints">B</span>
                </div>
                <div class="key sharp" data-key="72" data-note="G#3">
                    <span class="hints">H</span>
                </div>
                <div class="key" data-key="78" data-note="A">
                    <span class="hints">N</span>
                </div>
                <div class="key sharp" data-key="74" data-note="A#3">
                    <span class="hints">J</span>
                </div>
                <div class="key" data-key="77" data-note="B">
                    <span class="hints">M</span>
                </div>
                <div class="key" data-key="81" data-note="C4">
                    <span class="hints">Q</span>
                </div>  
                <div class="key sharp" data-key="50" data-note="C#4">
                    <span class="hints">2</span>
                </div>
                <div class="key" data-key="87" data-note="D4">
                    <span class="hints">W</span>
                </div>
                <div class="key sharp" data-key="51" data-note="D#4">
                    <span class="hints">3</span>
                </div>
                <div class="key" data-key="69" data-note="E">
                    <span class="hints">E</span>
                </div>



                <div class="key" data-key="82" data-note="F3">
                    <span class="hints">R</span>
                </div>
                <div class="key sharp" data-key="53" data-note="F#3">
                    <span class="hints">5</span>
                </div>
                <div class="key" data-key="84" data-note="G">
                    <span class="hints">T</span>
                </div>
                <div class="key sharp" data-key="54" data-note="G#3">
                    <span class="hints">6</span>
                </div>
                <div class="key" data-key="89" data-note="A">
                    <span class="hints">Y</span>
                </div>
                <div class="key sharp" data-key="55" data-note="A#3">
                    <span class="hints">7</span>
                </div>
                <div class="key" data-key="85" data-note="B">
                    <span class="hints">U</span>
                </div>
                <div class="key" data-key="73" data-note="C4">
                    <span class="hints">I</span>
                </div>  






            <audio data-key="90" src="assets/NotasMarimba/C3.mp3"></audio> 
            <audio data-key="83" src="assets/NotasMarimba/Db3.mp3"></audio>
            <audio data-key="88" src="assets/NotasMarimba/D3.mp3"></audio>
            <audio data-key="68" src="assets/NotasMarimba/Eb3.mp3"></audio>
            <audio data-key="67" src="assets/NotasMarimba/E3.mp3"></audio>
            <audio data-key="86" src="assets/NotasMarimba/F3.mp3"></audio>
            <audio data-key="71" src="assets/NotasMarimba/Gb3.mp3"></audio>
            <audio data-key="66" src="assets/NotasMarimba/G3.mp3"></audio>
            <audio data-key="72" src="assets/NotasMarimba/Ab3.mp3"></audio>
            <audio data-key="78" src="assets/NotasMarimba/A3.mp3"></audio>
            <audio data-key="74" src="assets/NotasMarimba/Bb3.mp3"></audio>
            <audio data-key="77" src="assets/NotasMarimba/B3.mp3"></audio>
            <audio data-key="81" src="assets/NotasMarimba/C4.mp3"></audio>
            <audio data-key="50" src="assets/NotasMarimba/Db4.mp3"></audio>
            <audio data-key="87" src="assets/NotasMarimba/D4.mp3"></audio>
            <audio data-key="51" src="assets/NotasMarimba/Eb4.mp3"></audio>
            <audio data-key="69" src="assets/NotasMarimba/E4.mp3"></audio>




    
        </section>
    </section>
    <script src="assets/js/script4.js"></script>
    <script src="./assets/js/script01.js"></script>
</body>
</html>