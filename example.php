<!DOCTYPE html>  
<html>  
<body>  
<table align = "left" border = "1" bordercolor= "green" cellpadding = "3" cellspacing = "2">  
<tr>  
<td> Quantity </td>  
<td> Additional </td>  
<td> Prize </td>  
<td> Total </td>  
</tr>  
<?php    
$x = 10;  
$price = 35;  
$quatity = 1;  
while($x <= 60 && $quantity <= 6) {  
    echo "<tr>";  
  echo "<td> $x </td>";  
  echo "<td> $quatity </td>";  
  echo "<td>" .$x*$price. "</td>";  
  echo "<td>" .$x*$price*$quatity. "</td>";  
    echo "</tr>";  
  $x += 10;  
  $quatity++;  



}   
?>    
</table>  
</body>  
</html>