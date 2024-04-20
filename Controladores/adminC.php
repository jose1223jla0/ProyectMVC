<?php  //Controladores/adminC.php
class Admin__Controller
{
    private $admin__cont;
    private $userAd__cont;
    public function __construct()
    {
        $this->admin__cont = new Admin__Model();
        $this->userAd__cont = new Usuario__Model();
    }

    /*===========================================
    LOGIN DE ADMIN y USER
    =============================================*/

    public function Login__Controller()
    {

        // if (isset($_POST["Email"])) {
        //     $datosC = array(
        //         "usuario" => $_POST["Email"],
        //         "clave" => $_POST["Passwd"]
        //     );
        //     $result = $this->admin__cont->Login__Model($datosC);
        //     if (isset($result)) {
        //         session_start();
        //         $_SESSION['ingresar'] = true;
        //         header("location:index.php?ruta=start");
        //     } else {
        //         echo "ERROR AL INGRESAR";
        //     }
        // }

        if (isset($_POST["email__R"])) {
            $datosC = array(
                "email" => $_POST["email__R"],
                "contrasena" => $_POST["contrasena__R"]
            );
            $result=$this->userAd__cont->LoginUser__Model($datosC);
            if (isset($result)) {
                session_start();
                $_SESSION['ingresar'] = true;
                header("location:index.php?ruta=start");
            } else {
                echo "ERROR!";
            }
        }
    }

    public function salirC()
    {
        session_destroy();
        header("location:index.php?=ingreso");
    }
}
