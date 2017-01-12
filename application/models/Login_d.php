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
            'Email' => $this->input->post('E-mail'),
            'Address' => $this->input->post('Address'),
            'Telephone' => $this->input->post('Telephone'),
            'Password' => $this->input->post('Password'),
            

        );
        #$res = $this->db->insert('user_details', $user_data);
        if ($res) {
            return true;
        }
    }

    }
