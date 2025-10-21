<p>Библиотека</p>
<?
require_once "models/Library.php";
require_once "models/DVD.php";
require_once "models/Magazine.php";
require_once "models/Book.php";
require_once "models/Material.php";
require_once "models2/Order.php";
require_once "models2/Product.php";
require_once "models2/PhysicalProduct.php";
require_once "models2/DigitalProduct.php";

$liba = new Library();
$order = new Order();

$book1 = new Book("Тихий Дон","Михаил Шолохов","литература 20 века", "Исторические романы");
$book2 = new Book("Мастер и Маргарита","Михаил Булгаков","1940", "Советская классика");
$book3 = new Book("На западном фронте без перемен","Ремарк","литература 20 века", "Зарубежная классика");

$magazine1 = new Magazine("Пример1","1222","пример1","пример1");
$magazine2 = new Magazine("Пример2","1222","пример2","пример2");
$magazine3 = new Magazine("Пример3","1222","пример3","пример3");

$dvd1 = new DVD("DVD1","autor1dvd","2000","1234");
$dvd2 = new DVD("DVD2","autor2dvd","2000","1234");
$dvd3 = new DVD("DVD3","autor3dvd","2000","1234");

$liba->addMaterial($book1);
$liba->addMaterial($book2);
$liba->addMaterial($book3);
$liba->addMaterial($magazine1);
$liba->addMaterial($magazine2);
$liba->addMaterial($magazine3);
$liba->addMaterial($dvd1);
$liba->addMaterial($dvd2);
$liba->addMaterial($dvd3);

$liba->listMaterials();

//задание 2

$book1 = new DigitalProduct("PHP для начинающих", 1500,8);
$book2 = new DigitalProduct("JavaScript продвинутый", 2200,12);

$vegetables1 = new PhysicalProduct("картоха", 150,8);
$vegetables2 = new PhysicalProduct("лук", 50,12);
$order->addProduct($book1);
$order->addProduct($book2);
$order->addProduct($vegetables1);
$order->addProduct($vegetables2);
$order->listProducts();