<?php
//DataBase Connect
$con = mysqli_connect("localhost", "root", "", "musculation");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}
//si l'on récupére bien l'id
if(isset($_POST['id'])){
//on redefinit 
    $id=$_POST['id'];
//On sélectionne tout de la table membres quand l'id = id récupéré
    $fetch="SELECT * FROM membres WHERE id='$id'";
 // requete sur notre bdd
    $result=mysqli_query($con,$fetch);
 //On définit $row afin qu'il récupére une ligne de résultat , 
 //il le fait jusqu'a ce que tout soit récupéré 
    while($row = mysqli_fetch_array($result)){?>
<p><b>Détail du membres</b></p>
<p>Nom: <?php echo $row['identifiant']; ?></p>
<p>Adresse: <?php echo $row['adresse']; ?></p>
<p>Téléphone: <?php echo $row['tel']; ?></p>
<p>Nombre de jour + tarif: <?php echo $row['heure']; ?></p>
<?php
    }
}
?>