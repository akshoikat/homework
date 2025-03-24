<!-- introduction class -->
<?php

class calculation{
    public $a, $b, $c;
 
 
 
 
 function sum(){
     $this->c = $this->a + $this->b;
     return $this->c;
     
    }
 function sub(){
     $this->c = $this->a - $this->b;
     return $this->c;
    }
 
 }
 
 $cal1 = new calculation();
 $cal1->a = 28;
 $cal1->b = 30;
 echo $cal1->sum();

 echo "<br>";

 $cal2 = new calculation();
 $cal2->a = 28;
 $cal2->b = 30;
 echo $cal2->sub();

 echo "<br>";
?>

<!-- constructior -->

<?php
class cost{
    public $name;
    public $age;
    Public $salary;
    
     
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;   
        $this->salary = $salary; 
    }

    function show(){
        echo "<pre>";
        echo "my name is ".$this->name. "<br>";
        echo "i am ".$this->age. " years old.<br>";
        echo "my salary is  ".$this->salary. " BDT<br>";
        echo "</pre>";
    }

}

$myInfo = new cost("shoikat",   12 , 1200 );
$myInfo->show();
?>

<!-- inheritance -->

<?php
class inheritance {
    public $name ;
    public $position ="emplpye";
    public $age ;
    public $salary;

    public function __construct($name , $position, $age, $salary){

        $this->name = $name;
        $this->position = $position;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function show(){
        echo "<h2>Employ Profile</h2>";
        echo "employe name : ".$this->name ."<br>";
        echo "employe age : ".$this->age ."<br>";
        echo "employe position : ".$this->position ."<br>";
        echo "employe salary : ".$this->salary ."<br>";
    }
}



class manager extends inheritance{
   
    public $ytavel = 3000;
    public $phone_bill = 400;
    public $oil = 500;
    public $tottal;

    function show(){
        $this->tottal = $this->salary + $this->ytavel + $this->phone_bill - $this->oil;

        echo "<h2>manager Profile</h2>";
        echo "employe name : ".$this->name ."<br>";
        echo "employe age : ".$this->age ."<br>";
        echo "employe position : ".$this->position ."<br>";
        echo "employe salary : ".$this->salary ."<br>";
        echo "employe travell cost : ".$this->ytavel ."<br>";
        echo "employe phone bill : ".$this->phone_bill ."<br>";
        echo "employe bike oil cost: ".$this->oil ."<br>";
        echo "employe total salary: ".$this->tottal ."<br>";
    }

}
$em = new inheritance("shoikat","seller",25 , 12000);
$em->show();

$ma = new manager("ariyan","manager",25,55000);
$ma->show();
?>