<?
require_once "Material.php";

class Book extends Material{
    protected $genre;
    public function __construct($title,$author,$publicationYear,$genre)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->genre = $genre;
    }

    public function getInfo()
    {
        return "Название: {$this->title}\nАвтор: {$this->author}\nГод: {$this->publicationYear}\nЖанр: {$this->genre}";
    }
}