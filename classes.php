<?php
echo "<h1> Class program <h1>";
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

?>