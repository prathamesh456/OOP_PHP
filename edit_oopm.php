
<?php   
        include('conn2.php');
        $id=$_GET['id'];
        
        $query = "SELECT * FROM insertion_details WHERE id='$id' ";
        $run = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($run);

       
?>

<form action="edit_oopm.php" method="post">
	<table border="1">
		   <tr>
		   	     <td> Name </td>
		   	     <td> <input type="text" name="name" value="<?php echo $data['Name']; ?>" />    </td>
		   </tr>
		   <tr>
		   	     <td> Number </td>
		   	     <td> <input type="text" name="number" value="<?php echo $data['Number']; ?>" />     
		   	</tr>

		   	<tr>
		   		 <td>  </td>
		   		 <td> <input type="submit" name="update_button" value="Update" /> </td>
		   		 <input type="hidden" name="secret" value="<?php echo $id; ?>" />
		   	</tr>	
	</table>
	</form>

<?php
      if(isset($_POST['update_button']))
      {
      	echo $new_id = $_POST['secret'];
        $updated_name = $_POST['name'];
        $updated_number = $_POST['number'];
      

      class updation
      {
          public $con2;

          function __construct()
          {
          	  $this->con2 = mysqli_connect('localhost','root','root','OOP_PHP');
          	  if($this->con2)
          	  {
                  echo "Connection Successful";
          	  }
          	  else
          	  {
          	  	echo "Connection Failure";
          	  }
          }

          function update()
          {
             if($this->con2->query($this->sql))
             {
                  echo "Updation successful";
             }
             else
             {
                 echo "Updation unsuccessful";
             }
          }
      } 

      $obj = new updation();
      echo $query2 = "UPDATE insertion_details SET Name='$updated_name',Number=$updated_number WHERE id='$new_id' ";
      $obj->sql = $query2;
      $obj->update();

    }  
?>
