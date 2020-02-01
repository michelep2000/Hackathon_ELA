
<?php
    include "./arriba.php";
    inicioPag("inicio.php", "styles.css");
    include "./navBar.php";

    echo "<h1 class='titulo'>Bienvenido ".$_SESSION["nombre"]."</h1>";
?>

<img src="img/flor.png" alt="Smiley face" height="100" class="espacio4 mx-auto d-block">

<p class="centro1 lead">En la Fundación Luzón – Unidos Contra la ELA – no hay duda de la necesidad; legitimidad y beneficio general de la colaboración con organizaciones y profesionales sanitarios.

Somos conscientes de que aunando esfuerzos y sumando experiencias se optimizan los resultados.

Ni el intercambio de conocimientos ni la mejora en el entendimiento de los problemas de los afectados de ELA serían posibles en los términos actuales sin la interacción constante con otras entidades con las que compartimos objetivos e inquietudes.

Este tipo de acciones conjuntas las llevamos a cabo mediante patrocinios; acciones de difusión o firma de Convenios de Colaboración</p>

<div class="fondoInicioTotal bg-light">
<div class="container">
<p class="subtitulo">Últimas noticias de la Fundación Luzón</p>
    <div class="row fondoInicio">
        <div class="col-4 d-flex justify-content-lg-start">
            <div class="colum">
                <img src="img/twitterLogo.png" alt="Smiley face" height="42" class=" espacio mx-auto d-block">
                <a class="twitter-timeline" data-lang="es" data-width="400" data-height="800" data-theme="light" href="https://twitter.com/FundacionLuzon?ref_src=twsrc%5Etfw">Tweets by FundacionLuzon</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="col-4 text_center">
            <img src="img/instaLogo.png" alt="Smiley face" height="50" class=" espacio1 mx-auto d-block">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-741f206e-edbb-479e-b47b-adfd839af18f"></div>
        </div>
        <div class="col-4">
        <img src="img/Youtube_logo.png" alt="Smiley face" height="50" class=" espacio3 mx-auto d-block " >
        <iframe height="233" width= "350" src="https://www.youtube.com/embed/WLXCFxbqje4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe height="233" width= "350"src="https://www.youtube.com/embed/gltdk8oFZoo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe  height="233" width= "350" src="https://www.youtube.com/embed/gAZRnkk_JGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           
        </div>
    </div>
</div>
        </div>




    <?php include "./abajo.php";?>
