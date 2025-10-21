<?
require_once "models2/Product.php";

class PhysicalProduct extends Product{
    protected $weight;
    public function __construct($name,$price,$weight)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getInfo()
    {
        return "Название: {$this->name} Цена: {$this->price} Вес: {$this->weight}";
    }
}