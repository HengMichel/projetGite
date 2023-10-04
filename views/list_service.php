
<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/serviceModel.php";
require_once "../models/chambreModel.php";
$serviceList = Service::findAllTables();
?>

<div class="container">
    <!-- <table>
    <thead>
            <tr>
                <th class="id_Annonce bg-secondary link-light" >Id Service</th>
                <th class="Annonce_title bg-secondary link-light">Annonce title</th>
                <th class="description bg-secondary link-light">Description</th>
                <th class="postal_code bg-secondary link-light">Postal code</th>
                <th class="city bg-secondary link-light">City</th>
                <th class="Annonce_state bg-secondary link-light">Type</th>
                <th class="price bg-secondary link-light">Price</th>
                <th class="etat bg-secondary link-light">Etat</th>
                
            </tr>
        </thead>
    </table> -->

    <form action="./model/db_booking.php" method="post">
        <input type="text" name="id_chambre" value="<?= $_GET["chambre"]; ?>" hidden>
        <input type="text" name="prix" value="<?= $_GET["prix"]; ?>" hidden>
        <div class="form-group link-light">
            <label>Date de début de la reservation :</label>
            <input type="date" class="form-control border-success-subtle border-3 mt-3" name="date_debut_reservation" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label>Date de fin de la réservation :</label>
            <input type="date" class="form-control border-success-subtle border-3 mt-3" name="date_de_fin_reservation" >
        </div>

        <button type="submit"  class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="service" value="submit">Submit</button>
    </form>
</div>




<?php
include_once "./inc/footer.php";
?>
