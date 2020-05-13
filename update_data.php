<?php
//On se connecte à notre base de donnée
$con = mysqli_connect("localhost", "root", "", "musculation");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}

global $con;

//on créait des variable qui vont chercher ce que le user entre
    $edit_id = $_POST['edit_id'];
    $identifiant = $_POST['identifiant'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['tel'];
    $heure = $_POST['heure'];

 // on créait une variable qui va mettre à jour grâce a UPDATE toutes les données du membres en fonction de l'id du user qu'on veut modifier
    $update = "UPDATE membres SET identifiant = '".$identifiant."',adresse='".$adresse."',tel='".$tel."',heure = '".$heure." 
    'WHERE id = '".$edit_id."'";
    
    $result = mysqli_query($con, $update);
?>