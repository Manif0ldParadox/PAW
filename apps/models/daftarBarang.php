<?php

include __DIR__ . '/../Model.php';

class daftarBarang extends Model{
    private $daftar = [];
    protected $db = null;

    public function __construct() {
        $this->db = new DB();
        $this->db->connect('mysql','localhost','root','santa123','mvcapp');
    }

    public function getDataAll() {
        $stmt = "select * from daftarbarang";
        $query = $this->db->query($stmt);
        $data = [];
        while ($result = $this->db->fetch_array($query)) {
            $data[] = $result;
        }
        return $data;
    }

    public function getDataById($id) {
        $stmt = "select * from daftarbarang where id = $id";
        $query = $this->db->query($stmt);
        $data = [];
        $data = $this->db->fetch_array($query);
        return $data;
    }
}