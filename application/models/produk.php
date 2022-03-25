<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class produk extends CI_Model{
    
    function getDataBarang(){
        $query = $this->db->get('tbl_listbarang');
        return $query->result();
    }

    function insertBarang($data){
        $this->db->insert('tbl_listbarang', $data);
    }

    function detailBarang($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_listbarang');
        return $query->row();
    }

    function updateBarang($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tbl_listbarang', $data);
    }

    function deleteBarang($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_listbarang');
    }
}
