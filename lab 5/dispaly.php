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
<table >
<tr>
  <th>id</th>
<th>Name</th>
<th>buyingPrice</th>
<th>sellingPrice</th>
<th>Profit</th>
<th colspan="2">Opereation</th>
</tr>

  <?php
  include("db_connection.php");
 error_reporting(0);
$query="SELECT * FROM addproduct";
$profit="SELECT name,sellingPrice-buyingPrice as profit FROM addproduct";
 $data=mysqli_query($conn,$query);
 $dat=mysqli_query($conn,$profit);
 $total=mysqli_num_rows($data);
 //echo"$total";
//echo $result['name']." ".$result['profit'];
 
if($total!=0)
{
  //$result=mysqli_fetch_assoc($data);
//$res=mysqli_fetch_assoc($dat);
 while(($result=mysqli_fetch_assoc($data))&&($res=mysqli_fetch_assoc($dat)))
    {
      echo "
  <tr>
  <td>".$result['id']."</td>
  <td>".$result['name']."</td>
  <td>".$result['buyingPrice']."</td>
 <td>".$result['sellingPrice']."</td>
  <td>".$res['profit']."</td> 
  <td><a href='edit.php?pid=$result[id]&id=$result[id]&name=$result[name]&buy=$result[buyingPrice]&sell=$result[selingPrice]'>Edit </td> 
  <td><a href='delete.php?pid=$result[id]' onclick='return checkdelete()'>Delete</td> </tr> ";
  }
}
else
{
  echo "No records found";
}

?>


</table>
<script>
  function checkdelete()
  {

  return Confirm('Are you sure you want to Delete?');
}
</script>
</body>