<?php
if(isset($_GET['delete_msg'])){
    echo '<div class="alert alert-success" role="alert">' . $_GET['delete_msg'] . '</div>';
}
?>








<table class="table table-hover table-bordered table-striped extra-mt">

<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Family name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Numero</th>
        <th>Date de naissance</th>
        <th>Location candidat</th>
        <th>ID user</th>
        <th>UPDATE</th>
        <th>DELETE</th>
    </tr>
</thead>
<tbody>
<?php foreach ($tab_u as $u) {?>
    <tr>
        <th><?php echo $u->getId() ?></th>
        <th><?php echo $u->getName() ?></th>
        <th><?php echo $u->getFamily_name()?></th>
        <th><?php echo $u->getEmail() ?></th>
        <th><?php echo $u->getPassword() ?></th>
        <th><?php echo $u->getNum() ?></th>
        <th><?php echo $u->getDate_de_naissance() ?></th>
        <th><?php echo $u->getLocation_candidat() ?></th>
        <th><?php echo $u->getID_user() ?></th>
        <?php $id=$u->getId(); ?>
        <th><?php echo "<a href='index.php?controller=candidat&action=update&id=$id' class='btn btn-outline-success'>Modifier</a>" ?></th>
        <th><?php echo "<a href='index.php?controller=candidat&action=delete&id=$id' class='btn btn-outline-danger'> Supprimer </a>" ?></th>

    </tr>
<?php }?>
</tbody>
</table>
<thead><tr><a href='index.php?controller=candidat&action=create' class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Ajouter un nouveau candidat</a><br><br>

<?php  
if(empty($tab_u)) {
    // Si $tab_u est vide ou null, affichez un message approprié
    echo "Aucun candidat à afficher.";
}

?>
