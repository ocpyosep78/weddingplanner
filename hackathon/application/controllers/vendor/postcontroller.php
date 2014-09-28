<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Postcontroller extends CI_Controller{

    
        public function index(){
            
		$this->load->model('Post_model');	
                $data = $this->Post_model->view_records();                
		$this->load->view('vendor/viewposts', array('data' => $data));
	}
    
	public function save($key_val = 'new'){
                        
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

	//
	//	Prepare to add a Record
	//
	public function add_new(){
		$this->load->model('Post_model');
		$this->load->view('vendor/addnewposts');
	}
        
        public function edit($id = NULL){
            if($id == NULL){
                $this->session->set_userdata('error', 'Could not found the post');
                redirect('vendor/postcontroller/index/');
            }
            $this->load->model('Post_model');
            $record = $this->Post_model->get_record($id);
            if($record){
		$this->load->view('vendor/editposts',array('data' => $record));
            }
            else {
                $this->session->set_userdata('error', 'Could not found the post');
                redirect('vendor/postcontroller/index/');
            }
	}
        
        public function delete($id = NULL){
            if($id == NULL){
                $this->session->set_userdata('error', 'Could not found the post');
                redirect('vendor/postcontroller/index/');
            }
            $this->load->model('Post_model');
            $record = $this->Post_model->delete_entry($id);
            //print_r($record);
            redirect('vendor/postcontroller/index/');
            
	}

}