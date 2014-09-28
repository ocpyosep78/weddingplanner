<?php
class test extends CI_Controller {

	public function index()
	{
		echo 'Hello World!.<br>';
                $result = $this->db->get('tbl_comments')->result_array();
                print_r($result);
        }

	public function comments()
	{
		echo 'Look at this!';
	}
}
?>