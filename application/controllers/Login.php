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
        $this->load->model('User_model');
        $data = array(
            'title' => 'login'
        );

        if ($this->form_validation->run() == FALSE) {
            $this->parser->parse('login', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->User_model->getUser($username);

            if (!empty($user) && password_verify($password, $user->password)){
                $userdata = array(
                    'username' => $user->username,
                    'logged_in' => true
                );

                $this->session->set_userdata($userdata);

                $this->parser->parse('template', $data);
            } else {
                $this->session->set_flashdata('errorLogin', "Vos informations d'identification sont incorrectes");
                $this->parser->parse('login', $data);
            }
        }
    }

}