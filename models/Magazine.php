<?
require_once "Material.php";

class Magazine extends Material{
    protected $issueNumber;
    public function __construct($title,$author,$publicationYear,$issueNumber)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->issueNumber = $issueNumber;
    }

    public function getInfo()
    {
        return "Название: {$this->title} Автор: {$this->author} Год: {$this->publicationYear} Номер выпуска: {$this->issueNumber}";
    }
}