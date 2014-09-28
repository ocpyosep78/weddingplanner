<?php

class Post_model extends CI_Model {

    function get_record($key){
        $query = $this->db->get_where('tbl_vender_profile_posts', array('id' => $key))->result_array();
	if (count($query) == 0)
		return false;//(array)$this;        
        return $query;
    }
    
    function view_records(){
        
        $var = $this->session->userdata['user'];
        $userid = $var['id'];
        $query = $this->db->query('SELECT * FROM tbl_vender_profile_posts WHERE intVenderID='.$userid.' AND intEnable=1')->result_array();	
        return $query;
    }

    
    function insert_entry(){
	
	/*$config['upload_path'] = 'http://localhost:82/hackathon/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        echo $this->input->post('image1');
        $this->load->library('upload', $config); 
        $res = $this->upload->do_upload($this->input->post('image1'));
        echo $res;
        exit();*/
        $var = $this->session->userdata['user'];
        $data_arry = $_POST;
        $data_arry['dAddedDate']= date("Y-m-d H:i:s");
        $data_arry['intVenderID']= $var['id'];
        
         if (!is_dir('./resources/images/user_uploads/'))
			mkdir('./resources/images/user_uploads/', 0777, true);
	$this->load->library('upload', array('upload_path' => './resources/images/user_uploads/', 'allowed_types' => 'gif|jpg|png'));        
                                
		if ($_FILES['image1']['tmp_name'] != ''){                    
			if ($this->upload->do_upload('image1')){
                            $data_arry['image1']= $_FILES['image1']['name'];
                            $this->session->set_userdata('error', $this->upload->display_errors());
                        }
                }
                if ($_FILES['image2']['tmp_name'] != ''){                    
			if ($this->upload->do_upload('image2')){  
                            $data_arry['image2']= $_FILES['image2']['name'];
                            $this->session->set_userdata('error', $this->upload->display_errors());
                        }
                }
                if ($_FILES['image3']['tmp_name'] != ''){                    
			if ($this->upload->do_upload('image3')){
                            $data_arry['image3']= $_FILES['image3']['name'];
                            $this->session->set_userdata('error', $this->upload->display_errors());
                        }
                }
                if ($_FILES['image4']['tmp_name'] != ''){                    
			if ($this->upload->do_upload('image4')){  
                            $data_arry['image4']= $_FILES['image4']['name'];
                            $this->session->set_userdata('error', $this->upload->display_errors());
                        }
                }
        
        $this->db->insert('tbl_vender_profile_posts', $data_arry);
	$this->session->set_userdata('success', 'New Post Added');
	return true;
    }

    function update_entry(){
	
        $var = $this->session->userdata['user'];
        $data_arry = $_POST;
        $data_arry['dAddedDate']= date("Y-m-d H:i:s");
        $data_arry['intVenderID']= $var['id'];
        $this->db->update('tbl_vender_profile_posts', $data_arry, array('id' => $this->input->post('id')));
	$this->session->set_userdata('success', 'Post Data Updated');
	return true;
    }
    
    function delete_entry($id){
	
        $this->db->update('tbl_vender_profile_posts', array('intEnable' => 0), array('id' => $id));
	$this->session->set_userdata('success', 'Post Deleted Successfully');
	return true;
    }
    
    

}

?>