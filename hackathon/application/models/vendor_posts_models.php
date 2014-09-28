<?php

class vendor_posts_model extends CI_Model {

    function get_record($key){
        $query = $this->db->get_where('applications', array('acc_key_id' => $key))->result_array();
	if (count($query) == 0)
		return false;//(array)$this;
        $query = $query[0];
	foreach ($query as $key => $val)
		$this->$key = $val;
        return $query;
    }

    function delete_record($id){
	$this->db->delete('tbl_vender_profile_posts', array('id' => $id));
	$this->session->set_userdata('success', 'Application Deleted');
    }

    function record_count($fields = array()){
        //$this->db->where($filter);
        if ($this->input->post('q') !== false)
		foreach ($this->searchable as $col)
			$this->db->or_like($col, $this->input->post('q'));
	$this->db->from('applications');
        return $this->db->count_all_results();
    }

    function get_page($per_page = 10, $page = 1, $sort = 'acc_key_id', $order = 'ASC'){
        if ($this->input->post('q') !== false)
		foreach ($this->searchable as $col)
			$this->db->or_like($col, $this->input->post('q'));
        $this->db->order_by($sort, $order);
        $query = $this->db->get_where('applications', array(), $per_page, (($page - 1) * $per_page));
        return $query;
    }

    function insert_entry(){
	
	
	//$this->session->set_userdata('error', 'Application name is duplicate');
	//return false;
	
	/*$properties = (array)$this;
	foreach ($properties as $key => $val)
		if ($this->input->post($key) !== false)
			$this->$key = $this->input->post($key);
        */
        
        $this->db->insert('tbl_vender_profile_posts', $this);
	$this->session->set_userdata('success', 'New Post Added');
	return true;
    }

    function update_entry(){
	
	/*$properties = (array)$this;
	foreach ($properties as $key => $val)
		if ($this->input->post($key) !== false)
			$this->$key = $this->input->post($key);
	*/
        $this->db->update('tbl_vender_profile_posts', $this, array('id' => $this->input->post('post_id')));
	$this->session->set_userdata('success', 'Post Data Updated');
	return true;
    }

}

?>