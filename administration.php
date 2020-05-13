<?php
//Connection à la Base de Données
$con = mysqli_connect("localhost", "id12463590_anthony", "pd8Ujdra", "id12463590_muscu");
if (!$con) {
    echo "Database connect error" . mysqli_error($con);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</head>


<!-- BOUTON OUVERTURE MODAL AJOUT DE MEMBRE ET RETOUR SUR SITE -->
<center>
    <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#addEmpModal">
        AJOUTER UN MEMBRE
    </button>
    <a href="index.php" class="btn btn-warning mt-3">Retourner sur le site</a>
</center>
<!--  FIN BOUTON OUVERTURE MODAL AJOUT DE MEMBRE ET RETOUR SUR SITE -->



<!-- FENETRE MODAL D'AJOUT DE MEMBRE -->
<div class="modal fade" id="addEmpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau membre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Prénom + Nom </label>
                        <input type="text" class='form-control'  id='identifiant' placeholder=" Entrer les identifiants">
                        <!--name=identifiant -->
                        <label id="1b1Name" style="color:red"></label>
                        <!--id utilisé pour affichage erreur en js -->
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class='form-control' name='adresse' id='adresse' placeholder="Entrer l'adresse du membre">
                        <!--name=adresse -->
                        <label id="1b1Adresse" style="color:red"></label>
                        <!--id utilisé pour affichage erreur en js -->
                    </div>

                    <div class="form-group">
                        <label>Numéro Téléphone</label>
                        <input type="text" class='form-control' name='tel' id='tel' placeholder="Entrer le numéro de téléphone">
                        <!--name=tel -->
                        <label id="1b1Tel" style="color:red"></label>
                        <!--id utilisé pour affichage erreur en js -->
                    </div>

                    <div class="form-group">
                        <label>Nombre de séances semaine</label>
                        <input type="text" class='form-control' name='heure' id='heure' placeholder="Entrer le nombre de séance souscrite">
                        <!--name=heure -->
                        <label id="1b1Heure" style="color:red"></label>
                        <!--id utilisé pour affichage erreur en js -->
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" id="save">Sauvegarder</button><!-- id="save" pour faire le lien avec la bdd au clique -->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN FENTRE MODAL D'AJOUT DE MEMBRE -->

<br>


<!-- ENTETE DESCRIPTIF -->
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Prénom + Nom</th>
            <th>Adresse (Ville et CP)</th>
            <th>Numéro de téléphone</th>
            <th>Nombre de séance + cotisation</th>
            <th>Action</th>
        </tr>
    </thead>
    <!-- FIN ENTETE DESCRIPTIF -->

  

    <!-- LES DONNEES QUI SERONT AFFICHE DANS NOT INTERFACE D'ADMINISTRATION -->
    <tbody>
        <?php
        
        // on créait une variable qui récupere toutes les données.
        $select = "SELECT * FROM membres";
        // On créait un variable qui effetuer une requête sur la base de donnée.
        $result = mysqli_query($con, $select);
        //On créait une variable qui retourne une ligne de résultat sous la forme d'un tableau associatif.
        while ($row = mysqli_fetch_array($result)) {
            // On créait plusieurs variable qui vont chercher les infos dans la base de donnée.
            $id = $row['id'];
            $identifiant = $row['identifiant'];
            $adresse = $row['adresse'];
            $tel = $row['tel'];
            $heure = $row['heure'];
        ?>
            <tr>
                <!-- On affiche nos donnée dans un tableau HTML -->
                <td><?php echo $id; ?></td>
                <td><?php echo $identifiant; ?></td>
                <td><?php echo $adresse; ?></td>
                <td><?php echo $tel; ?></td>
                <td><?php echo $heure; ?></td>
                <td><button class="btn btn-success btn-xs view_data" id="<?php echo $id; ?>">Voir</button>
                    <button class="btn btn-warning btn-xs edit_data" id="<?php echo $id; ?>">Editer</button>
                    <button class="btn btn-danger btn-xs del_data" id="<?php echo $id; ?>">Supprimer</button></td>
            </tr>
        <?php } ?>
    </tbody>
    <!-- FIN DES DONNEES QUI SERONT AFFICHE DANS L'INTERFACE D'ADMINISTRATION -->
</table>



<!-- FENETRE MODAL D'EDITION DE MEMBRES -->
<div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="post" id="updateForm">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Mise à jour des membres</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body" id="update_details"></div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" id="update">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--FIN FENETRE MODAL D'EDITION DE MEMBRES -->


<!-- FENETRE MODAL DE CONFIRMATION DE SUPPRESSION -->
<div class="modal fade bs-example-modal-sm" id="delViewEmpModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form action="" method="post" id="deleteForm">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Supprimer un membre</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body" id="delete_details">



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-danger" id="delete">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  FIN FENETRE MODAL DE CONFIRMATION DE SUPPRESSION  -->




<!-- !!! ZONE SCRIPT !!! -->



<script type="text/javascript">
    //  Le DOM (définition wikipédia) en gros c'est le code html.
    // En gros quand tu as du Js qui influe sur les balise html il
    //  faut etre sur que tes balise existent. Parfois le Js se charge trop rapidement et le site 
    //  n'est pas encore affiché quand le Js tente d’accéder à un élément du html.
    //  Du coup on utilise des fonction pour n’exécuter le Js que quand on est sur que le DOM est prêt à être manipulé par le Js.
    $(document).ready(function() {


        // ERREUR + CONFIRMATION -> AJOUT DE MEMBRE 

        $(document).on('click', '#save', function() {
            var identifiant = $("#identifiant").val();
            var adresse = $("#adresse").val();
            var tel = $("#tel").val();
            var heure = $("#heure").val();

            if (identifiant == "") {
                $("#1b1Name").html("Entrer identifiant");
            } else if (adresse == "") {
                $("#1b1Adresse").html("Entrer adresse");
            } else if (tel == "") {
                $("#1b1Tel").html("Entrer téléphone");
            } else if (heure == "") {
                $("#1b1Heure").html("Entrer l'heure");
            } else {
                $.ajax({
                    url: "save_data.php",
                    method: "POST",
                    data: {
                        identifiant: identifiant,
                        adresse: adresse,
                        tel: tel,
                        heure: heure
                    },
                    success: function(data) {
                        alert("1 membre ajouté avec succès");
                        $("#addEmpModal").modal('hide');
                        location.reload();
                    }
                });
            }
        }); 



        //view
        $(".view_data").popover({ 
            title: fetchData,     
            html: true, 
            placement: 'left'
        });
        function fetchData(){ 
            var fetch_data;
            var id = $(this).attr('id');
            $.ajax({
                url: 'fetch.php',
                type: 'post',
                data: {
                    id: id
                },
                async: false,
                success: function(data) {
                    fetch_data = data;
                }
            });
            return fetch_data;
        } 


        //Edit Data
        $(document).on('click', '.edit_data', function() {
            var edit_id = $(this).attr('id');
            $.ajax({
                url: "edit_data.php",
                type: "POST",
                data: {
                    edit_id: edit_id
                },
                success: function(data) {
                    $("#update_details").html(data);
                    $("#editEmpModal").modal('show');

                }
            });

        });
        //update Data

        $(document).on('click', '#update', function() {
            $.ajax({
                url: "update_data.php",
                type: "POST",
                data: $("#updateForm").serialize(),
                success: function(data) {
                    alert('Mise à jour avec succes');
                    $("#editEmpModal").modal('hide');
                    location.reload();

                }
            });

        });

        //Delete view Data

        $(document).on('click', '.del_data', function() {
            var del_id = $(this).attr('id');
            $.ajax({
                url: "delview_data.php",
                type: "POST",
                data: {
                    del_id: del_id
                },
                success: function(data) {
                    $("#delete_details").html(data);
                    $("#delViewEmpModal").modal('show');

                }
            });

        });

        //Suppression dans la base de donnée

        $(document).on('click', '#delete', function() {
            $.ajax({
                url: "delete_data.php",
                type: "POST",
                data: $("#deleteForm").serialize(),
                success: function(data) {
                    alert('Suppression du membre avec succes');
                    $("#delViewEmpModal").modal('hide');
                    location.reload();

                }
            });

        });


    });
</script>