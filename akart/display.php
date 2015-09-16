<form method="POST" action="display.php" >
<table style="border-spacing:30px;">
<thead>
<tr>
<th><input type="submit"  class="theButtons"  name="NAME_ASC" value="NAME ASC"></th>
<th><input type="submit"  class="theButtons"  name="NAME_DSC" value="NAME DSC"></th>
<th><input type="submit"  class="theButtons"  name="PRICE_ASC" value="PRICE ASC"></th>
<th><input type="submit"  class="theButtons"  name="PRICE_DSC" value="PRICE DSC"></th>
<th><input type="submit"  class="theButtons"  name="BRAND_ASC" value="BRAND ASC"></th>
<th><input type="submit"  class="theButtons"  name="BRAND_DSC"  value="BRAND DSC"></th>
</tr>
</thead>
<!--
<table style="border-spacing:30px;">
<thead>
<tr>
<th>NAME</th>
<th>Price</th>
<th>BRAND</th>
<th>Image</th>
<th>View</th>
</tr>
</thead>
//-->
<tr>
<td>ASD</td>
<td>123</td>
<td>This product is awesome</td>
<td><img src="images/cover.jpg" width="200" height="300"></td>
<td><a href="#">View</a>
</tr> /
<tbody>
<?php
include('connect.php');
    if(isset($_POST['NAME_ASC'])){
     $sql="SELECT * FROM mobile ORDER BY name ASC";
    }
    elseif(isset($_POST['NAME_DSC'])){
      $sql="SELECT * FROM mobile ORDER BY name DESC";
    }
    elseif(isset($_POST['PRICE_ASC'])){
      $sql="SELECT * FROM mobile ORDER BY price ASC";
    }
    elseif(isset($_POST['PRICE_DSC'])){
      $sql="SELECT * FROM mobile ORDER BY price DESC";
    }
    elseif(isset($_POST['BRAND_ASC'])){
      $sql="SELECT * FROM mobile ORDER BY brand ASC";
    }
    elseif(isset($_POST['BRAND_DSC'])){
      $sql="SELECT * FROM mobile ORDER BY brand DESC";
    }
    else{
      $sql="SELECT * FROM mobile ORDER BY name ASC";
	}


//$sql="SELECT * FROM mobile ORDER BY price ASC";
$res=mysqli_query($con,$sql);
if($res === FALSE) { 
    die(mysqli_error("query error")); // TODO: better error handling
}

while($row=mysqli_fetch_array($res))
{
	echo '<tr>';
	echo '<td>';
	echo $row['name'];
	echo '</td>';
	echo '<td>';
	echo $row['price'];
	echo '</td>';
	echo '<td>';
	echo $row['brand'];
	echo '</td>';
	echo '<td>';
	echo '<img height="300" width="200" src="http://localhost/akart/images/'.$row['image'].'">';
	echo '</td>';
	echo '<td>';
	echo '<a href="http://localhost/akart/page/'.$row['page'].'">View';
	echo '</td>';
//	echo '</tr>.<br>';
	/* $name=$row['pname'];
	echo $name.'<br>'; */
}
?>
</tbody>
</table>
