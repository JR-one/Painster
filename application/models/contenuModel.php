<?php 

    class contenuModel extends CI_Model 
    {
        public function __construct()
        { 
            
           parent::__construct(); 
        }
        
        function listerun ($idOeuvreContenu, $idTagContenu) {
  
            $this->db->where('idOeuvreContenu', $idOeuvreContenu);
            $this->db->where('idTagContenu', $idTagContenu);
            $rec=$this->db->get('contenu');
            if ($rec->num_rows()>0) {
            $data = $rec->row();
            return $data;
  
            } 
        }
        
         function lister () { 
             
             $rec=$this->db->get('contenu'); 
             if ($rec->num_rows()>0) { 
                 foreach ($rec->result() as $r) 
                     { $data[]=$r; 
                     
                     }
                     return $data; }
         }
    }