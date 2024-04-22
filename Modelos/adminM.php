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
    public function Email__exists($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD();
        $conn__db->Start__Connection();
        $email = $datosC['email'];
        $sql = "SELECT *FROM $tablaBD WHERE email=$email";
        $result = $conn__db->Query__db($sql);
        return $result->num_rows > 0;
    }

    public function Save__Token($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD();
        $conn__db->Start__Connection();
        $token=$datosC['contrasena'];
        $email=$datosC['email'];
        $sql = "UPDATE $tablaBD SET contrasena='$token' WHERE email='$email'";
        $result = $conn__db->Query__db($sql);
        return $result;
    }
}
