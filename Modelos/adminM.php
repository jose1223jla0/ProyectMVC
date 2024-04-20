<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class Admin__Model extends ConexionBD
    {
        /*==========================================
         ----------- PARA EL ADMNISTRADOR-----------
        ============================================*/
        public function Login__Model($datosC, $tablaBD = 'Usuarios')
        {
            $conn__db = new ConexionBD();
            $conn__db->Start__Connection();
            $user = $datosC['contrasena'];
            $passw = $datosC['email'];
            $sql = "SELECT email, contrasena FROM $tablaBD 
                WHERE email='$user' AND contrasena='$passw'";
            $result = $conn__db->Query__db($sql);
           
            return $result->fetch_array(MYSQLI_ASSOC);
        }
    }
?>