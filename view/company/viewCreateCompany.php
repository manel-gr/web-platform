<style>
    .form-label {
        font-weight: bold;
    }
    
    .form-control {
        border-radius: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
    }

    .btn-create {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 20px;
        padding: 12px 24px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-create:hover {
        background-color: #45a049;
    }
</style>

<form method="POST" action='index.php?controller=company&action=created' class="row g-3">
    <legend><h1 class="mb-4">add company</h1></legend>
    
    <div class="col-md-6">
        <label for="id" class="form-label">ID :</label>
        <input type="text" name="id" id="id" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="n" class="form-label">Nom :</label>
        <input type="text" name="n" id="n" class="form-control" required/>
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email :</label>
        <input type="email" name="email" id="email" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="password" class="form-label">Mot de passe :</label>
        <input type="password" name="password" id="password" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="num" class="form-label">Numéro :</label>
        <input type="text" name="num" id="num" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="autre_num" class="form-label">Autre numéro :</label>
        <input type="text" name="autre_num" id="autre_num" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="industry" class="form-label">Industrie :</label>
        <input type="text" name="industry" id="industry" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="location" class="form-label">Localisation de l'entreprise :</label>
        <input type="text" name="location" id="location" class="form-control" required/>
    </div>

    <div class="col-md-6">
        <label for="country" class="form-label">Pays :</label>
        <input type="text" name="country" id="country" class="form-control" required/>
    </div>
    
    <div class="col-md-6">
        <label for="ID_user" class="form-label">ID utilisateur :</label>
        <input type="text" name="ID_user" id="ID_user" class="form-control" required/>
    </div>
    
    <div class="col-md-12">
        <button type="submit" class="btn btn-create">Créer</button>
    </div>
</form>
