<?php 
class post_model extends CI_Model {

  
    function getAll()
    {       
        
        $datos = $this->db->get('post');
        return $datos->result();      
    }


public function insertarPost($db_posts){
      
            
     $this->db->query("INSERT INTO post (idPost, nombrePost, fecha, comentario) 
                               VALUES (".$db_posts['idPost'].", 
                               		   ".$db_post['nombrePost'].", 
                                       ".$db_posts['fecha'].",
                                       ".$db_posts['comentario'].")");   


            return "Insertado";
 
    }


   public function eliminar_post($id_posts){
    
       try {

              $this->db->query ("DELETE FROM comentario WHERE idPost = ".$id_posts.";");
              $this->db->query ("DELETE FROM post WHERE idPost = ".$id_posts.";");  
         
       } catch (Exception $e) {

         echo 'Excepción capturada: ',  $e->getMessage(), "\n";

       }
    }
}

?>