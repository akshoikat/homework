<!-- method overriding -->

<?php

class based{
    public $name;

    function show(){
        echo " based true"."<br>";
    }
}

class second extends based{
    public $name;

    function show(){
        echo " second true ";
    }
}

$test = new based();
$test ->show();

$test2 = new second();
$test2 ->show();
?>

<!-- abostract class -->

<?php

abstract class parrentClass{

    public $name;

    abstract protected function show($a, $b);


}


class chield extends parrentClass{


    public function show($a, $b){
        echo $a + $b;
    }

}

$a1 = new chield();
$a1->show(10,20);

?>

<!-- interface -->

<?php

interface a{
    function hallo();
    function hi();
}
interface b{
    function hallo();
    function hi();
}
interface c{
    function hallo();
    function hi();
}
interface d{
    function call();
    function action();
}


class Child implements a, b, c, d {
    public function hallo() {
        echo "Hello from hallo <br>";
    }
    
    public function hi() {
        echo "Hello from hi <br>";
    }
    public function call() {
        echo "Hello from call <br>";
    }
    
    public function action() {
        echo "Hello from action <br>";
    }

}

$at = new child();
$at->hallo();
$at->hi();
$at->call();
$at->action();
?>


<!-- static member -->

<?php
class parentClass{
    public static $name = "i am static variable";
}

class derive extends parentClass{

    public function show(){
        echo parent::$name;
    }
}

$at = new derive();
$at -> show();

?>


<!-- late static binding -->

<?php
class binding{
    protected static $name = "i am static variable frome parent class";

    public function show(){
        echo static::$name;
    }
}

class derivebinding extends binding{
    protected static $name = "i am static variable frome deriver class <br>";

}

$atk = new derivebinding();
$atk -> show();

?>

<!-- trait -->

<?php
trait parentTrait{
    public $name;


    public function show($name){
        echo $name  ;
    }
}

class a1 {
    use parentTrait;
}
class a2 {
    use parentTrait;
}
class a3 {
    use parentTrait;
}
class a4 {
    use parentTrait;
}

$af1 = new a1();
$af1->show("this is treit common function from a1 <br>"); 

$ag2 = new a2();
$ag2->show("this is treit common function from a2 <br>"); 

$ae3 = new a3();
$ae3->show("this is treit common function from a3 <br>" ); 

$vc4 = new a4();
$vc4->show("this is treit common function from a4 <br>")

?>
