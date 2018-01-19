<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 19/01/2018
 * Time: 13:54
 */

class Administration extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Accueil'
        );

        $page = $this->parser->parse('administration/accueil', $data, true);

        $this->parser->parse('template', $page);
    }

}