<?php

class member_model extends CI_Model {   

    function __construct() {
        parent::__construct();
         $this->load->database();        
    }
    public function save_member($data){    
    
		if($this->db->insert('members', $data)) {
			 return $this->db->insert_id();
		}
		return false;
	}
	public function get_user_data($id) {
        
        $this->db->select('members.*');
        $this->db->where('members.id',$id);
        return $this->db->get('members')->row();
    }
     public function update_user($data, $id) {
        
		$this->db->where('id',$id);
        if($this->db->update('members',$data)) {
	   		return true;
	    }
        return false; 
    }
    public function checkUser($email) {
		
		$this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('members');
		
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
	}
	
	public function get_membership() {
		
		$this->db->select('*');
        return $this->db->get('membership_plans')->result();
	}
	public function get_interest_data() {
		$this->db->select('il.id, il.category, il.level_image');
		$this->db->where('status', '1');
        return $this->db->get('interest_level il')->result();
	}
	public function save_member_interest($data) {
		if($this->db->insert('member_interests', $data)) {
			 return $this->db->insert_id();
		}
		return false;
	}
}

?>