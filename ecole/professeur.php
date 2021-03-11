<?php 
require_once("Controllers/cformulaire.php");
$prof= new cprof();

try{
    if(isset($_GET['action'])){ 
        $action = htmlspecialchars($_GET['action']);  
    if($action =='ajoutMembre'){ 
        $nom=$_POST['nom_prof'];
        $adresse=$_POST['adresse_prof'];
        $tel=$_POST['tel_prof'];
        $email=$_POST['email_prof'];
        $photo=$_POST['photo_prof'];
        $prof->ajouter_un_membre($nom, $adresse, $tel, $email, $photo); 
    }
    else if($action == "liste_membres"){
       $prof -> liste_membres();
    }
    else if ($action == "delete" && isset($_GET['id_prof'])) {
        $id_prof = htmlspecialchars($_GET['id_prof']);
        $nom=$_POST['nom_prof'];
        $adresse=$_POST['adresse_prof'];
        $tel=$_POST['tel_prof'];
        $email=$_POST['email_prof'];
        $photo=$_POST['photo_prof'];
        $prof->supprimer_les_prof($nom, $adresse, $tel, $email, $photo,$id_prof);
    }
    else if($action == "modifier" && isset($_GET['id_prof'])){
       $id_prof = $_GET['id_prof'];
        $prof->formulaire_modification_prof($id_prof);

    }
    else if($action == "modifier_membre"){ 
        $nom=$_POST['nom_prof'];
        $adresse=$_POST['adresse_prof'];
        $tel=$_POST['tel_prof'];
        $email=$_POST['email_prof'];
        $photo=$_POST['photo_prof'];
        $id_prof=$_POST["id_prof"];
        $prof->modifier_un_membre($nom, $adresse, $tel, $email, $photo,$id_prof); 
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
