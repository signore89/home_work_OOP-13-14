<?
require_once "Material.php";

class DVD extends Material{
    protected $duration;
    public function __construct($title,$author,$publicationYear,$duration)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->duration = $duration;
    }

    public function getInfo()
    {
        return "Название: {$this->title} Автор: {$this->author} Год: {$this->publicationYear} Продолжительность: {$this->duration}";
    }
}