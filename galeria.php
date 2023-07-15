<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-galeria.css">

    <style>


    </style>
    <title>Galeria</title>
</head>
<body>

<div class="container">
<?php
 include "header.php";
?> 
        <div class="split left">
          <h1>Fotos</h1>
          <a href="gfotos.php" class="button">Ver</a>         
        </div>
        <div class="split right">
          <h1>Vídeos</h1>
          <a href="gvideo.php" class="button">Ver</a>
        </div>
</div>
<script src="main.js"></script>
<?php
 include "footer.php";
?> 
</body>
</html>