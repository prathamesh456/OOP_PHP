<?php
        
      $name = $_POST['name'];
      $number = $_POST['number']; 

     	class insertion
    	{
        	public $con;

         	function __construct($db)
         	{
           		$this->con = mysqli_connect('localhost','root','root',$db);
            }  

         	function check_con()  
         	{

         			if($this->con)
            		{
    					echo "Connection successful using class <br><br>";
            		}
    	    		else
    	    		{
    		    		echo "connection failure";
    	    		} 
          	}
           
      

         function insert2($sql)
         {
             	
             if($this->con->query($this->sql)) // here query() acts like sqli_query i.e.it    										executes the query 
             {
             	 
             	echo "Insertion successful using insert2 function !!";
             }
             else
             {
             	echo "<br><br> Insertion Failed !!";
             }
    	   
         	}
    }

    /*class insertion2 extends insertion
    {
    	function __construct()
    	{
    		$this->insert2();
    		echo "You are in class insertion 2";
    	}
    } */

   $obj = new insertion('OOP_PHP');
   $obj->check_con();
   echo $query1 = "INSERT INTO insertion_details(Name,Number) VALUES ('$name','$number') ";
   $obj->sql = $query1;
   $obj->insert2();

   
   // $obj = new insertion2();
?>       