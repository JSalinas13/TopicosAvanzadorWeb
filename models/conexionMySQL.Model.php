<?php

session_start();

class conexionMySQLModel
{

    private $DBType = 'mysqli';

    private $DBServer = 'localhost'; // server name or IP address

    private $DBUser = 'topicosuser';

    private $DBPass = 'Topicos@7';

    private $DBName = 'topicosweb';



    public function __construct()
    {
    }



    function conectar()
    {
        $con = adoNewConnection($this->DBType);

        $con->debug = false;

        $con->connect($this->DBServer, $this->DBUser, $this->DBPass, $this->DBName);

        return $con;
    }
}
