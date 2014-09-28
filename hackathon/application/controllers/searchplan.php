<?php
/*
  |--------------------------------------------------------------------------
 * The controller is bing used for manage websites
  |--------------------------------------------------------------------------  
 */
class searchplan extends CI_Controller {

   public function index(){
        
         $vender_type_list = $this->db->query('SELECT * FROM tbl_vendor_types WHERE intEnable=1')->result_array();
         $vender_packages = $this->db->query('SELECT tbl_vender_packages.*,tbl_vendors.id,tbl_vendors.strUserName,tbl_vendors.intTypeID FROM tbl_vender_packages
INNER JOIN tbl_vendors ON tbl_vendors.id = tbl_vender_packages.int_vender_id WHERE tbl_vender_packages.intEnable=1')->result_array();
        
        
        $this->load->view('searchplan_view',array('vender_type_list' => $vender_type_list,'vender_packages' => $vender_packages));
    }


}

?>
