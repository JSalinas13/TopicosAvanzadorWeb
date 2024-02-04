<?php
require_once '../assets/adodb5/adodb.inc.php';
require_once '../models/conexionMySQL.Model.php';
require_once '../models/conexionPgSQL.Model.php';
require_once '../models/usuarioMySQL.Model.php';
require_once '../models/usuarioPgSQL.Model.php';


$usuarioMySQLModel = new UsuarioMySQLModel();
$usuarioPgSQLModel = new UsuarioPgSQLModel();


if (isset($_POST['opc'])) {
    switch ($_POST['opc']) {
        case 1:
            echo getUsuarioMySQLTabla($usuarioModel);
            break;
        case 2:
            echo getUsuarioPgSQLTabla($usuarioModel);
            break;
    }
}




function getUsuarioMySQLTabla($usuarioModel)
{
    $usuarios = $usuarioModel->usuariosTabla();
    $res = '';
    while (!$usuarios->EOF) {
        $res .= '<tr>
            <th>' . $usuarios->fields[0] . '</th>
            <td>' . $usuarios->fields[1] . '</td>
           
        </tr>';

        $usuarios->MoveNext();
    }
    return $res;
}

function getUsuarioPgSQLTabla($usuarioModel)
{
    $usuarios = $usuarioModel->usuariosTabla();
    $res = '';
    while (!$usuarios->EOF) {
        $res .= '<tr>
            <th>' . $usuarios->fields[0] . '</th>
            <td>' . $usuarios->fields[1] . '</td>
        </tr>';

        $usuarios->MoveNext();
    }
    return $res;
}
