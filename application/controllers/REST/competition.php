<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class competition extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_competitions');
    }

    public function index_get($id = '') {
        if ($id === '') { // on renvoie la liste des conteneurs 
            $results = $this->M_competitions->select_all();
            $this->response($results, REST_Controller::HTTP_OK);
        } else { // on renvoie le détail du conteneur 
            $results = $this->M_competitions->select_detail_by_id($id);
            $this->response($results, REST_Controller::HTTP_OK);
        }
    }

}
