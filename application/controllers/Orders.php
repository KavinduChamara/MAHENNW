<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 1/12/17
 * Time: 3:20 PM
 */
class Orders extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Orders_m');
    }


    function newOrder(){


        $this->load->view('user/NewOrderForm');


    }

    function  makeNeworder(){


    }


    function  viewOrder(){
        $data['orders']= $this->Orders_m->viewall();
        $this->load->view('user/vieworders',$data);


    }

}