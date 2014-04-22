<?php 


class Blog_model extends CI_Model {

  
    function getAll()
    {       
        
        $datos = $this->db->get('administrador');
        return $datos->result();      
    }

    public function Login($username, $password)
   {
    $this->load->view('Login');
        // Esta función recibe como parámetros el nombre de usuario y password  
      $this -> db -> select('user, password'); //Indicamos los campos que usaremos del resultado de la consulta
      $this -> db -> from('administrador'); // indicamos la tabla a usar
      $this -> db -> where('user = ' . "'" . $username . "'"); // Indicamos que va a buscar el nombre de usuario
      $this -> db -> where('password = ' . "'" . MD5($password) . "'"); // Indicamos que va a buscar el password con MD5
      $this -> db -> limit(1);
      
                // Solo deberá de existir un usuario
       
      $query = $this -> db -> get(); 
                // Obtenemos los resultados del query
       
      if($query -> num_rows() == 1)
      {
         return $query->result();
                        // Existen nombre de usuario y contraseña.
      }
      else
      {
         return false;
                       // No existe nombre de usuario o contraseña.
      }
       
   }
 


}


?>