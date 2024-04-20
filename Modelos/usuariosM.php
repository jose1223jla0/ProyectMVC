<?php  //Modelos/usuariosM.php
require_once "conexionBD.php";

class Usuario__Model extends ConexionBD
{

    /*=========================================
    USER LOGIN
    ===========================================*/
    public function LoginUser__Model($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD();
        $conn__db->Start__Connection();
        $user = $datosC['email'];
        $passw = $datosC['contrasena'];
        $sql = "SELECT email, contrasena FROM $tablaBD 
                WHERE email='$user' AND contrasena='$passw'";
        $result = $conn__db->Query__db($sql);

        return $result->fetch_array(MYSQLI_ASSOC);
    }

    /*============================================
    REGISTRAR DE  USUARIO
    ==============================================*/

    public function registrarUsuarios__Model($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD;
        $conn__db->Start__Connection();

        $nombre = $datosC['nombre'];
        $apellido = $datosC['apellido'];
        $email = $datosC['email'];
        $passwd = password_hash($datosC['contrasena'],PASSWORD_DEFAULT);
        $telf = $datosC['telefono'];
        $roleId = 1; // ID de rol usuario
        $sql = "INSERT INTO $tablaBD (nombre, apellido, email, contrasena, telefono, RoleID) VALUES 
            ('$nombre', '$apellido', '$email', '$passwd', '$telf', '$roleId')";

        $result = $conn__db->Query__db($sql);
        return $result;
    }


    /*============================================
    MOSTRAR USUARIO
    ==============================================*/

    public function mostrarUsuarios__Model($tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD;
        $conn__db->Start__Connection();
        $query = "SELECT id, nombre, email, apellido, contrasena, telefono 
                FROM $tablaBD";
        $result = $conn__db->Query__db($query);
        return $result;
    }

    /*============================================
    EDITAR USUARIO
    ==============================================*/

    public function editarUsuarios__Model($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD;
        $conn__db->Start__Connection();
        $id = $datosC['id'];
        $query = "SELECT id, nombre, email, apellido, contrasena, telefono
                FROM $tablaBD WHERE id='$id'";
        $result = $conn__db->Query__db($query);
        $rows = $result->fetch_array(MYSQLI_ASSOC);
        return $rows;
    }

    /*============================================
    ACTUALIZAR  USUARIO
    ==============================================*/

    public function actualizarUsuarios__Model($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD;
        $conn__db->Start__Connection();
        extract($datosC);
        $query = "UPDATE $tablaBD
            SET id='$id', 
            nombre='$nombre', 
            apellido='$apellido', 
            email='$email', 
            contrasena='$puesto', 
            telefono='$salario'
            WHERE id='$id'";
        echo $query;
        $result = $conn__db->Query__db($query);
        return $result;
    }

    /*============================================
    ELIMINAR  USUARIO
    ==============================================*/

    public function borrarUsuarios__Model($datosC, $tablaBD = 'Usuarios')
    {
        $conn__db = new ConexionBD;
        $conn__db->Start__Connection();
        extract($datosC);
        $query = "DELETE FROM $tablaBD WHERE id='$id'";
        $result = $conn__db->Query__db($query);
        return $result;
    }
}
