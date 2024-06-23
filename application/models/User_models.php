<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', ['email' => $email]);
        return $query->row_array();
    }
}
