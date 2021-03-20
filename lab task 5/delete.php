<?php 

require_once 'Model.php';

if (deleteProduct($_GET['id'])) {
    header('Location: ../display.php');
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
    		
            
            
                  <td> <input type="text" name="name" value=""></td>
                </tr>
    		
    		
           <tr>
                    <td>Selling Price</td>
                   <td><input type="text" name="name" value=""></td>
                </tr>
            
         <tr>
             
             
             <td><input type="checkbox" name="display" value=""></td>
             <td>Display</td>
         </tr>

    	</table>
        <input type="submit" name="save" value="Save">
		</fieldset>
	</form>