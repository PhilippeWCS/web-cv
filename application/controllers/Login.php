<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 18/01/2018
 * Time: 14:02
 */

class Login extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'login'
        );

        if ($this->form_validation->run() == FALSE)
        {
            $this->parser->parse('login', $data);
        } else {
            $this->parser->parse('template');
        }
    }

}