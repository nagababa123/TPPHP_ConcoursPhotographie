<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_competitions extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function select_all() {

        $query = $this->db->select("*")
                ->from("competition")
                ->get();
        $resultats = $query->result_array();
        return $resultats;
    }

    public function select_detail_by_id($id) {

        $query = $this->db->select("*")
                ->from("competition")
                ->where("ID", $id)
                ->get();
        $resultats = $query->result_array();
        return $resultats;
    }

}






