<?php
require_once("Models/mEtudiant.php");

class cetudiant {
function ajouter_un_etudiant($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant){
        $ajout= ajoutEtudiant($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant);
    if($ajout){ 
        header('Location: etudiant.php?action=liste_etudiant'); 
    }
    else{
        echo("Echec insertion");
    }
}

function liste_etudiants(){
    $etudiant= obtenir_les_etudiants();
    require("Views/admin/liste_etudiant.php");
}
function supprimer_un_etudiant($id_etudiant){
    $etudiant=supprimer_etudiant($id_etudiant);
    require("Views/admin/liste_etudiant.php");
    header('Location: etudiant.php?action=liste_etudiant'); 
    
}
function modification_un_etudiant($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant, $id_etudiant){
    $modifier = modifier_Membre($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant, $id_etudiant);
    if($modifier){ 
        header('Location: etudiant.php?action=liste_etudiant'); 
    }
    else{
        echo("Echec de modification");
    }
}
function modification_etudiant($id_etudiant){
	$etudiant = obtenir_un_etudiant($id_etudiant);
    require("Views/admin/modification_etudiant.php");
    //header('Location:formulaire_modification_prof.php');
}

}
?>