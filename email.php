<?php
if(isset($_POST['objet']) && !empty($_POST['objet']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['nom']) &&!empty($_POST['nom']) && isset($_POST['prenom']) &&!empty($_POST['prenom']) &&isset($_POST['telephone']) &&!empty($_POST['telephone']) &&isset($_POST['message']) && !empty($_POST['message'])){

$destinataire ="contact@bluelinedev.fr";
$objet = $_POST['objet'];
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];

$to = $destinataire;
$sujet = $objet;
$header = $email;

$options ='MIME-VErsion:1.0'."\r\n";
$options.='Content-type:text/html;charset=utf-8'."\r\n";

$message =   '<html>
    <body style="background-color:blue;color:white">
    <p>Expédideur:'.$email.'</p>
    <p style="background-color:blue;color:white">Nom:'.$nom.'<span><p></p>'.$prenom.'</span></p>
    <p style="background-color:blue;color:white">Téléphone:'.$telephone.'</p>
    <p style="background-color:blue;color:white">Objet du mail:'.$sujet.'</p>
    <p style=background-color:blue;color:white>Message:'.$message.'</p>
    </body>
    </html>
';

    //Fonction mail de php
    mail($destinataire, $objet, $message, $options);

    header("Location: reussi.php");
 
}else{
    header("Location: echec.php");
   
}
