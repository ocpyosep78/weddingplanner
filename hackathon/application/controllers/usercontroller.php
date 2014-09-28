<?php

class usercontroller extends CI_Controller
{
    
    public function save($key_val = 'new'){
                        
		$this->load->model('Usermodel');
		if ($this->input->post('id') !== false){
			$record = $this->usermodel->get_record($this->input->post('id'));
                }
                
			if ($this->input->post('id') == false){
				$result = $this->Usermodel->insert_entry();
                                $formsubmit = 'insert';
			}
			else {
				$result = $this->Usermodel->update_entry();
                        } 
               //redirect('vendor/packagecontroller/index');
                 
	}
    
}
?>
