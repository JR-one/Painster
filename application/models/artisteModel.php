<?php 

    class artisteModel extends CI_Model 
    {
        public function __construct()
        { 
            
           parent::__construct(); 
        }
        
        function listerun ($idArtiste) {
  
            $this->db->where('idArtiste', $idArtiste);
            $rec=$this->db->get('artiste');
            if ($rec->num_rows()>0) {
            $data = $rec->row();
            return $data;
  
            } 
        }
        
         function lister () { 
             
             $rec=$this->db->get('artiste'); 
             if ($rec->num_rows()>0) { 
                 foreach ($rec->result() as $r) 
                     { $data[]=$r; 
                     
                     }
                     return $data; }
         }
    }