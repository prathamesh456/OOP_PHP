<?php
     
      $name = $_POST['name'];
      $number = $_POST['number'];

     class deletion
     {
     	public $con;

     	function __construct()
     	{
     		$this->con = mysqli_connect('localhost','root','root','OOP_PHP');

     		if($this->con)
     		{
     			echo "Connection Successful";
     		}
     		else
     		{
     			echo "Connection Failed !";
     		}
     	}

     	function delete()
     	{   
     		if($this->con->query($this->sql))
     		{
               echo "Deletion successful";
     		}
            else
            {
            	echo "Deletion Failed ";
            }
     		

     		
     	}
     }

     $obj = new deletion();
     echo $query = "DELETE FROM insertion_details WHERE Name='$name' AND Number='$number' ";
     $obj->sql = $query;
     $obj->delete(); 
?>
