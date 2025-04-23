<?php 

    function artigo($faviconSite, $nomeSite, $tituloArtigo, $textoArtigo, $imageArtigo) {
        return 
        "<article class='artigo'>
            <div class='div-group'>
                <div class='group-top'>
                    <img src='$faviconSite' alt='favicon'>
                    <h3>$nomeSite</h3>
                </div>
                <div class='group-left'>
                    <h1>$tituloArtigo</h1>
                    <p>$textoArtigo</p>
                </div>
            </div>
            <div class='group-right'>
                <img src='$imageArtigo' alt='imagem artigo' class='image-artigo'>
            </div>
        </article>";
    }
?>