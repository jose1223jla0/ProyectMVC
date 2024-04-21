<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class Admin__Model extends ConexionBD
    {
        /*==========================================
         ----------- LOGIN -----------
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

        /*============================================
        RECOVER PASSWORD
        ==============================================*/
        public function Recover__Password($datosC, $tablaBD = 'Usuarios')
        {
            $conn__db = new ConexionBD();
            $conn__db->Start__Connection();
            $email=$datosC['email'];
            $sql="SELECT question_1, question_2, FROM Usuarios WHERE email=$email";
            return $sql;
        }
    }
?>