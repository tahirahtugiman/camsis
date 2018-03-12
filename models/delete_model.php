<?php
class delete_model extends CI_Model{
function __construct() {
parent::__construct();
}
    public function deletepocom($pono,$link,$id)
    {
    $location1 = 'C:/xampp/htdocs/fms/uploadpofiles/' . $link;        
	unlink($location1);
		
		
		$this->db->where('Id', $id);
		
        $this->db->where('PO_No', $pono);
		
		
        return $this->db->delete('po_compodetails');
    }
	
	 public function deletepoat($pono,$link2,$id)
    {
    $location1 = 'C:/xampp/htdocs/fms/uploadfinfiles/' . $link2;        
	unlink($location1);
		
		
		$this->db->where('Id', $id);
		
        $this->db->where('PO_No', $pono);
		
		
        return $this->db->delete('poattach_details');
    }
}
?>