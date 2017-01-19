<?php


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