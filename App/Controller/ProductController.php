<?php

namespace App\Controller;

use App\Model\ClassifyModel;
use App\Model\ProductModel;

class ProductController
{

    public $productController;

    public function __construct()
    {
        $this->productController = new ProductModel();
    }

    public function showAll()
    {
        if (empty($_REQUEST["search"])) {
            $products = $this->productController->showAll();
        } else {
            $products = $this->productController->search($_REQUEST['search']);
        }
        include "App/View/list.php";
    }

    public function getById()
    {
        $product = $this->productController->showById($_GET['id']);
        include "App/View/detail.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $classify = new ClassifyModel();
            $classifys = $classify->showAll();
            include "App/View/create.php";
        } else {
            $this->productController->create($_POST);
            header("location:index.php?page=list");
        }
    }

    public function deleteById()
    {
        $this->productController->deleteById($_GET["id"]);
        header("location:index.php?page=list");
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $classify = new ClassifyModel();
            $classifys = $classify->showAll();
            $product = $this->productController->showById($_GET["id"]);
//            var_dump($product);
//            die();
            include "App/View/update.php";
        } else {
            $this->productController->update($_GET['id'], $_POST);
            header("location:index.php?page=list");
        }
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $products = $this->productController->showAll();
            include "App/View/list.php";
        } else {
            $data = $this->productController->search($_POST);
            var_dump($data);
            die();
            include "App/View/list.php";
        }
    }


}