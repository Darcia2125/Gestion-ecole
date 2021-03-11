<?php
require_once("Models/Module.php");

class Cours{
function ajoutCours($categorie, $nom){
    $ajout = ajouterUnCours($categorie, $nom);   
    if($ajout){
        header('Location:cours.php?action=listeCours');
    }
    else{   
        echo "erreur durant l'ajout de cours";
    }
}

function affiche(){
    $cours = afficherCours();
    require("Views/admin/listeCours.php");
}    

function suppr($id_cours, $categories, $nom_cours){
    $supprimer=supprimer($id_cours, $categories, $nom_cours);
    require("Views/admin/listeCours.php");
    header('Location: cours.php?action=liste_membres'); 
    
}

function modifier($id_cours, $categories, $nom_cours){
    $modifier = modiffier($id_cours, $categories, $nom_cours);
    if($modifier){ 
        header('Location: cours.php?action=liste_membres'); 
    }
    else{
        echo("Echec de modification");
    }
}

function modif_cours($id_cours){
    $cours = afficherCours($id_cours);
    $id = $id_cours;
    require("Views/admin/modif_cours.php");
    
}  
}

?>