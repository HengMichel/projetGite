<?php 
session_start();
include_once "./inc/header.php"; 
require_once "./model/functions.php";
$listRoom = roomList();
?>

<div class="container d-flex flex-wrap justify-content-around">
    <?php foreach($listRoom as $room){ ?>
        <!-- fa-beat-fade -->
        <div class="card border-warning border-4 mb-5 " style="width: 18rem;">
            <div class="img_room">
                <img src="assets/imgs/chambres/<?= $room["room_imgs"] ?> " class="card-img-top img-fluid" alt="image">
            </div>
            <div class="card-body bg-success">
                <p class="card-text fa-2x fw-medium"><?= $room["price"]; ?>€/nuit</p>
                <p class="card-text link-warning fa-xl"><?= $room["category"]; ?></p>
                <p class="card-text fw-medium"><?= $room["persons"]; ?> Persons</p>
                <a class="btn bg-success border-warning border-4 link-warning m-0" 
                href="./booking.php?room=
                <?= $room["id_room"]; ?>&price=<?= $room['price'] ?>">Book this Room</a>
            </div>
        </div>
    <?php } ?>
</div>
<?php include_once "inc/footer.php"; ?>