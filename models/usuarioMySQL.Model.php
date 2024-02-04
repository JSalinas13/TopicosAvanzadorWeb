<?php
class UsuarioMySQLModel
{
    private $db;

    public function __construct()
    {
        $con = new conexionMySQLModel();
        $this->db = $con->conectar();
    }


    public function usuariosTabla()
    {
        $query = "SELECT * FROM usuarios";
        $rs = $this->db->Execute($query);
        if ($rs === false) {
            $rs = die('Error en la consulta usuariosTablaMySQL: ' . $this->db->ErrorMsg());
        }
        return $rs;
    }
}
