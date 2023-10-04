<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/projetGite/models/database.php";

class Service
{

    // pour la méthode static, pas besoin de déclarer une variable à l'inverse des contructeurs

    // methode pour s'inscrire
    public static function addService($date_reservation,$chambre_id,$prix_service,$type){

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request =$db->prepare("INSERT INTO `service`(`date_reservation`,`chambre_id`, `prix_service`,'type') VALUES (?,?,?,?)");

        // exécuter la requête
        try {
            $request->execute(array($date_reservation,$chambre_id,$prix_service,$type));

            // rediriger vers la page login.php
            header("Location: http://localhost/projetGite/list_service.php");
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function findAllServices(){

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request =$db->prepare("SELECT * FROM service");

        // exécuter la requête
        $serviceList = null;
        try {
            $request->execute();
    
            // récupère le résultat dans un tableau
            $serviceList = $request->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $serviceList;
    }

    // methode pour tout afficher triée par date de démarrage décroissante
    public static function findAllServicesSortedByStartDateDesc() {
    // on appel la fonction dbConnect qui est dans la class Database
    $db = Database::dbConnect();

    // preparation de la requête avec la clause ORDER BY
    $request = $db->prepare("SELECT * FROM service ORDER BY start_date DESC");

    // exécuter la requête
    $serviceList = null;
    try {
        $request->execute();
        // récupère le résultat dans un tableau
        $serviceList = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $serviceList;
}



    public static function findAllTables(){

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête

        $request =$db->prepare("SELECT c.*, g.*, p.*, COUNT(cp.utilisateur_id) AS nombre_utilisateurs  FROM service c  LEFT JOIN utilisateur p ON c.winner_id = p.id_utilisateur  LEFT JOIN chambre g ON c.chambre_id = g.id_chambre  LEFT JOIN utilisateur_service cp ON c.id_service = cp.service_id  GROUP BY c.id_service, g.id_chambre  ORDER BY c.date_debut_reservation DESC;");

        // exécuter la requête

        $serviceList = null;
        try {
            $request->execute();
    
            // récupère le résultat dans un tableau

            $serviceList = $request->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $serviceList;
    }


    // methode pour tout afficher 
    public static function deleteServiceById($id){
        
        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request =$db->prepare(" DELETE FROM service WHERE id_service = ?");

        // exécuter la requête
        $result = false;
        try {
            $request->execute(array($id));
            $result = true;
            
        // rediriger vers la page login.php
        header("Location: http://localhost/projetGite/list_service.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;

    }

    // methode pour tout afficher 
    public static function findServiceById($id){
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM service WHERE id_service=?");
        //executer la requete
        try {
            $request->execute(array($id));;
            // recuperer le resultat dans un tableau
            $service = $request->fetch();

            return $service;
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }
}