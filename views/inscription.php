<?php 
session_start();
include_once "inc/header.php"; 
include_once "./inc/nav.php";
?>
<div class="container">
    <form action="views/inscription.php" method="post">
        <div class="form-group">

            <div class="form-group link-light">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control border-primary-subtle border-3 mt-3" id="nom" name="nom" >
            </div>
    
            <div class="form-group link-light mt-3">
                <label for="prenom link-light">Prénom :</label>
                <input type="text" class="form-control border-primary-subtle border-3 mt-3" id="prenom" name="prenom" >
            </div>

            <div class="form-group link-light mt-3">
            <label for="email link-light">Email :</label>
            <input type="email" class="form-control border-primary-subtle border-3 mt-3" id="email" name="email" >
            </div>

            <div class="form-group link-light mt-3">
            <label for="password link-light">Mot de passe :</label>
            <input type="password" class="form-control border-primary-subtle border-3 mt-3" id="mdp" name="mdp" >
            </div>

            <div class="form-group link-light mt-3">
            <label>Date de naissance:</label>
            <input type="date" class="form-control border-primary-subtle border-3 mt-3" name="date_de_naissance" >
            </div>

            <div class="form-group link-light mt-3">
            <label>Adresse :</label>
            <input type="text" class="form-control border-primary-subtle border-3 mt-3" name="adresse" >
            </div>

            <div class="form-group link-light mt-3">
            <label>Numéro de téléphone :</label>
            <input type="text" class="form-control border-primary-subtle border-3 mt-3" name="numero_de_telephone" >
            </div>

            <label class="mt-5 link-light mb-3">Sexe :</label>
            <div class="form-check">
                <input class="form-check-input border-primary-subtle border-3 mt-3 translate-middle-y " type="radio" name="sexe"  value="M">
                <label class="form-check-label link-light lh-lg">Homme</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-primary-subtle border-3 mt-3 translate-middle-y " type="radio" name="sexe"  value="F">
                <label class="form-check-label link-light lh-lg">Femme</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-primary-subtle border-3 mt-3 translate-middle-y " type="radio" name="sexe" value="O">
                <label class="form-check-label link-light lh-lg" >Autre</label>
            </div>
        </div>
 
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-primary-subtle border-3 mt-2 bg-secondary" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "inc/footer.php"; ?>