<?php 
    function card($imgCard, $titulo, $descricao) {
        return "
        <div class='card' >
            <img class='card-img' src='$imgCard' alt='imagem da música'>
            <h2 class='card-h1' >$titulo</h2>
            <p class='card-p' >$descricao</p>
        </div>
        ";
    }
?>