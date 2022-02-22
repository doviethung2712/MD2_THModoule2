<?php

namespace App\Model;

use PDO;
use PDOException;

class DBConnect
{
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=productmanagement;charset=utf8";
        $this->username = "root";
        $this->password = "";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            return $conn;
        } catch (PDOException $error) {
            die($error->getMessage());
        }

    }

}