<?php
include_once "../inc/header.php";
include_once "../inc/nav.php";
require_once "./models/serviceModel.php";
if (isset($_GET['id_service'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_service'];
    // appel de la methode returnBook
    $service = Service::findServiceById($id);
}
?>

<div class="container">
    <h1 class="m-5 link-warning">Ajouter un service</h1>
    <form action="../traitement/action.php" method="post">

    <div class="form-group link-light mt-3">
            <label>Numéro de chambre :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3"  name="chambre_number" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label>Prix du service :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="prix_service" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label>Capacité :</label>
            <input type="number" class="form-control mt-3 border-success-subtle border-3" name="capacite" >
        </div>
 
        <div class="form-group form-group list-group link-light mt-3 ">
            <label>Categorie :</label>
            <select name="categorie" class="form-control mt-3 border-success-subtle border-3">
                <option value="">Choisir la categorie</option>
                <option value="classique">Classique</option>
                <option value="piscine">Piscine</option>
            </select>
        </div>

        <div class="form-group link-light mt-3">
            <label>Photo :</label>
            <input type="file" class="form-control mt-3 border-success-subtle border-3" name="image" >
        </div>
        
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="add_chambre" value="submit">Submit</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>