<?php
require_once("Model.php");

class ModelOffreEmploi extends Model {
    protected static $table = 'offres_emploi';
    protected static $primary = 'id';

    // Propriétés de l'offre d'emploi
    private $id;
    private $title;
    private $company;
    private $description;
    private $experience;

    // Constructeur
    public function __construct($title, $company, $description, $experience) {
        parent::__construct();
        $this->title = $title;
        $this->company = $company;
        $this->description = $description;
        $this->experience = $experience;
    }

    // Méthode pour enregistrer une nouvelle offre d'emploi dans la base de données
    public function save() {
        $sql = "INSERT INTO " . self::$table . " (title, company, description, experience) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->title, $this->company, $this->description, $this->experience]);
    }

}
?>
