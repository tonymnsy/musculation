<?php
//DataBase Connect
$con = mysqli_connect("localhost", "root", "", "musculation");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}


if (isset($_POST['edit_id'])) {
    $edit_id = $_POST['edit_id'];

    $fetch = "SELECT * FROM membres WHERE id='$edit_id'";
    $result = mysqli_query($con, $fetch);
    while ($data = mysqli_fetch_array($result)) { 

        $id = $data['id'];
        $identifiant = $data['identifiant'];
        $adresse = $data['adresse'];
        $tel = $data['tel'];
        $heure = $data['heure'];
    }
}
?>

<div class="form-group">
    <label>Numéro</label>
    <input type="text" class='form-control' name='edit_id' id='edit_id' value="<?php echo $id; ?>"
    readonly="">
</div>

<div class="form-group">
    <label>Nom/Prénom</label>
    <input type="text" class='form-control' name='identifiant' id='identifiant' value="<?php echo $identifiant; ?>">
</div>

<div class="form-group">
    <label>Adresse</label>
    <input type="text" class='form-control' name='adresse' id='adresse' value="<?php echo $adresse; ?>">
</div>

<div class="form-group">
    <label>Numéro Téléphone</label>
    <input type="text" class='form-control' name='tel' id='tel' value="<?php echo $tel; ?>">
</div>

<div class="form-group">
    <label>Nombre d'heure</label>
    <input type="text" class='form-control' name='heure' id='heure' value="<?php echo $heure; ?>">
</div>