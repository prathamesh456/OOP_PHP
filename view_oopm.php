
<?php   
        include('conn2.php');
        $query = "Select * from insertion_details";   
        $run = mysqli_query($con,$query);
 ?>


<form action="view_oopm.php" method="post">
	<table border="1">
		      <tr>
		      	   <td> Name </td>
		      	   <td> Number </td>
		      </tr>	

         <?php 
             while($data = mysqli_fetch_assoc($run))
             {
             ?>  
		      <tr>
		      	   <td> <?php echo $data['Name']; ?> </td>
 		      	   <td> <?php echo $data['Number']; ?> </td>
 		      	   <td> <a href="edit_oopm.php?id=<?php echo $data['id']; ?>"> Edit </a> </td>
		      </tr>	
		  <?php
		     }
		 ?>      

    </table>		
</form>