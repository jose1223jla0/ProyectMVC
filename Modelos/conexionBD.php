<?php
/*===================================
    ---------Modelos/conexionBD.php-----
    ====================================*/
?>
<?php
class ConexionBD
{
    private $server__name = 'localhost';
    private $user__name = 'root';
    private $password__db = 'jose';
    private $db__name = 'crud';
    private $connection__db;

    public function __construct()
    {
        $this->connection__db = new mysqli(
            $this->server__name,
            $this->user__name,
            $this->password__db,
            $this->db__name
        );
    }

    public function Start__Connection()
    {
        return $this->connection__db;
    }

    public function Close__Connection()
    {
        return $this->connection__db->close();
    }

    public function Query__db($sql)
    {
        return $this->connection__db->query($sql);
    }

    public function Prepare__query($sql)
    {
        return $this->connection__db->prepare($sql);
    }
}
?>