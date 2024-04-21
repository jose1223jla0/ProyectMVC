<?php //  Modelos/rutasM.php
class RutasM
{
    public function procesaRutasM($ruta)
    {
        if (
            $ruta == "ingreso" ||
            $ruta == 'users' ||
            $ruta == 'start' ||
            $ruta == 'registrar' ||
            $ruta == 'salir' ||
            $ruta == 'recoverPass' ||
            $ruta == 'perfil' ||
            $ruta == 'editar'
        ) {
            $pagina = "Vistas/Modulos/" . $ruta . ".php";
        } else if ($ruta == 'index') {
            $pagina = "Vistas/Modulos/ingreso.php";
        } else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }
}
