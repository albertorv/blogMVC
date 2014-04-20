<?php 


class Entries extends CI_Model {

    /**
     * Get subdomain name for a especified account
     * @param account_id
     * @return subdomain name found
     */ 
    function getAll()
    {       
        
        $query = $this->db->get('entries');
        return $query->result_array();
           
    }

}


?>