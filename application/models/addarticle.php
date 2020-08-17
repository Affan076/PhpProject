<?php
class Addarticle extends CI_Model
{
    public function add($array)
    {
        $id=$this->session->userdata('id');
        return $this->db->insert('articles',$array);
       
    }
    public function del($id)
    {
       return $this->db->delete('articles',['id'=>$id]);
    }
}