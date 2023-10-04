<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/chambreModel.php";
$chambreList = Chambre::findAllChambres();
?>

<div class="container">
    <h1 class="m-5 link-warning ">Liste des chambres</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="border-warning border-3 link-warning bg-black">Id Chambre</th>
                <th class="border-warning border-3 link-warning bg-black">Numéro de chambre</th>
                <th class="border-warning border-3 link-warning bg-black">Prix</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">Capacité</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">Catégorie</th>
                <th class="border-warning border-3 link-warning border-3 bg-black">Etat de la chambre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chambreList as $chambre) { ?>
                <tr>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $chambre['id_chambre']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $chambre['numero_chambre']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $chambre['prix']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $chambre['capacite']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $chambre['categorie']; ?></td>
                    <td class="border-warning border-3 link-warning border-3 bg-black"><?= $chambre['etat_chambre']; ?></td>

                    <td class="border-warning border-3 link-warning border-3 bg-black">    
                        <a class="border-warning border-3 link-danger" href="./traitement/action.php?id_chambre_delete=<?= $chambre['id_chambre']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
include_once "./inc/footer.php";
?>