<?php
/*
  |--------------------------------------------------------------------------
 * The Model is bing used to implement database transactions related to 
 * web site.
  |--------------------------------------------------------------------------  
 */
class userlogin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function authencateUser($userName,$userEmail,$userPassword,$userOrigin) {
        $result = NULL;
        $sql = "SELECT ID,strUserName,strEmailAddress FROM tbl_customer";
        $sql.=" WHERE strEmailAddress= '$userEmail'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach($result as $row) {
                $this->session->set_userdata('userID', ''.$row->ID.'');
                $this->session->set_userdata('userName', ''.$row->strUserName.'');
                $this->session->set_userdata('userEmail', ''.$row->strEmailAddress.'');
            }

            $result = 1;
            return $result;
        }else if($userOrigin == "fb"){
            $data_arr["strUserName"] = $userName;
            $data_arr["strEmailAddress"] = $userEmail;
            $data_arr["strPassword"] = $userPassword;
            $data_arr["intEnable"] = 1;
            $this->db->insert('tbl_customer', $data_arr);
            $lstID = $this->db->insert_id();

            $this->session->set_userdata('userID', ''.$lstID.'');
            $this->session->set_userdata('userName', ''.$strUserName.'');
            $this->session->set_userdata('userEmail', ''.$strEmailAddress.'');
            $result = 1;

            return $result;
        }else{
            $result = 0;

            return $result;
        }
    }

    
}

?>
