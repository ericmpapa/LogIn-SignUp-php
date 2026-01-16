<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;

    public function __construct()
    {

        $this->servername = 'localhost';
        $this->username = 'web';
        $this->password = 'admin';
        $this->databasename = 'testweb';

    }
}

?>
