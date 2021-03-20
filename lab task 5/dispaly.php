<head>
    
    <style>
        table{
  border: 1px solid black;
  border-collapse: collapse;



}
       td, th {
  border: 1px solid black ;


} 



    </style>

</head>



<body>
<form method="post" action="">
		<fieldset>
			<legend><b>Dispaly</b></legend>
			<table >
  <tr>
    <th>Name</th>
    <th>Profit</th> 
  
    
    
    </tr>
  <tr >
    <td>Samsung</td>
    <td>5000</td>
    <td><a href="edit.php">edit</a></td>
    <td><a href="delete.php">delete</a></td>
  </tr>
  <tr>
    <td>Nokia</td>
    <td>1500</td>
    <td><a href="edit.php">edit</a></td>
    <td><a href="delete.php">delete</a></td>
  </tr>
  <tr>
    <td>Xiaomi</td>
    <td>3300</td>
    <td><a href="edit.php">edit</a></td>
    <td><a href="delete.php">delete</a></td>
  </tr>
</table>

        <input type="submit" name="save" value="Save">
		</fieldset>
	</form>
    </body>