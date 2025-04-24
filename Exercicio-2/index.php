<?php 
    require_once "./components/artigo.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main-artigo">
        <?= artigo("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV2kX89wCG04ZRA9b8dzTscHAWA269FXDWSQ&s","Laravel Pro Tips","Laravel Pro Tips - The best tweets & articles about Laravel!","Here's a pro tip for all you Laravel developers: You can customize the default order of data retrieved from relationships!","https://pbs.twimg.com/media/FOG28lHUcAAk6Om.jpg?name=medium") ?>

        <?= artigo("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXFyz6NJvwPg9XkWg2kSf8wuwKii7gzzPk4w&s","Mindfire Solutions","Mindfire Solutions: Software Development Company in India","Mindfire Solutions is amongst the leading providers of Software & IT services encompassing development and delivery of complex projects for enhancing ...","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR687XmA8uVYlQsbmWbxfVRXkXOqxoEPA42AQ&s") ?>
    </main>
</body>
</html>