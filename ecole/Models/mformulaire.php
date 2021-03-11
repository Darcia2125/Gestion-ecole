<?php
$pdo = new PDO('mysql:host=localhost;dbname=examen_php','root','');

function ajoutMembre($nom, $adresse, $tel, $email, $photo){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO professeur(nom_prof, adresse_prof, tel_prof, email_prof, photo_prof) VALUES(?, ?, ?, ?, ?)");
    $query->execute(array($nom, $adresse, $tel, $email, $photo));
    if($query){ 
        return true;
    }
    else{
        echo "Erreur ajout prof";
    }
    } 

function obtenir_les_membres(){
        global $pdo;
        $query = $pdo->query("SELECT * FROM professeur");
        $professeur = $query->fetchAll();
        return $professeur;
    }

function supprimer_prof($nom, $adresse, $tel, $email, $photo,$id_prof){
        global $pdo;
        $query = $pdo->query("DELETE FROM professeur WHERE professeur.id_prof=?");
        $query->execute(array($nom, $adresse, $tel, $email, $photo,$id_prof));
        if($query){ 
            return true;
        }
        else{
            echo "Erreur de suppression";
        }  
    }
function modifierMembre($nom, $adresse, $tel, $email, $photo,$id_prof){
        global $pdo;
        $query = $pdo->prepare("UPDATE professeur SET nom_prof=?, adresse_prof=?, tel_prof=?,email_prof=?,photo_prof=? WHERE professeur.id_prof=?");
        $query->execute(array($nom, $adresse, $tel, $email, $photo,$id_prof));
        if($query){ 
            return true;
        }
        else{
            echo "Erreur modification membre";
        }   
    }

    ?>
    
