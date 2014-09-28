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

    function getUserCredentials() {
        $params = $this->input->get("results");
        $decodeResults = json_decode($params, true);
        $userName = $decodeResults["username"];
        $userEmail = $decodeResults["email"];
        $userPassword =  $decodeResults["pwd"];
        $userOrigin = $decodeResults["origin"];
        $result = $this->userlogin_model->authencateUser($userName,$userEmail,$userPassword,$userOrigin);
        $this->output->set_content_type('application/json');
        echo json_encode($result);
    }	


}

?>
