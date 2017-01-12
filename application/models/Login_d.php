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
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),
            'FirstName' => $this->input->post('FirstName'),

        );
        #$res = $this->db->insert('user_details', $user_data);
        if ($res) {
            return true;
        }
    }

    }
