<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 19/01/2018
 * Time: 11:57
 */

class User_model extends CI_Model
{
    public function getUser($username)
    {
        $query = $this->db->get_where('user', array(
            'username' => $username
        ));

        return $query->row();
    }

}