<?php
session_start();
//On stock le nom dans une variable
$nom = htmlspecialchars($_POST['nom']);
//on stock le mail
$mail = ($_POST['email']);
//on stock le sujet du message
$subject = htmlspecialchars($_POST['sujet']);
//on stock le message envoyé
$message = htmlspecialchars($_POST['message']);
// on stock le nom et le mail afin de savoir qui a envoyé
$headers = 'From: ' . $nom . '<' . $mail . '>' . "\r\n";
// on stock le mail du user afin de lui répondre 
$headers .= 'Reply-to:<' . $mail . '>' . "\r\n";
// on stock l'adresse de reception
$to = 'vimymuscu@gmail.com';

//Si tout nos champs ne sont pas vide alors on passe a la condition suivante
if (!empty($_POST['message']) and !empty($_POST['nom']) and !empty($_POST['email'])  and !empty($_POST['sujet'])) {
    //Verification de la forme du mail selon la syntaxe défini par la RFC 822
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        //Si ce qu'a rentré l'internaute = a la variable de session captcha
        if ($_POST['captcha'] == $_SESSION['captcha']) {
            // alors on envoie notre mail   
            mail($to, $subject, $message, $headers);
            require "validate.php";
        } else {

            require "erreur3.php";
        }
    } else {
        require "erreur2.php";
    }
} else {

    require "erreur1.php";
}
?>