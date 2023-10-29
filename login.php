<?php
session_start();
 include_once "inc/header.php"; ?>
<div class="container">
    <form action="model/connexion.php" method="post">
        <div class="form-group link-warning fw-medium col-6">
            <label class="email bg-dark" for="email">Email :</label>
            <input type="email" class="form-control border-warning border-3 mt-3" id="email" name="email" >
        </div>
 
        <div class="form-group link-warning mt-3 fw-medium col-6">
            <label class="password bg-dark" for="password">Password :</label>
            <input type="password" class="form-control border-warning border-3 mt-3" id="password" name="password" >
        </div>

        <button type="submit" id="bouton" class="btn mt-5 mb-5 bg-dark border-warning border-2 link-warning" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "inc/footer.php"; ?>