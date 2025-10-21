<?
require_once "Material.php";
require_once "DVD.php";
require_once "Magazine.php";
require_once "Book.php";

class Library {
    public $materials = [];

    public function addMaterial(Material $material){
        $this->materials[] = $material;
    }

    public function listMaterials(){
        foreach ($this->materials as $material){
            echo $material->getInfo() ."<br>";
        }
    }

}