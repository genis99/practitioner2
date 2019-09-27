<?php

class QueryBuilder {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $query = $this->pdo->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }

    // NO HO FAREM PQ JA HO FA LARAVEL PERO ESTARIA BE TENIR:
    //public function insert($table, $parameters)
    //public function delete($table)
    // public function delete($table) UPDATE I SIMILARS

}