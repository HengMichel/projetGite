<?php
session_start();

require_once "../models/utilisateurModel.php";
require_once "../models/chambreModel.php";
require_once "../models/serviceModel.php";
require_once "../models/database.php";


if(isset($_POST["submit"])){
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // etablir la connexion avec la bd
    $db = Database::dbConnect();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM users WHERE email = ?");
    // executer la requete
    try {
        $request->execute(array($email));
        // recuperer le resultat de la requete qui est toujours un objet
        $userInfo = $request->fetch(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($userInfo);
        // echo "<pre>";
        if(empty($userInfo)){
            // definir la variable de session role
            echo "utilisateur inconnu";
        }else{
            // verifier si le mdp est correct
            if(password_verify($password,$userInfo["password"])){
                // si l'utilisateur est un admin
                if($userInfo["role"] == "admin"){
                    // definir la variable de session role
                    $_SESSION["role"] = $userInfo ["role"];
                    // header("Location: https://autumn-drunk.000webhostapp.com/admin/admin.php");
                    header("Location: http://localhost/projetGite/admin/admin.php");
                }else{
                    // definir la variable de session role
                    $_SESSION["role"] = $userInfo ["role"];
                    $_SESSION["id_user"] = $userInfo["id_user"];
                    // header("Location: https://autumn-drunk.000webhostapp.com/user_home.php");
                    header("Location: http://localhost/projetGite/user_home.php");
                }
            }else{
                echo "Ahh tu as oublié ton mot de passe ?";
            }
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }

}





if (isset($_GET['id_chambre_delete'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_chambre_delete'];
    // appel de la methode returnBook
    $chambre = Chambre::deleteChambreById($id);
}

if (isset($_POST['Chambre'])) {
    $numeroChambre = htmlspecialchars($_POST['title']);
    $prix = htmlspecialchars($_POST['prix']);
    $capacite = htmlspecialchars($_POST['capacite']);
    $categorie = htmlspecialchars($_POST['categorie']);

    // traitement de l'image
    $imgName = $_FILES["image"]["name"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $destination = $_SERVER["DOCUMENT_ROOT"]."/projetGite/assets/imgs/".$imgName;

    if(move_uploaded_file($tmpName,$destination)){
        //  se connecter a la bd
        $db = Database::dbConnect();
        // prépare la requete
        $request = $db->prepare("INSERT INTO chambre ( `numero_chambre`, `prix`, `chambre_image`, `capacite`, `categorie`, `etat_chambre`) VALUES (?,?,?,?,?,?,?)");
        // executer la requête
        try {
            $request->execute(array($numeroChambre,$prix,$imgName,$person,$capacite,$categorie,$etatChambre));
            // redirection vers list_room.php
            header("Location: http://localhost/projetGite/admin/chambre_list.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    // apeler la methode addChambre de la classe Chambre
    Chambre::addChambre($chambreId, $numeroChambre, $prix,$chambreImage,$capacite,$categorie,$etatChambre);
    // cette syntaxe uniquement pour appeler les méthodes static.
    // la méthode inscription étant static donc on utilise le nom de la classe suivi de "::" ensuite le nom de la méthode qui est inscriptions.

    }
}

if (isset($_POST['add_utilisateur'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $statut = htmlspecialchars($_POST['statut']);
    $date_de_naissance = htmlspecialchars($_POST['date_de_naissance']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $numero_de_telephone = htmlspecialchars($_POST['numero_de_telephone']);
    $sexe = htmlspecialchars($_POST['sexe']);

    // apeler la methode inscription de la classe Utilisateur
    Utilisateur::addUtilisateur($nom,$prenom,$email,$mdp,$statut,$date_de_naissance,$adresse,$numero_de_telephone,$sexe);
    // cette syntaxe uniquement pour appeler les méthodes static.
    // la méthode inscription étant static donc on utilise le nom de la classe suivi de "::" ensuite le nom de la méthode qui est inscriptions.

}

if (isset($_POST['add_service'])) {
    $date_reservation = htmlspecialchars($_POST['date_reservation']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $chambre_id = htmlspecialchars($_POST['chambre_id']);
    $prix_service = htmlspecialchars($_POST['prix_service']);
    $type = htmlspecialchars($_POST['type']);

    // apeler la methode inscription de la classe User
    Service::addService($date_reservation,$chambre_id,$prix_service,$type);
    // cette syntaxe uniquement pour appeler les méthodes static.
    // la méthode inscription étant static donc on utilise le nom de la classe suivi de "::" ensuite le nom de la méthode qui est inscriptions.

}


if (isset($_GET['idUtilisateur'])) {

    // identifiant de l'emprunter
    $idUtilisateur = htmlspecialchars($_GET['idUtilisateur']);

    // apeler la methode returnBook de la classe Book 
    Utilisateur::deleteUtilisateurById($idUtilisateur);
}


