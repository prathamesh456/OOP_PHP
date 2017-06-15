
<?php
       class A{
       	        function A()   // default constructor of A
       	        {
       	        	echo "Welcome to class A <br>";
       	        }
       }

       class B extends A{
             function B()    // default constructor of B
             {
                $this -> A();
                echo "but we are accessing it through class B"; 
             }
            
       }

       //$object1 = new A();
       $object2 = new B();
?>