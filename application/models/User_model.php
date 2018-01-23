<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 19/01/2018
 * Time: 11:57
 */

class User_model extends CI_Model
{
    private $table = 'user';

    public function getUserByUsername($user)
    {
        $query = $this->db->get_where($this->table, array(
            'username' => $user
        ));

        return $query->row();
    }

    public function setUserProfil($user, $data)
    {
        return $this->db->update($this->table, $data, array('username' => $user));
    }

}