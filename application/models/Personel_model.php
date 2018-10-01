<?php

class Personel_model extends CI_Model{



    public function get_all(){
        $result = $this->db->get('personel')->result();
        return $result;
    }

    public function get($where){
        $result = $this->db->where($where)->get('personel')->row();
        return $result;
    }

    public function insert($data){
       $insert = $this->db->insert('personel', $data);
       return $insert;
    }

    public function update($where, $data){
        $update = $this->db->where($where)->update('personel',$data);
        return $update;

    }

    public function delete($where){
        $delete = $this->db->where($where)->delete('personel');
        return $delete;
    }

    public function order_by($field= 'id' , $order ='ASC'){
        $result = $this->db->order_by($field, $order)->get('personel')->result();
        return $result;

    }


}