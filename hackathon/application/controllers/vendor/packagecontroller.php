<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Packagecontroller extends CI_Controller{

    
        public function index(){
            
		$this->load->model('Package_model');	
                $data = $this->Package_model->view_records();                
		$this->load->view('vendor/viewcurrentpackages', array('data' => $data));
	}
    
	public function save($key_val = 'new'){
                        
		$this->load->model('Package_model');
		if ($this->input->post('id') !== false){
			$record = $this->Package_model->get_record($this->input->post('id'));
                }
                
			if ($this->input->post('id') == false){
				$result = $this->Package_model->insert_entry();
                                $formsubmit = 'insert';
			}
			else {
				$result = $this->Package_model->update_entry();
                        } 
               redirect('vendor/packagecontroller/index');
                 
	}

	//
	//	Prepare to add a Record
	//
	public function add_new(){
		$this->load->model('Package_model');
		$this->load->view('vendor/addnewpackages');
	}
        
        public function edit($id = NULL){
            if($id == NULL){
                $this->session->set_userdata('error', 'Could not found the package');
                redirect('vendor/packagecontroller/index/');
            }
            $this->load->model('Package_model');
            $record = $this->Package_model->get_record($id);
            if($record){
		$this->load->view('vendor/editpackages',array('data' => $record));
            }
            else {
                $this->session->set_userdata('error', 'Could not found the package');
                redirect('vendor/packagecontroller/index/');
            }
	}
        
        public function delete($id = NULL){
            if($id == NULL){
                $this->session->set_userdata('error', 'Could not found the package');
                redirect('vendor/packagecontroller/index/');
            }
            $this->load->model('Package_model');
            $record = $this->Package_model->delete_entry($id);
            //print_r($record);
            redirect('vendor/packagecontroller/index/');
            
	}

}