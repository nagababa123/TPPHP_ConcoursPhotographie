<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_photo extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("M_photo");
    }

    
    public function index() {
        $this->data["title"] = "Accueil";
        $page["contenu"] = $this->load->view('accueil.php', $this->data, true);
        $this->load->view("commun/template.php", $page);
    }

    public function detail() {
        $param = $this->uri->segment("3");
        if (isset($param)) {
                       
            $this->data["photo"] = $this->M_photo->select_detail_by_id($param)[0];
            $page["contenu"] = $this->load->view('photos/V_detail_photo', $this->data, true);
            $this->load->view("commun/V_template.php", $page);
        } else {
            $this->index();
        }
    }

}
