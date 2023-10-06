<?php 
session_start();
include_once "inc/header.php"; 
include_once "./inc/nav.php";
?>
<div class="container">
    <form action="views/inscription.php" method="post">
        <div class="form-group">

            <label class="mt-5 link-warning mb-3">Sexe :</label>
            <div class="form-check">
                <input class="form-check-input border-primary-subtle border-3 mt-3 translate-middle-y " type="radio" name="sexe"  value="M">
                <label class="form-check-label link-warning  lh-lg">Homme</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-primary-subtle border-3 mt-3 translate-middle-y " type="radio" name="sexe"  value="F">
                <label class="form-check-label link-warning  lh-lg">Femme</label>
            </div>
            <div class="form-check">
                <input class="form-check-input border-primary-subtle border-3 mt-3 translate-middle-y " type="radio" name="sexe" value="O">
                <label class="form-check-label link-warning  lh-lg pb-5" >Autre</label>
            </div>

            <div class="form-group link-warning">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control border-primary-subtle border-3 mt-3 w-50" id="nom" name="nom" >
            </div>
    
            <div class="form-group link-warning mt-3">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control border-primary-subtle border-3 mt-3 w-50" id="prenom" name="prenom" >
            </div>

            <div class="form-group link-warning mt-3">
            <label>Date de naissance:</label>
            <input type="date" class="form-control border-primary-subtle border-3 mt-3 link-primary w-25" name="date_de_naissance" >
            </div>

            <div class="form-group link-warning mt-3">
            <label>Adresse :</label>
            <input type="text" class="form-control border-primary-subtle border-3 mt-3 w-50" name="adresse" >
            </div>

            <div class="form-group link-warning mt-3">
            <label>Numéro de téléphone :</label>
            <input type="text" class="form-control border-primary-subtle border-3 mt-3 w-50" name="numero_de_telephone" >
            </div>

            <div class="form-group link-warning mt-3">
            <label for="email">Email :</label>
            <input type="email" class="form-control border-primary-subtle border-3 mt-3 w-50" id="email" name="email" >
            </div>

            <div class="form-group link-warning mt-3">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control border-primary-subtle border-3 mt-3 w-50" id="mdp" name="mdp" >
            </div>

        </div>
 
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-primary-subtle border-3 mt-2" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "inc/footer.php"; ?>