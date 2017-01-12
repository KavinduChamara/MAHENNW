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
        $this->load->model('Login_d');
    }


    function signup(){


        $res = $this->Login_d->makesigup();

        if ($res){

            echo "Successfully Sign up";
        }
    }

    function signin(){

        $ret = $this->Login_d->makesignin();
        if ($ret){
        $dashboard = 'Welcome/loggedinuser';
        if ($this->Login_d->loggedin() == true) {
            redirect($dashboard);
        }
            redirect($dashboard) ;
    }
    }

}