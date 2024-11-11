
<?php
/*$id=$up->getId();
?>
<form method="POST" action="index.php?controller=company&action=updated&id=<?=$id?>">
<fieldset>
     <legend>Modification d'un company </legend> 
	 <p>
		 <label for="id">id</label> :
		 <input type="text" value= "<?=$id?>" name="id" id="id"  readonly/>
	 </p> 
	 <p>
		 <label for="n">name</label> :
		 <input type="text" value= "<?=$up->getName()?>" name="n" id="n"  required/>
     </p> 
     <label for="email" >email :</label> 
     
     <input type="email" value= "<?=$up->getEmail()?>" name="email" id="email"    required/>
	 <p>
		<input class="btn btn-success" type="submit" value="update" /> 
	 </p>
   </fieldset> 
</form>*/

$id = $up->getId();
?>
<div class="container mt-5">
    <form method="POST" action="index.php?controller=company&action=updated&id=<?= $id ?>">
        <fieldset class="border p-4">
            <legend class="w-auto">Modification d'une company</legend>
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" value="<?= $id ?>" name="id" id="id" readonly/>
            </div>
            <div class="form-group">
                <label for="n">Name</label>
                <input type="text" class="form-control" value="<?= $up->getName() ?>" name="n" id="n" required/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="<?= $up->getEmail() ?>" name="email" id="email" required/>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </fieldset>
    </form>
</div>


