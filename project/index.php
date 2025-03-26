
<?php
interface manageable{
    public function getDetails();
}

abstract class person{
    public $name;
    public $age;


    function __construct($name , $age){
        
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getRole();
}

class author extends person implements manageable {

    public $books;

    public function addBook($book){
        
        $this->books =$book;
    }

    public function getDetails(){
        echo "author : ".$this->name .". <br>";
        echo "author age : ".$this->age .". <br>";
        echo "author book : ".$this->books .". <br>";
    }

    public function getRole(){
        echo "admin";
    }

}

$author = new author("ak shoikat", 25);
$author->addBook("sukh pakhi");
$author->getDetails();

?>

