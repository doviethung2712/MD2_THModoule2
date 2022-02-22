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
      $products = $this->productController->showAll();
//      var_dump($products);
//      die();
      include "App/View/list.php";
    }

    public function getById()
    {
        $product = $this->productController->showById($_GET['id']);
//        var_dump($product);
//        die();
        include "App/View/detail.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $classify = new ClassifyModel();
            $classifys = $classify->showAll();
            include "App/View/create.php";
        }else{
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
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $classify = new ClassifyModel();
            $classifys = $classify->showAll();
            $product = $this->productController->showById($_GET["id"]);
//            var_dump($product);
//            die();
            include "App/View/update.php";
        }else{
            $this->productController->update($_GET['id'],$_POST);
            header("location:index.php?page=list");
        }
    }


}