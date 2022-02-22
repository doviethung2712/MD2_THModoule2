<?php

namespace App\Model;

class ClassifyModel
{
    public $classify;

    public function __construct()
    {
        $db = new DBConnect();
        $this->classify = $db->connect();
    }

    public function showAll()
    {
        $sql = "select * from classify";
        $stmt = $this->classify->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

}