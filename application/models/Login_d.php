<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 1/12/17
 * Time: 12:58 PM
 */
class Login_d extends CI_Model{


    /**
     * Login_d constructor.
     */
    public function __construct(){
        parent::__construct();
    }


    function makesigup(){


        $user_data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'UID' => $this->input->post('UID'),
            'Email' => $this->input->post('Email'),
            'Address' => $this->input->post('Address'),
            'Telephone' => $this->input->post('Telephone'),
            'Password' => $this->input->post('Password'),
            

        );
	if(($this->input->post('Password'))==($this->input->post('ConfirmPassword'))){
        $res = $this->db->insert('user_details', $user_data);
        if ($res) {
            return true;
        }
	
    }
}

    function makesignin(){

        $inputuid = $this->input->post('inputuid');
        $inputpwd = $this->input->post('inputpwrd');


        $sql = "SELECT * FROM user_details WHERE UID=$inputuid AND password ='$inputpwd'";
        $query = $this->db->query($sql);
        $res  = $query->result();
        $rows  = $query->num_rows();

        foreach ($res as $result){
            $fname = $result->FirstName;
            $lname = $result->LastName;
            $email = $result->Email;
            $add = $result->Address;
            $tel = $result->Telephone;

        }

        if ($rows == 1) {
            $this->session->set_userdata(
                array(
                    'userfname'  => $fname,
                    'userlname'  => $lname,
                    'email'  => $email,
                    'add'  => $add,
                    'tel'  => $tel,
                    'uid'  => $inputuid,
                    'loggedin'  => TRUE,
                ));
            return  true;
        }

    }



    function logout(){
        $this->session->sess_destroy();
    }
    function loggedin(){
        return (bool)$this->session->userdata('loggedin');
    }


    }
