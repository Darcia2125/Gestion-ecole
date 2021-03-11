<?php
require('dataconnect.php');

$pdo = getPDO();

//insérer unne entrée(ligne) dans une base de donnée
function ajouterUnCours($categorie, $nom){
    global $pdo;
    $req = $pdo->prepare("INSERT INTO cours(categories, nom_cours) VALUES (?, ?) ");
    $req->execute(array($categorie, $nom));
    if($req){
        return true;
    }
    else{
        return "erreur d'ajout";
    }

}
//modifiez un champ
function modiffier($categorie, $nom, $id_cours){
    global $pdo;
    $mmodif = $pdo ->prepare("UPDATE cours SET categories = ?, nom_cours = ?, id_cours = ? WHERE cours.id_cours = ?" );
    $mmodif -> execute (array($id_cours, $categories, $nom_cours));
    if($mmodif){
        return true;
    }
    else{
        return "erreur de modification";
    }
}

//supprimer une entrée:un cours
function supprimer($id_cours){
    global $pdo;
    $query = $pdo ->query("DELETE FROM cours WHERE cours.id_cours=?");
    $query->execute(array($id_cours, $categories, $nom_cours));
        if($query){ 
            return true;
        }
        else{
            echo "Erreur de suppression";
        }  
}

//afficher la liste des cours
function afficherCours(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM cours");
    $cours = $query->fetchAll();
    return $cours;
}
?>