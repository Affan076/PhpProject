<?php
class loginmodel extends CI_Model
{

    public function isvalidate($username,$password)
    {
        $q=$this->db->where(['username'=>$username,'password'=>$password])->get('users');
        if($q->num_rows())
        {
            return $q->row()->id;
        }
        else
        {
            return false;
        }

    }
    public function articlelist()
    {
        $id=$this->session->userdata('id');
        $q=$this->db->select()
        ->from('articles')
        ->where(['user_id'=>$id])
        ->get();
        return $q->result();
    }
    
}