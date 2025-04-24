<?php 

    function artigo($faviconSite, $nomeSite, $tituloArtigo, $textoArtigo, $imageArtigo) {
        return 
        "<article class='artigo'>
            <div class='group-top'>
                <img src='$faviconSite' alt='favicon' class='artigo-favicon'>
                <h3 class='artigo-h3'>$nomeSite</h3>
            </div>
            <div class='group-bottom'>
                <div class='group-left'>
                    <h1 class='artigo-h1'>$tituloArtigo</h1>
                    <p class='artigo-p'>$textoArtigo</p>
                </div>
                <div class='group-right'>
                    <img src='$imageArtigo' alt='imagem artigo' class='artigo-image'>
                </div>
            </div>
        </article>";
    }
?>