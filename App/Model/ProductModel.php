<?php

namespace App\Model;

class ProductModel
{

    public $connect;

    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function showAll()
    {
        $sql = "select products.id , products.name as name , classify.name as fullname , price , quantity , description from products 
join classify on products.classify_id = classify.id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from products where id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function search($data)
    {
        $sql = "select products.id as id , products.name as name , c.name as fullname from products 
    join classify c on c.id = products.classify_id where products.name like '%$data%'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);

    }

    public function showById($id)
    {
        $sql = "select products.id , products.name as name , classify.name as fullname , price , quantity , description from products 
join classify on products.classify_id = classify.id where products.id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function create($data)
    {
//        var_dump($data);
//        die();
        $sql = "insert into products ( name , classify_id , price , quantity, description) values (?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["classify"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["quantity"]);
//        $stmt->bindParam(5, $data['date']);
        $stmt->bindParam(5, $data["description"]);
        $stmt->execute();
    }


    public function deleteById($id)
    {
        $sql = "DELETE FROM products WHERE id = $id";
        $this->connect->query($sql);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE products SET name = ?, classify_id = ?, price = ?,quantity= ?,description = ? WHERE id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['classify']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['description']);
        $stmt->bindParam(6, $id);
        $stmt->execute();
    }


}