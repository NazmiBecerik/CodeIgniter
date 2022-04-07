<?php

class OdevModel extends CI_Model{
    public function __construct()
    {
        parent:: __construct();
    }

    public $tabloAdi = "odevcontact";

    public function insert($data=array()){
        return $this -> db -> insert($this->tabloAdi,$data);
    }

    public function getAll(){
        return $this->db->get($this->tabloAdi)->result();
    }
}

?>