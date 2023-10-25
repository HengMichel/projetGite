<?php 
require_once "../views/inc/database.php";
if(isset($_POST["submit"])){
    // recuperer les infos saisies par le user
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    $date_de_naissance = htmlspecialchars($_POST["date_de_naissance"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $numero_de_telephone = htmlspecialchars($_POST["numero_de_telephone"]);
    $sexe = htmlspecialchars($_POST["sexe"]);

    // crypter le mot de passe
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    // etablir la connexion avec la bd
    $db = Database::dbConnect();
    // preparer la requete
    $request = $db->prepare("INSERT INTO  utilisateur (`nom`, `prenom`, `email`, `mdp`, `statut`,'date_de_naissance', `adresse`, `numero_de_telephone`, `sexe`) VALUES (?,?,?,?,?,?,?,?)");
    // executer la requete
    try {
        $request->execute(array($nom,$prenom,$email,$cryptedPassword,$date_de_naissance,$adresse ,$numero_de_telephone, $sexe));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
?>