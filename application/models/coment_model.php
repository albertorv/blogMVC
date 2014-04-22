<?php
class coment_model extends CI_Model {

  
    function getAll()
    {       
        
        $datos = $this->db->get('comentario');
        return $datos->result();      
    }


 public function insertarComentario($db_comentario){
    
            
     $this->db->query("INSERT INTO comentario (id, idPost, autor, comentario, fecha,estado) 
                               VALUES (".$db_comentario['id'].", ' ', 
                                      '".$db_comentario['idPost']."','".$db_comentario['autor']."',
                                      '".$db_comentario['comentario']."','
					".$db_comentario['estado']."')");   
 
    }

 public function actualizarComent($id){
    
       try {

              $this->db->query ("UPDATE comentario SET estado = 's'  WHERE id = ".$id.";"); 
         
      } catch (Exception $e) {

           echo 'Excepción capturada: ',  $e->getMessage(), "\n";

         }
                  
    }
}

?>