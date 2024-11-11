<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="mb-4">Le company a bien été créé</h3>
            <?php
                $id = $u->getId(); 
                echo "<p>Company <a href='index.php?controller=company&action=read&id=$id'>$id</a></p>";
            ?>
        </div>
    </div>
</div>
