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
        if (isset($_POST["email__R"])) {
            $datosC = array(
                "email" => $_POST["email__R"],
                "contrasena" => $_POST["contrasena__R"]
            );

            /*============================
            LOGIN Admin
            =============================*/
            $result = $this->admin__cont->Login__Model($datosC);
            if (isset($result)) {
                session_start();
                $_SESSION['ingresar'] = true;
                header("location:index.php?ruta=start");
                exit();
            }

            /*============================
            LOGIN User
            =============================*/
            $result = $this->userAd__cont->LoginUser__Model($datosC);

            if (isset($result)) 
            {
                session_start();
                $_SESSION['ingresar'] = true;
                header("location:index.php?ruta=start");
                exit();
            }
        }
    }

    public function salirC()
    {
        session_destroy();
        header("location:index.php?=ingreso");
    }
}
