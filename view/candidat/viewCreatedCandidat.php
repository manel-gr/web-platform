
<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        <h3 class="alert-heading">Le candidat a bien été créé</h3>
        <?php
        $id = $u->getId(); 
        echo "<p>Candidat <a href='index.php?controller=candidat&action=read&id=$id' class='alert-link'>$id</a> a été créé avec succès.</p>";
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VkeT4g5S3d7El18NE3b6XN4CzCkkXue06A5FYlgTrL2F0uHS5eF+E1msDYfF7hXg" crossorigin="anonymous"></script>

