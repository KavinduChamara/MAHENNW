<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 1/12/17
 * Time: 3:26 PM
 */
class Orders_m extends CI_Model
{



    function submitorder(){




    }


    function viewall(){

        $sql = "SELECT * FROM user_details";
        $query = $this->db->query($sql);
        $res  = $query->result();
        return $res;

    }
}