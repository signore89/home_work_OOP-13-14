<?
abstract class Material {
    protected $title;
    protected $author;
    protected $publicationYear;

    public function __construct($title,$author,$publicationYear)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }

    abstract public function getInfo();
}