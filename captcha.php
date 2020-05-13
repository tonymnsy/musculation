<?php

// Permet de garder en mémoire la valuer du captcha afin de le comparer à celui entrer par le user
session_start();
 // on stock un chiffre aléatoire dans la variable de session captcha
$_SESSION['captcha'] = rand(1000,9999);
// creer une image supportant la couleur de 70*30
$img = imagecreatetruecolor(70,30);
// definit une couleur pour une image , gris claire
$fill_color = imagecolorallocate($img,230,230,230);
// dessine un rectangle 
imagefilledrectangle($img,0,0,70,30,$fill_color);
//On stock une couleur sur l'image , noir
$text_color = imagecolorallocate($img, 10,10,10);
// On stock la police
$font = './police.ttf';
// On ecrit un text sur une image
imagettftext($img,23,0,5,30,$text_color,$font,$_SESSION['captcha']);

//Affiche une image sur notre navigateur
header("Content-type:image/jpeg");
//Envoyer l'image vers le navigateur
imagejpeg($img);
//Libère la mémoire associé a l'image 
imagedestroy($img);
?>
