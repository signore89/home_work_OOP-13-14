<?
require_once "Material.php";

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