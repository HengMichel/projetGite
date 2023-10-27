<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/projetGite/models/database.php";
if(isset($_POST["reservation"])){
    // récuprer les infos
    $idChambre = htmlspecialchars($_POST["id_reservation"]);
    $startDate = htmlspecialchars($_POST["debut_date_reservation"]);
    $endDate = htmlspecialchars($_POST["fin_date_reservation"]);
    $prix = htmlspecialchars($_POST["prix"]);
    
    // convertir en date en seconde avec strtotime depuis le 1janvier 1960
    $dateStart = date("Ymd",strtotime($startDate));
    $dateEnd = date("Ymd",strtotime($endDate));

    $duration = strtotime($dateEnd) - strtotime($dateStart);

    $nbDays = $duration / 86400;
    $totalPrice = $prix * $nbDays;

    // date du jour
    $today = date("Ymd");

    // si $today est > a la date de début de réservation ou $today est > à la date de fin de réservation
    if(strtotime($today)> strtotime($startDate) || strtotime($today)> strtotime($endtDate)){
        echo '<script>alert("votre date de début ou de fin de réservation ne peut pas être inferieur à la date d aujourd hui")</script>';
        echo '<script>window.location.href = "http://localhost/reservation.php?room='.$idChambre.'&price='.$prix.'";</script>';

    }else{

        // se connecter à la bd
        $db = Database::dbConnect();
    
        // préparer la requête pour vérifier si la chambre est dispo entre la date de départ et la date de fin
        $request = $db->prepare("SELECT * FROM reservation WHERE chambre_id = ? AND ((debut_date_reservation <= ? AND fin_date_reservation >= ?) OR (debut_date_reservation <= ? AND fin_date_reservation >= ?))");
    
        // executer la requete
        try {
            $request->execute(array($idChambre, $startDate,$startDate, $endDate, $endDate));
    
            // recuperer le résultat
            $reservation = $request->fetch();
            if(empty($reservation)){
                if($startDate<$endDate){
    
                    //  preparer la requete pour reserver la chambre
                    $request = $db->prepare("INSERT INTO `reservation`(`debut_date_reservation`,`fin_date_reservation`,`utilisateur_id`, `chambre_id`, `reservation_prix`, `reservation_etat`) VALUES (?,?,?,?,?,?)");
    
                    // executer la requete
                    try{
                        // $request->execute(array($startDate,$endDate,$_SESSION["id_user"],$idRoom,$price*$nbDays,'in progress'));
                        $request->execute(array($startDate, $endDate, $_SESSION['id_utilisateur'], $idRoom, $totalPrice, "en cours"));

                        header("Location: http://localhost/page_utilisateur.php");
    
                    // Réservation réussie
                    echo "Réservation réussie!";
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }
                    
                } else {
                    // Dates invalides
                    echo "Les dates de réservation ne sont pas valides.";
                }
            }   else {
                // La chambre n'est pas disponible pour ces dates
                echo "La chambre n'est pas disponible pour les dates sélectionnées.";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

if(isset($_GET['id_reservation'])){

        // se connecter à la bd
        $db = Database::dbConnect();

        // préparer la requête pour annuler la réservation
        $request = $db->prepare("UPDATE reservation SET reservation_etat = ? WHERE id_reservation = ?");
        // exécuter la requête
        try {
            $request->execute(array("annuler", $_GET['id_reservation']));
            // redirection vers user_home.php
            header("Location: http://localhost/page_utilisateur.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
}