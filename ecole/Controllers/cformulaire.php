<?php
require_once("Models/mformulaire.php");

class cprof {
function ajouter_un_membre($nom, $adresse, $tel, $email, $photo){
        $ajout= ajoutMembre($nom, $adresse, $tel, $email, $photo);
    if($ajout){ 
        header('Location: professeur.php?action=liste_membres'); 
    }
    else{
        echo("Echec insertion");
    }
}

function liste_membres(){
    $professeur= obtenir_les_membres();
    require("Views/admin/listeProf.php");
}
function supprimer_les_prof($nom, $adresse, $tel, $email, $photo,$id_prof){
    $professeur=supprimer_prof($nom, $adresse, $tel, $email, $photo,$_id_prof);
    require("Views/admin/listeProf.php");
    header('Location: professeur.php?action=liste_membres'); 
    
}
function modifier_un_membre($nom, $adresse, $tel, $email, $photo,$id_prof){
    $modifier = modifierMembre($nom, $adresse, $tel, $email, $photo, $id_prof);
    if($modifier){ 
        header('Location: professeur.php?action=liste_membres'); 
    }
    else{
        echo("Echec de modification");
    }
}
function formulaire_modification_prof($id_prof){
    $professeur = obtenir_les_membres($id_prof);
    $id = $id_prof;
    require("Views/admin/formulaire_modification_prof.php");
}

}
?>