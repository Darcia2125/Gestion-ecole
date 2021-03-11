<?php 
require_once("Controllers/Etudiant.php");
$etudiant= new cetudiant();

try{
    if(isset($_GET['action'])){ 
        $action = htmlspecialchars($_GET['action']);  
    if($action =='ajout_etudiant'){ 
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $facebook=$_POST['facebook'];
        $email=$_POST['email'];
        $mdpEtudiant=$_POST['mdp_Etudiant'];
        $etudiant->ajouter_un_etudiant($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant); 
    }
    else if($action == "liste_etudiant"){
       $etudiant -> liste_etudiants();
    }
    else if ($action == "supprimer" && isset($_GET['id_etudiant'])) {
        $id_etudiant = htmlspecialchars($_p['id_etudiant']);
        $nom=($_POST['nom']);
        $prenom=($_POST['prenom']);
        $adresse=($_POST['adresse']);
        $facebook=($_POST['facebook']);
        $email=($_POST['email']);
        $mdpEtudiant=($_POST['mdp_Etudiant']);
        $etudiant->supprimer_un_etudiantf($id_etudiant);
    }
     else if($action == "modifier" && isset($_GET['id_etudiant'])){
       $id_etudiant = ($_GET['id_etudiant']);
        modification_etudiant($id_etudiant);

     }
    else if($action == "modifier_membre"){
      $nom=($_POST['nom']);
      $prenom=($_POST['prenom']);
      $adresse=($_POST['adresse']);
      $facebook=($_POST['facebook']);
      $email=($_POST['email']);
      $mdpEtudiant=($_POST['mdp_Etudiant']);
      $id_etudiant=($_POST["id_etudiant"]);
      modifier_un_etudiant($nom, $prenom, $adresse, $facebook, $email, $mdpEtudiant, $id_etudiant); 
    }
}
    else {
        echo "yes";
    }
}
    catch (Exception $e){
        echo"<p>ERREUR : ".$e->getMessage();
    }


?>
