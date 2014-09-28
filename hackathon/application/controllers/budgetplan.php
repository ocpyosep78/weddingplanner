<?php
class Budgetplan extends CI_Controller {

	public function index($cost = 100000, $date = '2015/12/31',$district='colombo')
	{
            $venderTypeList = $this->db->query('SELECT * FROM tbl_vendor_types WHERE intEnable=1')->result_array();
            $addDataArray = array();
            for($i=0;$i<count($venderTypeList);$i++){
                $typeid = $venderTypeList[0]['id'];
                $strtypeName = $venderTypeList[0]['strName'];
                $intBudgerPresentation = $venderTypeList[0]['intBudgerPresentation'];
                $strImagePath = $venderTypeList[0]['strImagePath'];
                
                $assumeamountforthistype = $cost * $intBudgerPresentation / 100;
                
                $packagedata = $this->db->query('SELECT tbl_vender_packages.id,tbl_vender_packages.dPrice,tbl_vender_packages.strName,tbl_vendors.strContact FROM tbl_vender_packages 
INNER JOIN tbl_vendors ON tbl_vendors.id = tbl_vender_packages.int_vender_id
WHERE tbl_vendors.intTypeID='.$typeid)->result_array();
                $addDataArray[$i]['category'] = $strtypeName;
                $addDataArray[$i]['vendorname'] = $packagedata[0]['strName'];
                $addDataArray[$i]['tele'] = $packagedata[0]['strContact'];
                $addDataArray[$i]['price'] = $packagedata[0]['dPrice'];
            }
            
            echo json_encode($addDataArray);
        }

	
}
?>