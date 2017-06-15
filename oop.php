<?php
        
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
            }        
           
   $obj = new insertion('php');
   $obj->check_con();
?>       