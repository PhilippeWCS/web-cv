<?php
/**
 * Created by PhpStorm.
 * User: pdebridiers
 * Date: 18/01/2018
 * Time: 16:22
 */

    $config = array(
        'error_prefix' => '<p class="text-danger">',
        'error_suffix' => '</p>',
        'login/index'  => array(
            array(
                'field' => 'username',
                'label' => 'Nom utilisateur',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'Mot de passe',
                'rules' => 'required'
            )
        ),
        'profil/index' => array(
            array(
                'field' => 'first_name',
                'label' => 'Prénom',
                'rules' => 'required'
            ),
            array(
                'field' => 'last_name',
                'label' => 'Nom',
                'rules' => 'required'
            ),
            array(
                'field' => 'birth_date',
                'label' => 'Adresse',
                'rules' => 'required'
            ),
            array(
                'field' => 'phone',
                'label' => 'Téléphone',
                'rules' => 'required|min_length[10]|max_length[14]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'url_github',
                'label' => 'GitHub',
                'rules' => 'required|valid_url'
            ),
            array(
                'field' => 'url_linkedin',
                'label' => 'Linkedin',
                'rules' => 'required|valid_url'
            ),
            array(
                'field' => 'adress',
                'label' => 'Adresse',
                'rules' => 'required'
            ),
            array(
                'field' => 'zip',
                'label' => 'Code postal',
                'rules' => 'required|exact_length[5]|numeric'
            ),
            array(
                'field' => 'city',
                'label' => 'Ville',
                'rules' => 'required'
            ),
        )
    );