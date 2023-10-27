<?php
 include_once "./views/inc/header.php";
 require_once "./views/inc/nav.php";
 require_once "./traitement/action.php";
  ?>
  
<div class="container">
    <form action="./page_utilisateur.php" method="post">
        <div class="form-group link-warning">
            <label for="email">Email :</label>
            <input type="email" class="form-control border-success-subtle border-3 mt-3" id="email" name="email" >
        </div>
 
        <div class="form-group link-warning mt-3">
            <label for="password">Votre mot de passe :</label>
            <input type="password" class="form-control border-success-subtle border-3 mt-3" id="mdp" name="mdp" >
        </div>

        <button type="submit" id="bouton" class="btn btn-success mt-5 mb-5 border-success-subtle border-2 link-warning" name="submit" value="submit">Valider</button>
    </form>
</div>
<?php include_once "./views/inc/footer.php"; ?>