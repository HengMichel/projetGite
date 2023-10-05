<?php
include_once "./inc/header.php";
include_once "./inc/nav.php";
require_once "../models/chambreModel.php";

if (isset($_GET['id_chambre'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_chambre'];
    // appel de la methode returnBook
    $chambre = Chambre::findChambreById($id);
}

?>

<div class="container">
    <form action="./traitement/action.php" method="post" enctype="multipart/form-data">
        <div class="form-group list-group form-select-lg link-light">
            <h1 class="m-5 link-warning">Ajouter une chambre</h1>
            
        <div class="form-group link-warning mt-3">
            <label>Numéro de chambre :</label>
            <input type="text" class="form-control mt-3 border-3"  name="numero_chambre ">
        </div>
 
        <div class="form-group link-warning mt-3">
            <label>Prix de la chambre :</label>
            <input type="text" class="form-control mt-3 border-3" name="prix" >
        </div>
 
        <div class="form-group link-warning mt-3">
            <label>Photo :</label>
            <input type="file" class="form-control mt-3 border-3" name="image" >
        </div>

        <div class="form-group link-warning mt-3">
            <label>Capacité :</label>
            <input type="number" class="form-control mt-3 border-3" name="capacite" >
        </div>
 
        <div class="form-group form-group list-group link-warning mt-3 ">
            <label>Categorie :</label>
            <select name="categorie" class="form-control mt-3 border-3">
                <option value="">Choisir la categorie</option>
                <option value="classique">Classique</option>
                <option value="piscine">Piscine</option>
            </select>
        </div>

        
        <button type="submit" id="bouton" class="btn mt-5 mb-5 fw-semibold link-warning" name="add_room" value="submit">Enregistrer</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>