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
	
<<<<<<< HEAD
	public function more_manamperi()
    {
        $this->load->view('more_manamperi');
    }
	
	public function more_apex()
    {
        $this->load->view('more_apex');
    }
	
	public function more_bakeshop()
    {
        $this->load->view('more_bakeshop');
    }
	
	public function more_harischandra()
    {
        $this->load->view('more_harischandra');
    }
	
	public function more_kotuwe_kade()
    {
        $this->load->view('more_kotuwe_kade');
    }
	
	public function more_nippolac()
    {
        $this->load->view('more_nippolac');
    }
	
	public function more_ruhunu_royal()
    {
        $this->load->view('more_ruhunu_royal');
    }
	
	public function more_skylite()
    {
        $this->load->view('more_skylite');
    }
	
	public function more_eueni()
    {
        $this->load->view('more_eueni');
    }
	
	public function more_nileka()
    {
        $this->load->view('more_nileka');
    }
	
	public function more_indra()
    {
        $this->load->view('more_indra');
    }
=======
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
	
>>>>>>> 42a10f1ed68e3d7999efd226f21733686fa3e279
}
