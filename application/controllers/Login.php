<?php


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

            echo "<script>";
        	echo "alert('Account created !!')";
        	echo "</script>";
        }
	else{
		echo "<script>";
        	echo "alert('Password mismatched')";
        	echo "</script>";	
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