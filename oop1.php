
<?php
class A{
   function A(){
      $class_of_this = get_class($this);
      echo 'Object is an instance of class '.$class_of_this.' which is the ';
      if(strcmp($class_of_this,'A')==0)
         echo 'parent-class';
      else if(strcmp($class_of_this,'B')==0)
         echo 'child-class';
      echo ".\n";
   }
}

class B extends A{
   function B(){
      $this->A();
   }
}

$object1 = new A();
$object2 = new B();
?>