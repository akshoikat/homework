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