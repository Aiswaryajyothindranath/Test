<?php
class Country_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function register($username, $email, $password) {
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        );

        return $this->db->insert('users', $data);
    }

    public function getCountries() {
        $this->db->select('*');
        $this->db->from('tbl_countries');
        $qry = $this->db->get();
        return $qry->result();
    }

  


}

?>