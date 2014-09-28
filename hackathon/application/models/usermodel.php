<?php
class Usermodel extends CI_Model {
function insert_entry(){
    
        $this->db->insert('tbl_vendors', $_POST);
	$this->session->set_userdata('success', 'New vendor has been Added');
	return true;
    }
}
?>
