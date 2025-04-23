<?php 
    require_once "./components/card.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://images.icon-icons.com/844/PNG/512/Spotify_icon-icons.com_67077.png" type="image/x-icon">
</head>
<body>
    <div class="lista-card">
        <?= card('https://cdn.venngage.com/template/thumbnail/full/bf008bfe-9bf6-4511-b795-e86f070bfff5.webp','Disconnected','me da um real') ?>
        <?= card('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6sNkxpNnb7F9PAUcoKljZiC9op6suWIXGPw&s','Photograph','Bem gay')?>
        <?= card('https://cdn.venngage.com/template/thumbnail/full/679bf7bb-2170-4d54-9485-240baa4ae33c.webp','Dreamy','Não sei mais está aí')?>
        <?= card('https://www.vagalume.com.br/dynimage/news19824-big.webp','Rap God','Rap bom demais')?>
        <?= card('https://cdn-images.dzcdn.net/images/artist/5d2fa7f140a6bdc2c864c3465a61fc71/500x500.jpg','God\'s Plan','Música boa demais')?>
        <?= card('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgyWjGxk6sOoScIoupQ7KKoz3Jxxv7F6hcCA&s','Alone','Muito hype')?>
    </div>
</body>
</html>