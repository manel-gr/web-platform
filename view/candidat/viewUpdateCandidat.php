<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="index.php?controller=candidat&action=updated&id=<?=$id?>">
                <fieldset>
                    <legend>Modification d'un candidat</legend>
                    <div class="mb-3">
                        <label for="id" class="form-label">ID :</label>
                        <input type="text" value="<?=$id?>" name="id" id="id" class="form-control" readonly/>
                    </div>
                    <div class="mb-3">
                        <label for="n" class="form-label">Nom :</label>
                        <input type="text" value="<?=$up->getName()?>" name="n" id="n" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label for="p" class="form-label">Nom de famille :</label>
                        <input type="text" value="<?=$up->getFamily_name()?>" name="p" id="p" class="form-control" required/>
                    </div>
                    <button type="submit" class="btn btn-success">Mettre à jour</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
