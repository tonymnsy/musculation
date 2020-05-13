<?php
//On se connecte à notre base de donnée
$con = mysqli_connect("localhost", "root", "", "musculation");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}

global $con;


$del_id = $_POST['del_id'];

$delete = " DELETE FROM membres WHERE id = '".$del_id."'";
$result = mysqli_query($con, $delete);
 
 ?>