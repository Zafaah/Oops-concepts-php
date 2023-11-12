<?php
echo "<h1> object program </h1>";
class person{
   public $name;
   public $age;

   function set_name($name){
      $this->name=$name;
   }
   
   function get_name(){
      return $this->name;
   }
}

$name1=new person();
$name2=new person();

$name1->set_name("Hafsa");
$name2->set_name("Aisha");

echo $name1->get_name();
echo "<br>";
echo $name2->get_name();
?>