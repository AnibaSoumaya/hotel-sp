<?php
include_once(__DIR__ . '/../models/pays.php');
include_once(__DIR__ . '/../database/config/config.php');

class PaysController extends Connexion {

    function __construct() {
        parent::__construct();
    }

    function insert(Pays $p) {
        $query = "INSERT INTO pays (name, description, status, img) VALUES (?, ?, ?, ?)";
        $res = $this->conn->prepare($query);

        $array = array($p->getName(), $p->getDescription(), $p->getStatus(), $p->getImg());
        return $res->execute($array);
    }

    function listePays() {
        $query = "SELECT * FROM pays";
        $res = $this->conn->prepare($query);
        $res->execute();
        $allPays = $res->fetchAll(PDO::FETCH_OBJ);
        return $allPays;
    }

    function paysByStatus($status) {
        $query = "SELECT * FROM pays WHERE status = ?";
        $res = $this->conn->prepare($query);
        $res->execute([$status]);
        $array = $res->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    function getPaysById($id) {
        $query = "SELECT * FROM pays WHERE id = ?";
        $res = $this->conn->prepare($query);
        $res->execute([$id]);
        $array = $res->fetch(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getroombyidstatus($id){
        $query="SELECT * FROM pays WHERE status = 1 AND id=? ";
        $r=$this->conn->prepare($query);
        $r->execute([$id]);
        $pp=$r->fetch(PDO::FETCH_ASSOC);
        return $pp;
}
}
?>