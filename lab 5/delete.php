


<?php 

require_once 'db_connection.php';

error_reporting(0);
$pid=$_GET['pid'];
$query="DELETE FROM addproduct WHERE id='$pid'";
$data=mysqli_query($conn,$query);
//$result=mysqli_fetch_delete_assoc($data);
if($data)
{
   

    echo"<font color='green'>Record deleted from database";

}

else{

echo"<font color='red'>Failed to delete from database";

}

 ?>





<form method="post" action="">
        <fieldset>
            <legend><b>Delete Product</b></legend>
            <table> 

                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" value=""></td>
                </tr>
            <tr>
                    <td>Buying Price</td>
            
            
            
                  <td> <input type="text" name="buyprice" value=""></td>
                </tr>
            
            
           <tr>
                    <td>Selling Price</td>
                   <td><input type="text" name="sellprice" value=""></td>
                </tr>
            
        

        </table>
       
        </fieldset>
    </form>

