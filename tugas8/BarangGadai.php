<?php
require_once "Database.php";

class BarangGadai {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $query = "SELECT * FROM barang_gadai";
        $result = $this->db->conn->query($query);
        return $result;
    }
}
