<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/projetGite/models/database.php";

class Utilisateur{

    // pour la méthode static, pas besoin de déclarer une variable à l'inverse des contructeurs

    // methode pour s'inscrire
    public static function addUtilisateur($nom,$prenom,$email,$mdp,$statut,$date_de_naissance,$adresse,$numero_de_telephone,$sexe){

        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();

        // preparation de la requête
        $request =$db->prepare("INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `mdp`, `statut`, `date_de_naissance`, `adresse`, `numero_de_telephone`, `sexe`) VALUES (?,?,?,?,?,?,?,?,?)");

        // exécuter la requête
        try {
            $request->execute(array($nom,$prenom,$email,$mdp,$statut,$date_de_naissance,$adresse,$numero_de_telephone,$sexe));

            // rediriger vers la page login.php
            header("Location: http://localhost/gite_db/list_utilisateur.php");
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour tout afficher 
    public static function findAllUtilisateurs(){
        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();
        // preparation de la requête
        $request =$db->prepare("SELECT * FROM utilisateur");
        // exécuter la requête
        $utilisateurList = null;
        try {
            $request->execute();
            // récupère le résultat dans un tableau
            $utilisateurList = $request->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $utilisateurList;
    }


    // methode pour tout afficher 
    public static function deleteUtilisateurById($id){
        // on appel la fonction dbConnect qui est dans la class Database
        $db = Database::dbConnect();
        // preparation de la requête
        $request =$db->prepare(" DELETE FROM utilisateur WHERE id_utilisateur = ?");

        // exécuter la requête
        $result = false;
        try {
            $request->execute(array($id));
            $result = true;
            
        // rediriger vers la page login.php
        header("Location: http://localhost/gite_db/list_utilisateur.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;

    }

    // methode pour tout afficher 
    public static function findUtilisateurById($id){
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM utilisateur WHERE id_utilisateur=?");
        //executer la requete
        try {
            $request->execute(array($id));;
            // recuperer le resultat dans un tableau
            $utilisateur = $request->fetch();

            return $utilisateur;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    public static function  utilisateurReservationList($idUtilisateur){
        //  se connecter a la db (database) ou bd (base de données)
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM reservation WHERE utilisateur_id = ? AND reservation_etat = ?");
        // executer la requete
        $utilisateurReservationList = null;
        try {
            $request->execute(array($idUtilisateur,'en cours'));
            // récuperer le resultat dans un tableau
            $utilisateurReservationList = $request->fetchAll(PDO::FETCH_ASSOC);
        } catch ( PDOException $e) {
            echo $e->getMessage();
        }
        return $utilisateurReservationList;
    }


}












