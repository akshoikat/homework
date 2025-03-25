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