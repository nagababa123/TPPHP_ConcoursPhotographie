<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_photo extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function select_photos_by_id_compet($id) {

        $query = $this->db->select("photo.ID, photo.competitionID, photo.concurrentID, photo.Titre, photo.NomFichier, photo.OrdreProjection, photo.Total, photo.Classement, concurrent.Nom, concurrent.Prenom, concurrent.Pays")
                ->from("photo,concurrent")
                ->where("photo.concurrentID = concurrent.ID")
                ->where("photo.competitionID", $id)
                ->order_by("photo.Classement")
                ->get();
        $resultats = $query->result_array();
        return $resultats;
    }

    public function select_detail_by_id($id) {

        $query = $this->db->select("photo.ID, photo.competitionID, photo.concurrentID, photo.Titre, photo.NomFichier, photo.OrdreProjection, photo.Total, photo.Classement, concurrent.Nom, concurrent.Prenom, concurrent.Pays, competition.Nom as cNom")
                ->from("competition,photo,concurrent")
                ->where("competition.ID = photo.competitionID")
                ->where("photo.concurrentID = concurrent.ID")
                ->where("photo.ID", $id)
                ->order_by("photo.Classement")
                ->get();
        $resultats = $query->result_array();
        return $resultats;
    }

}
