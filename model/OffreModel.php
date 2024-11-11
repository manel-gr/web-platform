<?php

class OffreModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllOffres() {
        $query = $this->db->prepare("SELECT * FROM offres");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>