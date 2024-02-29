<?php
class Gender_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }


    public function getGender() {
        $this->db->select('*');
        $this->db->from('gender');
        $qry = $this->db->get();
        return $qry->result();
    }


}

?>