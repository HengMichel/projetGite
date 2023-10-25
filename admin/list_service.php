<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
require_once "./models/serviceModel.php";
require_once "./models/chambreModel.php";
$serviceList = Service::findAllTables();
?>

<div class="container">
    <table>
        <thead>
            <tr>
                <th class="id_Annonce bg-secondary link-light" >Id Service</th>
                <th class="A bg-secondary link-light">Date de reservation :</th>
                <th class="p bg-secondary link-light">Prix :</th>
                <th class="ty bg-secondary link-light">Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($serviceList as $listService){ ?>
                <tr>
                    <td class="idAnnonce border-success-subtle border-3 mt-2"><?= $listService["id"]; ?></td>
                    <td class="A border-success-subtle border-3 mt-2 text-uppercase"><?= $listService["date_reservation"]; ?></td>
                    <td class="prix border-success-subtle border-3 mt-2"><?= $listService["prix"]; ?></td>
                    <td class="type border-success-subtle border-3 mt-2"><?= $annonce["type"]; ?></td>
                  
                    <td><a class="btn btn-info bg-secondary border-success-subtle border-2 link-light"   
                    href="./consulter_une_annonce.php?annonce=<?= $annonce["id"]; ?>">Consulter</a></td>

                    <!-- dois créer un fichier consulter_service qui affichera l'activité concerné avec photos et description -->                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include_once "./inc/footer.php";
?>
