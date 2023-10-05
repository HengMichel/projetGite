<?php
session_start();

include_once "./inc/header.php";
include_once "./inc/nav.php";
// require_once "../models/joueurModel.php";
// require_once "../models/jeuModel.php";
// require_once "../models/matchModel.php";
// $serviceList = Service::findAllTables();
// $utilisateurList = Utilisateur::findAllUtilisateurs();
// $chambreList = Chambre::findAllChambres();
// $MatchsSortedByStartDateDesc = Contest::findAllMatchsSortedByStartDateDesc();
?>
<div class="container">
    <!-- <form action="views/accueil.php" method="post"> -->
        <div>
            <h1>Bienvenue au gîte DAKOTE</h1>
        </div>
        <div class="descriptionDescriptif">
            <h3>Descriptif</h3>
            <p>Descriptif 2023, susceptible de modifications pour 2024, merci de vous référer à la fiche descriptive validée lors de la réservation.

Vous aimez la mer, les sports nautiques, les belles randonnées et la nature préservée? Vous êtes au bon endroit! Le petit port touristique et animé de l'Aber Wrac'h est également réputé pour son centre nautique, les bateaux, ses magnifiques panoramas sur l'Aber et le phare de l'île Vierge, l'île Wrac'h, ... Les dunes Ste Marguerite sont également connues pour ses spots de kite-surf et de planche à voile, ses dunes sauvages, ses magnifiques randonnées, ses plages de sable blanc et eaux turquoises au pays des huîtres. Et c'est aussi le point de départ idéal pour visiter le Nord Finistère,

Au Port de l'Aber Wrac'h, cette belle maison neuve en bois est confortable et lumineuse a été aménagée en 2 gîtes mitoyens avec terrasses closes privatives et d'un jardin bordé d'un petit ruisseau rafraîchissant. Au rez-de-chaussée, elle comprend une entrée, une cuisine ouverte sur le séjour salon lumineux avec ses grandes baies vitrées et accès à la terrasse bois, un wc. A l'étage, une grande chambre avec 1lit 2 personnes 160x200 et un lit banquette 90x190 (poss pers supp), une salle de bain avec baignoire équipée d'une douche et un meuble vasque. A disposition également une buanderie avec lave linge, sèche linge et abri pour vos vélos.</p>
        </div>
    <!-- </form> -->
</div>

<?php
include_once "../views/inc/footer.php";
?>