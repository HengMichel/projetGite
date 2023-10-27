<?php
include_once "./views/inc/header.php";
include_once "./views/inc/nav.php";
require_once "./models/chambreModel.php";
require_once "./traitement/action.php";
$listChambre = Chambre::chambreList();

?>

<div class="container">
    
        <div class="bienvenue link-warning">
            <h1>Bienvenue au gîte DAKOTE</h1>
        </div>
        <div class="descriptionDescriptif">
            <h3>Descriptif</h3>
            <p>Descriptif 2023, susceptible de modifications pour 2024, merci de vous référer à la fiche descriptive validée lors de la réservation.

Vous aimez la mer, les sports nautiques, les belles randonnées et la nature préservée? Vous êtes au bon endroit! Le petit port touristique et animé de l'Aber Wrac'h est également réputé pour son centre nautique, les bateaux, ses magnifiques panoramas sur l'Aber et le phare de l'île Vierge, l'île Wrac'h, ... Les dunes Ste Marguerite sont également connues pour ses spots de kite-surf et de planche à voile, ses dunes sauvages, ses magnifiques randonnées, ses plages de sable blanc et eaux turquoises au pays des huîtres. Et c'est aussi le point de départ idéal pour visiter le Nord Finistère,

Au Port de l'Aber Wrac'h, cette belle maison neuve en bois est confortable et lumineuse a été aménagée en 2 gîtes mitoyens avec terrasses closes privatives et d'un jardin bordé d'un petit ruisseau rafraîchissant. Au rez-de-chaussée, elle comprend une entrée, une cuisine ouverte sur le séjour salon lumineux avec ses grandes baies vitrées et accès à la terrasse bois, un wc. A l'étage, une grande chambre avec 1lit 2 personnes 160x200 et un lit banquette 90x190 (poss pers supp), une salle de bain avec baignoire équipée d'une douche et un meuble vasque. A disposition également une buanderie avec lave linge, sèche linge et abri pour vos vélos.</p>
        </div>

        <div class="container2 d-flex flex-wrap justify-content-around">

            <?php foreach($listChambre as $chambre){ ?>
                <div class="card border-success-subtle mb-5" style="width: 28rem;">
                    <div class="img_chambre">
                        <img src="./views/asset/img/<?= $chambre["chambre_images"] ?> " class="card-img-top img-fluid" alt="image">
                    </div>
                    <div class="card-body">
                        <p class="card-text fa-2x"><?= $chambre["prix"]; ?>€/nuit</p>
                        <p class="card-text fa-bitcoin-sign fa-bitcoin-sign link-warning"><?= $chambre["categorie"]; ?></p>
                        <p class="card-text"><?= $chambre["capacite"]; ?> Capacité</p>
                        <a class="btn btn-info bg-secondary border-success-subtle border-2 link-light" 
                        href="./reservation.php?room=
                        <?= $chambre["id_chambre"]; ?>&price=<?= $chambre['prix'] ?>">Réserver</a>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="proprio">
           <h4>Les propriétaires</h4>
           <div class="photoProfile">
               <p><span>Jacqueline et Lucien</span></p>
               <img src="./views/asset/img/les_proprio.jpg " alt="">
           </div>
        </div>

</div>
<?php
include_once "../views/inc/footer.php";
?>