<?php  // Controladores/empleadosC.php
class Usuario__Controller 
{
    private $usuario__cont;
    function __construct()
    {
        $this->usuario__cont= new Usuario__Model();
    }

    /*==============================================
    REGISTRAR USUARIO
    ===============================================*/

    public function registrarUsuario__Cont()
    {
        if(isset($_POST['nombre__R']))
        {
            $datosC =array();
            $datosC['nombre'] = $_POST['nombre__R'];
            $datosC['apellido'] = $_POST['apellido__R'];
            $datosC['email'] = $_POST['email__R'];
            $datosC['contrasena'] = $_POST['contrasena__R'];
            $datosC['telefono'] = $_POST['telefono__R'];
            $result = $this->usuario__cont->registrarUsuarios__Model($datosC);
            header('location: index.php?ruta=ingreso');

            return $result;
        }
    }

    /*==============================================
    MOSTRAR USUARIO
    ===============================================*/

    public function mostrarUsuario__Cont()
    {
        $result = $this->usuario__cont->mostrarUsuarios__Model();
        return $result;
    }

    /*==============================================
    EDITAR USUARIO
    ===============================================*/

    public function editarUsuario__Cont()
    {
        if(isset($_GET['id']))
        {
            $datosC = array('id'=>$_GET['id']);
            $result = $this->usuario__cont->editarUsuarios__Model($datosC);
            return $result;
        }
    }

    /*==============================================
    ACTUALIZAR USUARIO
    ===============================================*/

    public function actualizarUsuario__Cont()
    {
        if(isset($_POST['nombre__E']))
        {
            $datosC = array(    'id'=>$_POST['id__E'],
                                'nombre'=>$_POST['nombre__E'],
                                'apellido'=>$_POST['apellido__E'],
                                'email' => $_POST['email__E'],
                                'contrasena' => $_POST['contrasena__E'],
                                'telefono' => $_POST['telefono__E'],
                            );

            $result = $this->usuario__cont->actualizarUsuarios__Model($datosC);
            header('location: index.php?rutas=users');
            return $result;
        }
    }

    /*==============================================
    BORRAR USUARIO
    ===============================================*/

    public function borrarUsuario__Cont()
    {
        if(isset($_GET['id']))
        {
            $datosC = array('id' => $_GET['id']);
            $tablaBD = 'usuarios';
            $this->usuario__cont->borrarUsuarios__Model($datosC, $tablaBD);
            header('location: index.php?rutas=users');
        }
    }
}
?>