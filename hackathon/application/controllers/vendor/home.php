<?php
class Home extends CI_Controller {

	public function index()
	{
		
                $this->load->view('vendor/index');
        }
        
	public function login()
	{
		
                $this->load->view('vendor/login');
        }
        
	public function viewposts()
	{
		
                $this->load->view('vendor/viewmyposts');
        }
        
	public function addnewpost()
	{
		
                $this->load->view('vendor/addnewpost');
        }
        
	public function addbookings()
	{
		
                $this->load->view('vendor/addbookings');
        }
        
	public function viewbookings()
	{
		
                $this->load->view('vendor/viewbookings');
        }
        
	public function updatebookings()
	{
		
                $this->load->view('vendor/updatebookings');
        }
        
	public function viewcurrentpackages()
	{
		
                $this->load->view('vendor/viewcurrentpackages');
        }
        
	public function addnewpackages()
	{
		
                $this->load->view('vendor/addnewpackages');
        }
        
	public function updatepackages()
	{
		
                $this->load->view('vendor/updatepackage');
        }
        
        public function registration()
	{
		
                $this->load->view('vendor/registration');
        }

	
}
?>