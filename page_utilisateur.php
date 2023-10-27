<?php 
session_start();
include_once "./views/inc/header.php"; 
require_once "./views/inc/nav.php";
require_once "./models/utilisateurModel.php";
require_once "./models/reservationModel.php";
$utilisateurReservationList = Utilisateur::utilisateurReservationList($_SESSION["id_utilisateur"]);
$price = 0;

?>

<div class="container bg-secondary">
    <table class="table  bg-secondary">
        <thead >
            <tr>
                <th class="id_hotel bg-secondary link-light">Id Reservation</th>
                <th class="start_date bg-secondary link-light">Début de réservation</th>
                <th class="end_date bg-secondary link-light">Fin de réservation</th>
                <th class="state bg-secondary link-light">Etat</th>
                <th class="price bg-secondary link-light">Prix</th>
                <th class="action bg-secondary link-light m-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($utilisateurReservationList as $reservation){ 
                $price+=$book['reservation_prix'];?>
                <tr>
                    <td class="idreservation border-success-subtle border-3 mt-2"><?= $reservation["id_reservation"]; ?></td>
                    <td class="debut_date_reservation border-success-subtle border-3 mt-2"><?= $reservation["debut_date_reservation"]; ?></td>
                    <td class="fin_date_reservation border-success-subtle border-3 mt-2"><?= $reservation["fin_date_reservation"]; ?></td>

                    <td class="reservation_etat border-success-subtle border-3 mt-2"><?= $reservation["reservation_etat"]; ?></td>

                    <td class="reservation_prix border-success-subtle border-3 mt-2"><?= $reservation["reservation_prix"]; ?></td>

                    <td class="btn btn-success-subtle m-3 border-success-subtle border-3 mt-2">
                        <!-- <a href="model/db_booking.php?id_book= -->
                        <a href="http://localhost/models/reservationModel.php?id_book=
                        <?=$reservation['id_reservation']; ?>">Cancel</a></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr class="table-active">
                <td class="total_reservation border-success-subtle border-3 mt-2 border-top alert-link" colspan="4">Total de vos réservations:</td>
                <td class="prix border-success-subtle border-3 mt-2 border-top alert-link"><?= $prix; ?></td>
            </tr>
        </tfoot>
    </table>
</div>    

<?php include_once "./views/inc/footer.php"; ?>