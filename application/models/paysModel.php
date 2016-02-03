<?php 

    class paysModel extends CI_Model 
    {
        public function __construct()
        { 
            
           parent::__construct(); 
        }
        
        function listerun ($idPays) {
  
            $this->db->where('idPays', $idPays);
            $rec=$this->db->get('pays');
            if ($rec->num_rows()>0) {
            $data = $rec->row();
            return $data;
  
            } 
        }
        
         function lister () { 
             
             $rec=$this->db->get('pays'); 
             if ($rec->num_rows()>0) { 
                 foreach ($rec->result() as $r) 
                     { $data[]=$r; 
                     
                     }
                     return $data; }
         }
    }