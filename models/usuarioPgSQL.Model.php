<?php
class UsuarioPgSQLModel
{
    private $db;

    public function __construct()
    {
        $con = new conexionPgSQLModel();
        $this->db = $con->conectar();
    }


    public function usuariosTabla()
    {
        $query = "SELECT * FROM usuarios";
        $rs = $this->db->Execute($query);
        if ($rs === false) {
            $rs = die('Error en la consulta usuariosTablaPgSQL: ' . $this->db->ErrorMsg());
        }
        return $rs;
    }
}
