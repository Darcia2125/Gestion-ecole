<?php
require_once('Controllers/module.php');
  $Cours = new Cours();
 if(isset($_GET['action'])){ 
     $action = htmlspecialchars($_GET['action']); 
    
 
    if($action == "ajouter"){
        $categorie = htmlspecialchars($_POST["categorie"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $Cours->ajoutCours($categorie, $nom);
    }
    else if($action == "listeCours"){
      $Cours->affiche();
  }
  else if ($action == "supprimer" && isset($_GET['id_cours'])) {
    $id_cours = htmlspecialchars($_GET['id_cours']);
    $categories=$_POST['categories'];
    $nom_cours=$_POST['nom_cours'];
    $Cours->suppr($id_cours, $categories, $nom_cours);
}
     }
     else if($action == "modifier" && isset($_GET['id_cours'])){
        $id_cours = $_GET['id_cours'];
         $prof->modif_cours($id_cours);
     }
     else if($action == "modifier"){ 
        $id_cours = htmlspecialchars($_POST['id_cours']);
        $categories=$_POST['categories'];
        $nom_cours=$_POST['nom_cours'];
         $prof->modifier($id_cours, $categories, $nom_cours); 
     }
    

?>