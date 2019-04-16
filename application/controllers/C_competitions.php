<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_competitions extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("M_competitions");
    }

    
    public function index() {
        $this->data["title"] = "La liste des compétitions";
        $this->data["competitions"] = $this->M_competitions->select_all();
        $page["contenu"] = $this->load->view('competitions/V_liste_competitions', $this->data, true);
        $this->load->view("commun/V_template.php", $page);
    }
    public function detail() {

        $param = $this->uri->segment("3");
        if (isset($param)) {
            $this->load->model("M_photo");
            $this->load->model("M_competitions");
            $this->data["title"] = "La liste des compétitions";
            $this->data["competition"] = $this->M_competitions->select_detail_by_id($param)[0];
            $this->data["photos"] = $this->M_photo->select_photos_by_id_compet($param);
            

            $page["contenu"] = $this->load->view('competitions/V_detail_competition.php', $this->data, true);
            $this->load->view("commun/V_template.php", $page);
        } else {
            $this->index();
        }
    }

   

}
