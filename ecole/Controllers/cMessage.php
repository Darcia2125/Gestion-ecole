
<?php

require("Models/Message.php");
require("Models/mEtudiant.php");

class cMessage {
  function liste_message(){
      $message= obtenir_les_messages();
      require("Views/admin/listemessages.php");
  }
  function listes_etudiants(){
    $etudiants = obtenir_les_etudiants();


    require("Views/public/messageetudiant.php");
  }

  function affiche(){
    $cours = afficherCours();
    require("Views/public/messageprof.php");
  }    

  function insertionmessage(){
    $message = ajoutMessage($objet, $date, $destinataire, $prof_expediteur, $contenu, $etudiant_expediteur);
    if ($message) {
      header("Location: message.php?");
    }
  }
}

?>