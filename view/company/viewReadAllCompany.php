
<?php
if(isset($_GET['delete_msg'])){
    echo '<div class="alert alert-success" role="alert">' . $_GET['delete_msg'] . '</div>';
}
?>



<table class="table table-hover table-bordered table-striped extra-mt">
<thead>
            <tr>
                
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>pasword</th>
                <th>numero</th>
                <th>autre numero</th>
                <th>Industry</th>
                <th>location</th>
                <th>country</th>
				<th>ID_user</th>
                <th>UPDATE</th>
                <th>DELETE</th>


            </tr>
<tbody>
<?php foreach ($tab_u as $u){?>



				        
       
	<tr>


    <th><?php echo $u->getId() ?></th>       
		<th><?php echo $u->getName() ?></th>
		<th><?php echo $u->getEmail() ?></th>
		<th><?php echo $u->getPassword() ?></th>
		<th><?php echo $u->getNum() ?></th>
        <th><?php echo $u->getAutre_num() ?></th>
		<th><?php echo $u->getIndustry() ?></th>
		<th><?php echo $u->getlocation() ?></th>
        <th><?php echo $u->getCountry() ?></th>
		<th><?php echo $u->getID_user() ?></th>
		
		<?php $id=$u->getId(); ?>
		<th><?php echo "<a href='index.php?controller=company&action=update&id=  $id;' class='btn btn-outline-success'>Modifier</a>" ?></th>
		<th><?php echo "<a href='index.php?controller=company&action=delete&id=$id' class='btn btn-outline-danger'> Supprimer </a>" ?></th>

    </tr>




<?php }?>
</tbody>


</thead>

</table> 
<a href='index.php?controller=company&action=create'  class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Ajouter une nouvelle company</a></br>



