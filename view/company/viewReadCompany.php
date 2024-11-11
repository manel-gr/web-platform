
<table class="table table-hover table-bordered table-striped">
<thead  >
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
                


            </tr>
<tbody>
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
		
    </tr>

</tbody>


</thead>

</table>  


	 <?php echo "<a href='index.php?controller=company' class='btn btn-success'>done</a>"; ?>
</br>



