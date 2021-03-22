


<?php
include'db_connection.php';
error_reporting(0);
  $id=$_GET['id'];
  $name=$_GET['name'];
  $buy=$_GET['buyingPrice'];
 $sell=$_GET['sellingPrice'];
?>



<form method="post" action="">
		<fieldset>
			<legend><b>Edit Product</b></legend>
			<table> 
                   
              <tr>
                    <td>ProductId</td>
                    <td> <input type="text" name="id" value="<?php echo "$id"?>"></td>
                </tr>


                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" value="<?php echo "$name"?>"></td>
                </tr>
			<tr>
                    <td>Buying Price</td>
    		
                     <td> <input type="text" name="buyingPrice" value="<?php echo "$buy"?>"></td>
                </tr>
    		
    		
           <tr>
                    <td>Selling Price</td>
                   <td><input type="text" name="sellingPrice" value="<?php echo "$sell"?>"></td>
                </tr>
            
         <tr>
             
             
             <td><input type="checkbox" name="display" value=""></td>
             <td>Display</td>
         </tr>

    	</table>
        <input type="submit" name="submit" value="Save">
		</fieldset>
	</form>

    <?php

if($_GET[submit])
{
$id=$_GET['id'];
  $name=$_GET['name'];
  $buy=$_GET['buyingPrice'];
 $sell=$_GET['sellingPrice'];
$query="UPDATE addproduct SET id ='$id',name='$name',buyingPrice='$buy',sellingPrice='$sell'WHERE id='$id'";

$data=mysqli_query($conn,$query);
if($data){

    echo "Record Updated";
}
else
{
    echo "Failed to update record";
}
}




    ?>