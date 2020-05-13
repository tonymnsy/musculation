<?php
//DataBase Connect
$con = mysqli_connect("localhost", "root", "", "musculation");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}

$identifiant = $_POST['identifiant'];
$adresse = $_POST['adresse'];
$tel = $_POST['tel'];
$heure = $_POST['heure'];

$save_data = "INSERT INTO membres(identifiant, adresse, tel, heure)VALUES('$identifiant','$adresse','$tel','$heure')";
$result = mysqli_query($con, $save_data);
?>

