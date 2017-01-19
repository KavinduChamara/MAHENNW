<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

    public function signup()
    {
        $this->load->view('signup');
    }


    public function signin()
    {
        $this->load->view('signin2');
    }

    public function loggedinuser(){

        $this->load->view('user/home');
}


    public function viewprofile(){

        $this->load->view('user/viewprof');
    }

    public function logout(){
        $this->load->model('Login_d');
        $this->Login_d->logout();
        redirect('Welcome/index');
    }

	public function creations()
    {
        $this->load->view('creations');
    }
	public function more_freelan()
    {
        $this->load->view('more_freelan');
    }
	
	public function products()
    {
        $this->load->view('products');
    }
	
	public function boxes()
    {
        $this->load->view('boxes');
    }
	
	public function handbill()
    {
        $this->load->view('handbill');
    }
	
	public function stickers()
    {
        $this->load->view('stickers');
    }
	
	public function weddingcards()
    {
        $this->load->view('weddingcards');
    }
	
	public function adddata()
    {
        $this->load->view('adddata');
    }
	
	public function deletedata()
    {
        $this->load->view('deletedata');
    }
	
	public function updatedata()
    {
        $this->load->view('updatedata');
    }
	
}
