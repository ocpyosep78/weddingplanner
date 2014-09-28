<?php
class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('vendor/login');
        }
        
        public function signin()
	{
                $username = $this->input->post('username');
                $strPassword = $this->input->post('password');
                $query = $this->db->query("SELECT * FROM tbl_vendors WHERE strUserName='".$username."'")->result_array();
                if (count($query) == 0){
                    $this->session->set_userdata('error', 'Wrong User Name');
                    redirect('vendor/login');  
                }
                else if ($strPassword != $query[0]['strPassword']){
                    $this->session->set_userdata('error', 'Wrong Password');
                    redirect('vendor/login');  
                }
                else if ($strPassword == $query[0]['strPassword']){
                    $this->session->set_userdata('Success', 'Successfully logged in');
                    $this->session->set_userdata('user', array('id' => $query[0]['id'], 'strUserName' => $query[0]['strUserName']));
                    redirect('vendor/home');  
                }
        }
        
        public function register()
	{
                $query = $this->db->query('SELECT * FROM tbl_vendor_types WHERE intEnable=1')->result_array();
                $this->load->view('vendor/registration', array('data' => $query));
        }
        
        public function logout()
	{
                $this->session->unset_userdata('user');
                redirect('vendor/login');  
        }
        
        public function new_reg()
	{
            $data_arry = $_POST;
            $username = $this->input->post('strUserName');
            $strPassword = $this->input->post('strPassword');
            $repeat_password = $this->input->post('repeat_password');
            $query = $this->db->query("SELECT * FROM tbl_vendors WHERE strUserName='".$username."'")->result_array();
            if (count($query) > 0){
                $this->session->set_userdata('error', 'User Name Already Exist');
                
            }
            else if($strPassword != $repeat_password){
                $this->session->set_userdata('error', 'Passwords miss match');
                              
            }
            else{
                unset($data_arry['repeat_password']);
                unset($data_arry['submit']);                
                date_default_timezone_set('UTC');
                $data_arry['dDateCreated']= date("Y-m-d H:i:s");
                $this->db->insert('tbl_vendors', $data_arry);
                $this->session->set_userdata('success', 'You are registered successfully');
                
            }
            redirect('vendor/login/register');            
        }

	
}
?>