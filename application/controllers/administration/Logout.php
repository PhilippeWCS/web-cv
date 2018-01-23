<?php
/**
 * Created by PhpStorm.
 * User: philippe
 * Date: 22/01/18
 * Time: 15:54
 */

class Logout extends CI_Controller
{
    public function index()
    {
        session_destroy();
        redirect(base_url());
    }

}