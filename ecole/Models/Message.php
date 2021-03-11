<?php
$pdo = new PDO('mysql:host=localhost;dbname=examen_php','root','');


function obtenir_les_messages(){
  global $pdo;
  $query = $pdo->query("SELECT * FROM messages");
  $etudiant = $query->fetchAll();
  return $etudiant;
}

function ajoutMessage($objet, $date, $destinataire, $prof_expediteur, $contenu, $etudiant_expediteur){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO messages(objet, dates, id_etudiant_destinataire, id_prof_expediteur, contenu, id_etudiant_expediteur) VALUES(?, ?, ?, ?, ?, ?)");
    $query->execute(array($objet, $date, $destinataire, $prof_expediteur, $contenu, $etudiant_expediteur));
    if($query){ 
        return true;
    }
    else{
        echo "Erreur de récupération de message";
    }
} 



