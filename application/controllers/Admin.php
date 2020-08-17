<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
		if($this->form_validation->run())
		{
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->isvalidate($uname,$pass);
			if($login_id)
			{
				
				$this->session->set_userdata('id',$login_id);
				return redirect('Admin/welcome');
			}
			else
			{
				$this->session->set_flashdata('Login Failed','Invalid username/password');
				return redirect('Admin/index');
			}
		}
		else
		{
		$this->load->view('Admin/login');
		}
		
	}

	public function addarticle()
	{
		$this->load->view('Admin/add_article');
	}
	public function insert()
	{
		$post=$this->input->post();
		$this->load->model('addarticle','at');
		$test=$this->at->add($post);
		if($test)
		{
			return redirect('Admin/welcome');
		}
	}
	public function del()
	{
		$id=$this->input->post('id');
			$this->load->model('addarticle');
			if($this->addarticle->del($id))
			{
				
				$this->session->set_flashdata('msg','Delete Successfully');
				return redirect('Admin/welcome');
			}
			else
			{
				echo "not deleted";
			}
	}
	public function welcome()
	{
		
		$this->load->model('loginmodel','lg');
	    $articles=$this->lg->articlelist();
		$this->load->view('Admin/dashboard',['articles'=>$articles]);
	}
	public function register()
	{
		$this->load->view('Admin/signup');
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('Admin/index');

	}
}
