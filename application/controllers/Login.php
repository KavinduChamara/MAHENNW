<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 1/12/17
 * Time: 12:56 PM
 */
class Login extends CI_Controller{


    /**
     * Login constructor.
     */
    public function __construct(){
        parent::__construct();
    }


    function signup(){

        $this->load->model('Login_d');
        $this->Login_d->makesigup();
    }
}