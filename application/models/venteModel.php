<?php 

    class venteModel extends CI_Model 
    {
        public function __construct()
        { 
            
           parent::__construct(); 
        }
        
        function listerun ($idUtilisateurVente, $idOeuvreVente) {
  
            $this->db->where('idUtilisateurVente', $idUtilisateurVente);
            $this->db->where('idOeuvreVente', $idOeuvreVente);
            $rec=$this->db->get('vente');
            if ($rec->num_rows()>0) {
            $data = $rec->row();
            return $data;
  
            } 
        }
        
         function lister () { 
             
             $rec=$this->db->get('vente'); 
             if ($rec->num_rows()>0) { 
                 foreach ($rec->result() as $r) 
                     { $data[]=$r; 
                     
                     }
                     return $data; }
         }
    }