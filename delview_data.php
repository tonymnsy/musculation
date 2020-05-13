<?php
//DataBase Connect
$con = mysqli_connect("localhost", "root", "", "musculation");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}
global $con;

if (isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];

    $delView = "SELECT * FROM membres WHERE id='$del_id'";
    $result = mysqli_query($con, $delView);
    while ($data = mysqli_fetch_array($result)) { 

        $id = $data['id'];
        $identifiant = $data['identifiant'];
        $adresse = $data['adresse'];
        $tel = $data['tel'];
        $heure = $data['heure'];
    }
}
?>

<input type="hidden" name="del_id" value="<?php echo $id; ?>">
<div class="form-group">
    <label>Numéro : <?php echo $id; ?></label>

</div>

<div class="form-group">
    <label>Nom/Prénom : <?php echo $identifiant; ?></label>

</div>

<div class="form-group">
    <label>Adresse : <?php echo $adresse; ?></label>

</div>

<div class="form-group">
    <label>Numéro Téléphone : <?php echo $tel; ?></label>

</div>

<div class="form-group">
    <label>Nombre d'heure : <?php echo $heure; ?></label>

</div>