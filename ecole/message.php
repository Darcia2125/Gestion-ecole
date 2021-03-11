
<?php
    include("Controllers/cMessage.php");

    //@include("Models/Message.php");

    $message = new cMessage();

    $message->listes_etudiants();
    var_dump($_POST);
    

    if (isset($_GET['action'])) {
        $action = htmlspecialchars($_GET['action']);
        
        if($action == 'envoie') {
            $destinataire = $_POST['destinataire'];

            $objet = $_POST['objet'];
            $contenu = $_POST["contenu"];
            $date_message = $_POST['date'];

            foreach($destinataire as $id_destinataire) {
                
                ajoutMessage($objet, date('Y-m-d h:i:s'), $id_destinataire, 1, $contenu, 10000);
            }

        }
    }        
?>