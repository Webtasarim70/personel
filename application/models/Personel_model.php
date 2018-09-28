<?php

class Personel_model extends CI_Model{



    public function get_all(){
        $result = $this->db->get('personel')->result();
        return $result;
    }

    public function get(){}
    public function insert($data){
       $insert = $this->db->insert('personel', $data);
       return $insert;
    }
    public function update(){}
    public function delete(){}
    public function order_by(){}


}