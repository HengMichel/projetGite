<?php
session_start();

include_once "./inc/header.php";
include_once "./inc/nav.php";
?>


<!-- <div class="container"> -->
    <!-- <form action="views/accueil.php" method="post"> -->
<div class="restaurant link-warning">
    <h1>Les services</h1>
    <div class="service1">
        <h2>Restauration</h2>
        <p>Notre restaurant Gastronomique vous accueille tous les jours de 6h30 à 11h00 pour le petit déjeuner. </p>
        <p>Le déjeuner débute de 12h à 15h.</p>
        <p>Tandis que le dîner vous invite à partir de 18h et s'achève à 00h00.</p>
    </div>
</div>
<div class="petitDejeuner">
    <h2>Notre formule petit déjeuner à volonté au prix tous doux de 10€/jour</h2>
    <img src="../views/asset/img/petit_dejeuner.jpg" alt="">
    <img src="../views/asset/img/petit_dejeuner2.jpg" alt="">
    <img src="../views/asset/img/petit_dejeuner3.jpg" alt="">
    <img src="../views/asset/img/petit_dejeuner4.jpg" alt="">
    <button type="submit" id="bouton" class="btn btn-primary border-primary-subtle border-3 bg-success" name="reservation" value="submit">Je réserve</button>
</div>
<div class="dejeuner">
    <h2>Notre formule Gastronomique à volonté au prix tous doux de 30€/jour</h2>
   
    <div class="container d-flex justify-content-center align-items-center">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">

            <div class="carousel-inner ">
                <div class="carousel-item active">
                  <img src="../views/asset/img/restaurant1.webp" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant2.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant3.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant4.webp" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant5.webp" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant6.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant7.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant8.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant9.png" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant10.png" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant11.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/restaurant.avif" class="d-block w-75 m-auto" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Suivant</span>
            </button>
        </div>

    </div>
    <button type="submit" id="bouton" class="btn btn-primary border-primary-subtle border-3 bg-success" name="reservation" value="submit">Je réserve</button>
</div>

<div class="extreme">
    <h2>Vos loisirs les plus Extrêmes sont réunis ici ne les ratés pas pour seulement 20€ la journée au choix!!!!</h2>

    <div class="container2 d-flex justify-content-center align-items-center">

        <div id="carouselExampleFade2" class="carousel slide carousel-fade">
            <div class="carousel-inner2 ">
                <div class="carousel-item active">
                  <img src="../views/asset/img/loisir1.marelle.webp" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir2.Art.jpg" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir3.elastique.webp" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir4.Art.png" class="d-block w-75 m-auto" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisire5.lastique.avif" class="d-block w-75 m-auto" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <button type="submit" id="bouton" class="btn btn-primary border-primary-subtle border-3 bg-danger" name="reservation" value="submit">Je réserve</button>
    </div>
</div>

<div class="detente">
    <h2>Une envie de vous plonger dans de nouvelles aventures en douceur et sans efforts ? </h2>
    <h3>Voici notre sensationnel à un prix d'ami de seulement 20€ au choix</h3>

    <div class="container2 d-flex justify-content-center align-items-center">

        <div id="carouselExampleFade3" class="carousel slide carousel-fade">
            <div class="carousel-inner2 ">
                <div class="carousel-item active">
                  <img src="../views/asset/img/loisir6.Elico.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir7.Detente.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir8Montgolfieres.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir9rando.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir10rando.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir11rando.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir12.montgolfiere.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir13.Detente.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../views/asset/img/loisir14.Elico.jpg" class="d-block w-75 m-auto border-primary-subtle" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <button type="submit" id="bouton" class="btn btn-primary border-primary-subtle border-3 bg-danger" name="reservation" value="submit">Je réserve</button>
    </div>
</div>



    
    



<?php
include_once "../views/inc/footer.php";
?>