<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-success" role="alert">
                Le candidat a bien été modifié.
            </div>
            <?php
                $id = $u->getId(); 
                echo "<p>Candidat <a href='index.php?controller=candidat&action=read&id=$id'>$id</a></p>";
            ?>
        </div>
    </div>
</div>
