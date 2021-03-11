<?php
function getPDO(){
  try{
    $connexion = new PDO('mysql:host=localhost; dbname=examen_php', 'root', '');

    return $connexion; 
    
}
catch(PDOException $e) {
  echo 'Echec: ' .$e->getMessage();
}
} 
?>