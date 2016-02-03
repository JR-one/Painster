<?php 

    class consultationModel extends CI_Model 
    {
        public function __construct()
        { 
            
           parent::__construct(); 
        }
        
        function listerun ($idUtilisateurConsultation, $idOeuvreConsultation) {
  
            $this->db->where('idUtilisateurConsultation', $idUtilisateurConsultation);
            $this->db->where('idOeuvreConsultation', $idOeuvreConsultation);
            $rec=$this->db->get('consultation');
            if ($rec->num_rows()>0) {
            $data = $rec->row();
            return $data;
  
            } 
        }
        
         function lister () { 
             
             $rec=$this->db->get('consultation'); 
             if ($rec->num_rows()>0) { 
                 foreach ($rec->result() as $r) 
                     { $data[]=$r; 
                     
                     }
                     return $data; }
         }
    }