<?php
require("dataconnect.php");
$pdo = getPDO();
function ajoutEtudiant($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO etudiant(nom, prenom, adresse, facebook, email, mdp_Etudiant) VALUES(?, ?, ?, ?, ?, ?)");
    $query->execute(array($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant));
    if($query){ 
        return true;
    }
    else{
        echo "Erreur d'ajout d'etudiant";
    }
    } 

function obtenir_les_etudiants(){
        global $pdo;
        $query = $pdo->query("SELECT * FROM etudiant");
        $etudiant = $query->fetchAll();
        return $etudiant;
    }

function obtenir_un_etudiant(){
        global $pdo;
        $query = $pdo->query("SELECT * FROM etudiant WHERE id_etudiant = ?");
        $query->execute(array($id_etudiant));
        $etudiant = $query->fetchAll();
        return $etudiant;
    }

function supprimer_etudiant($id_etudiant){
        global $pdo;
        $query = $pdo->prepare("DELETE FROM etudiant WHERE id_etudiant=?");
        $query->execute(array($id_etudiant));
        if($query){ 
            return true;
        }
        else{
            echo "Erreur de suppression";
        }  
    }
function modifier_Membre($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant, $id_etudiant){
        global $pdo;
        $query = $pdo->prepare("UPDATE etudiant SET nom=?, prenom=?, adresse=?, facebook=?, email=?, mdp_Etudiant=? WHERE etudiant.id_etudiant=?");
        $query->execute(array($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant, $id_etudiant));
        if($query){ 
            return true;
        }
        else{
            echo "Erreur modification etudiant";
        }   
    }
    ?>
    