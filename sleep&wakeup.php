<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("", 1);

class Book
{
    public $id;
    protected $title;
    private $author;

    public $test = "test";


    public $heavy_loaded;
    public function __construct(int $id, string $title, string $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->heavyLoad_connect();  //construct call the method 
    }
    public function heavyLoad_connect()
    {
        $this->heavy_loaded = "connected heavy load";
        echo "HeavyLoad_connect runing";
    }
    // information hide from searilize ;
    public function __toString()
    {
        return "book_u >> " . $this->title . $this->author . " " . $this->id . $this->test. "<< from toString method but also hide author";
    }
    public function __sleep()
    {
        return ["id", "title"]; //hide author ,hide heavy_loaded
    }
    public function __wakeup(){
        $this->heavyLoad_connect();
        $this->test;
    }

}
$book = new Book(1, "php viber", "Mr.phph");
echo "<br>";
echo "Decent_book : ". $book->heavy_loaded . "<br>";

echo "<br>AFTER SERIALIZE ... run >> __sleep() method // hide information <br>";
$book_s = serialize($book);
echo "book_s >> " . $book_s . "<br>";
// echo "S_book : ". $book_s->heavy_loaded . "<br>";        //error
echo "<br>";
echo "<br>AFTER UNSERIALIZE... __wakeup() method // call hide parameter <br>";
$book_u = unserialize($book_s);
echo "<br>";
echo $book_u . "<br>";      // toString()
echo "book_u >> ". $book_u->heavy_loaded ." << output <br>";  //hide 
echo $book_u->test;


