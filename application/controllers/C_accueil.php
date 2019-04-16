<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_accueil extends CI_Controller {

    private $data = [];

    public function __construct() {
        parent::__construct(); //Appel du constructeur CI_Controller
        $this->load->helper("url"); //pour les url de la vue
        // Charge les donnnées du template pour afficher la liste des thèmes
        //$this->load->model('');
        //$this->data['adtheme'] = $this->M_theme->select_all();
    }

    public function index() {
        $this->data['page_title'] = "Concours photographique des BTS snir";
        $page = $this->load->view('V_accueil', $this->data, true);
        $this->load->view('commun/V_template', array('contenu' => $page));
    }

}
