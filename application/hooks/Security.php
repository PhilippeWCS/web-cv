<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 19/01/2018
 * Time: 13:46
 */

class Security
{
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->helper('url');
    }

    public function checkUserLogIn()
    {

        if ($this->CI->uri->segment(1) === 'administration' && $this->CI->uri->segment(2) !== 'login' && $this->CI->session->userdata('logged_in') === null){
            redirect('administration/login');
        }
    }

}