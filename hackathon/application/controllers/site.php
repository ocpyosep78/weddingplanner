<?php
/*
  |--------------------------------------------------------------------------
 * The controller is bing used for manage websites
  |--------------------------------------------------------------------------  
 */
class userlogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("userlogin_model");
		$this->load->library('encrypt');
    }

    function get_sites() {
        $result = $this->Site_model->get_user_sites($this->session->userdata('user_id'));
        $this->output->set_content_type('application/json');
        echo json_encode($result);
    }	


}

?>
