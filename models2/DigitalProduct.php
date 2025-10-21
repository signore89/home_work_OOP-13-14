<?
require_once "models2/Product.php";

class DigitalProduct extends Product{
    protected $fileSize;
    public function __construct($name,$price,$fileSize)
    {
        $this->name = $name;
        $this->price = $price;
        $this->fileSize = $fileSize;
    }

    public function getInfo()
    {
        return "Название: {$this->name} Цена: {$this->price} Размер: {$this->fileSize}";
    }
}