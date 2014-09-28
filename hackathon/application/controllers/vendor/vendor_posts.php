<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends Auth_Controller{

	
	public function index($per_page = 10, $page = 1, $sort = 'acc_key_id', $order = 'ASC'){
		
		
		$this->load->model('vendor_posts_model');
                
		$this->load->view('vendor/table', '', array('data' => 'test'));
                $this->load->view('template/admin/footer');
	}

	public function delete($id){
		$this->load->model('vendor_posts_model');
		$this->Applications_model->delete_record($id);
		redirect('admin/applications');
	}

	//
	//	Insert or Update a Record
	//
	public function edit($key_val = 'new'){
		$this->load->model('admin/Applications_model');
		// ---------
		$this->load->model('admin/Service_provider_model');
		$this->schema['form_fields']['sp_id']['enum'] = $this->Service_provider_model->get_array();
		// -----------------
		$formsubmit = 'update';
		if ($this->input->post('formsubmit') !== false){
			$record = $this->Applications_model->get_record($this->input->post('sp_id'));
			if ($this->input->post('formsubmit') == 'insert'){
				$result = $this->Applications_model->insert_entry();
				$formsubmit = 'insert';
			}
			else if ($this->input->post('formsubmit') == 'update')
				$result = $this->Applications_model->update_entry();
			//
			if ($result)
				redirect('admin/applications');
			else{
				if ($this->input->post('formsubmit') == 'insert'){
					$this->schema['form_fields']['sp_id'][0] = 'Select Service Provider';
					unset($this->schema['form_fields']['account_sid']);
					unset($this->schema['form_fields']['auth_token']);
					unset($this->schema['form_fields']['regenerate']);
				}
				$record = array();
				foreach ($this->schema['form_fields'] as $col => $meta)
					if (!isset($meta['form']) || $meta['form'] == true)
						$record[$col] = $this->input->post($col);
			}
		}
		else
			$record = $this->Applications_model->get_record($key_val);
		if ($record === false){
			$this->session->set_userdata('error', 'Record Not Found');
			redirect('admin/applications');
		}
		// -----------------
                $this->load->view('template/admin/header');
		$this->load->view('admin/form', 'admin', array(
									'data' => $record,
									'table' => 'applications',
									'title' => $this->schema['name'],
									'formsubmit' => $formsubmit,
									'schema' => $this->schema['form_fields']));
                $this->load->view('template/admin/footer');
	}

	//
	//	Prepare to add a Record
	//
	public function add(){
		$this->load->model('admin/Service_provider_model');
		$this->schema['form_fields']['sp_id']['enum'] = $this->Service_provider_model->get_array();
		$this->schema['form_fields']['sp_id'][0] = 'Select Service Provider';
		unset($this->schema['form_fields']['account_sid']);
		unset($this->schema['form_fields']['auth_token']);
		unset($this->schema['form_fields']['regenerate']);
		// ---------
		$query = array();
		foreach ($this->schema['form_fields'] as $id => $meta)
			$query[$id] = '';
		// -----------------
                $this->load->view('template/admin/header');
		$this->load->view('admin/form', 'admin', array(
									'data' => $query,
									'table' => 'applications',
									'title' => $this->schema['name'],
									'formsubmit' => 'insert',
									'schema' => $this->schema['form_fields']));
                $this->load->view('template/admin/footer');
	}

}