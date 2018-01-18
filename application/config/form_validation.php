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
        'login/index' => array(
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
        )
    );