<?
require_once "Product.php";

class Order {
    public $products = [];

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    public function listProducts(){
        foreach ($this->products as $product){
            echo $product->getInfo() ."<br>";
        }
    }

}