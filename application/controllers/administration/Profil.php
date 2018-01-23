<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 19/01/2018
 * Time: 13:54
 */

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->model('User_model');

        $profil = $this->User_model->getUserByUsername($this->session->userdata('username'));

        $data = array(
            'title'  => 'Profil',
            'profil' => $profil
        );

        if ($this->form_validation->run() == FALSE) {
            $page         = $this->load->view('administration/profil', $data, true);
            $data['page'] = $page;
        } else {
            $this->User_model->setUserProfil($this->session->userdata('username'), $this->input->post());

            $this->session->set_flashdata('info', "Votre profil a bien été modifié.");

            redirect('administration/profil');
        }

        $this->load->view('template', $data);
    }

}