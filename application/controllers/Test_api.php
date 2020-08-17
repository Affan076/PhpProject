<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_api extends CI_Controller {

    public function login()
    {
      $method=$_SERVER['REQUEST_METHOD'];
      if($method!='POST')
      {
          json_output(400,array('status'=>400,'message'=>'Bad Request.'));
      }
      else{
        $this->load->model('Mymodel');
          $chech_auth=$this->Mymodel->authentication();
          if($chech_auth)
          {
              $params=$_REQUEST;
              $username=$params['username'];
              $password=$params['password'];
              $reponse=$this->addarticle->login($username,$password);
              json_output($reponse['status'],$reponse);
          }

      }
    }
    public function logout()
    {
      $method=$_SERVER['REQUEST_METHOD'];
      if($method!='POST')
      {
          json_output(400,array('status'=>400,'message'=>'Bad Request.'));
      }
      else{
        $this->load->model('Mymodel');
          $chech_auth=$this->Mymodel->authentication();
          if($chech_auth)
          {
              $reponse=$this->addarticle->logout();
              json_output($reponse['status'],$reponse);
          }

      }
    }

}

?>