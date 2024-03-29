<?php
class State_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }



    function getStates($country_id)
     {
      $this->db->where('country_id', $country_id);
      $this->db->order_by('state_name', 'ASC');
      $query = $this->db->get('state');
      $output = '<option value="">Select State</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
      }
      return $output;
     }


}

?>