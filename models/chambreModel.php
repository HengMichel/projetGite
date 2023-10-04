<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/projetGite/models/database.php";

class Chambre
{

    // pour la méthode static, pas besoin de déclarer une variable à l'inverse des contructeurs

    // methode pour s'inscrire
    public static function addChambre($chambreId, $numeroChambre, $prix,$chambreImage,$capacite,$categorie,$etatChambre)
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("INSERT INTO `chambre`(`id_chambre`, `numero_chambre`, `prix`, `chambre_image`, `capacite`, `categorie`, `etat_chambre`) VALUES (?,?,?,?,?,?,?)");

        // exécuter la requête
        try {
            $request->execute(array($chambreId, $numeroChambre, $prix,$chambreImage,$capacite,$categorie,$etatChambre));

            // rediriger vers la page list_chambre.php
            header("Location: http://localhost/projetGite/list_chambre.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function findAllChambres()
    {

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request = $db->prepare("SELECT * FROM `chambre`");

        // exécuter la requête
        $chambreList = null;
        try {
            $request->execute();

            // récupère le résultat dans un tableau
            $chambreList = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $chambreList;
    }

    // methode pour tout afficher 
    public static function deleteChambreById($id)
    {
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("DELETE FROM chambre WHERE id_chambre=?");
        //executer la requete

        try {
            $request->execute(array($id));
            // recuperer le resultat dans un tableau
            header("Location: http://localhost/projetGite/list_chambre.php");
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function findChambreById($id)
    {
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM chambre WHERE id_chambre=?");
        //executer la requete
        try {
            $request->execute(array($id));;
            // recuperer le resultat dans un tableau
            $chambre = $request->fetch();

            return $chambre;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function  chambreList(){
        //  se connecter a la db (database) ou bd (base de données)
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM chambre");
        // executer la requete
        $listChambre = null;
        try {
            $request->execute();
            // récuperer le resultat dans un tableau
            $listChambre = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch ( PDOException $e) {
            echo $e->getMessage();
        }
        return $listChambre;
    }














    public static function  reservationList($idUtilisateur){
        //  se connecter a la db (database) ou bd (base de données)
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM reservation WHERE utilisateur_id = ? AND etat_reservation = ?");
        // executer la requete
        $listReservation = null;
        try {
            $request->execute(array($idUtilisateur,'en cours'));
            // récuperer le resultat dans un tableau
            $listReservation = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch ( PDOException $e) {
            echo $e->getMessage();
        }
        return $listReservation;
    }
}
