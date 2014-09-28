<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bookingcontroller extends CI_Controller{

    
        public function index(){            
            
            $var = $this->session->userdata['user'];
            $user_id = $var['id'];
            $query = $this->db->query('SELECT * FROM tbl_vender_bookings WHERE intVenderId='.$user_id)->result_array();	
             
            $this->load->view('vendor/bookings', array('data' => $query));
	}
    
	public function save(){
                        
		$this->load->model('Post_model');
		if ($this->input->post('id') !== false){
			$record = $this->Post_model->get_record($this->input->post('id'));
                }
                
			if ($this->input->post('id') == false){
				$result = $this->Post_model->insert_entry();
                                $formsubmit = 'insert';
			}
			else {
				$result = $this->Post_model->update_entry();
                        } 
               redirect('vendor/postcontroller/index');
                 
	}

	

}