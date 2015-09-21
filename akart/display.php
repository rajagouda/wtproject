<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form id="tfnewsearch" method="POST" action="./display.php">
		        <input type="text" class="tftextinput" name="box" size="51" maxlength="820"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./about.html">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					 <li>
                        <a href="http://localhost/akart/sign.php">Register</a>
                    </li>
					 <li>
		<a href="logout.php" style="float:right; padding:10px; margin-right:40px; background-color:#eee; color:#333; text-decoration:none;">Logout</a>
                    </li>
				
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Mobiles</a>
                    <a href="#" class="list-group-item">Camera</a>
                    <a href="#" class="list-group-item">Home Appliances</a>
                </div>
            </div>
<div class="row">
<form method="POST" action="display.php" >
<table style="border-spacing:0px;" width="75%">
<thead>
<tr>
<th>SORT BY</th><th> NAME:<input type="submit"  class="theButtons"  name="NAME_ASC" value="&#8593">
<input type="submit"  class="theButtons"  name="NAME_DSC" value="&#11015"></th>
<th>PRICE<input type="submit"  class="theButtons"  name="PRICE_ASC" value="&#8593">
<input type="submit"  class="theButtons"  name="PRICE_DSC" value="&#11015"></th>
<th>BRAND<input type="submit"  class="theButtons"  name="BRAND_ASC" value="&#8593">
<input type="submit"  class="theButtons"  name="BRAND_DSC"  value="&#11015"></th>
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
<!--
<tr>
<td>ASD</td>
<td>123</td>
<td>This product is awesome</td>
<td><img src="images/cover.jpg" width="200" height="300"></td>
<td><a href="#">View</a>
</tr> /
-->
<tbody>
<?php
error_reporting(0);
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
$num=mysqli_num_rows($res);

while($row=mysqli_fetch_array($res))
{
	if(($num%2==0)&&($num>=0)){
	echo '<tr bgcolor="#e3e3e3">';
	$num--;
	}
	else if(($num%2!=0)&&($num>=0)){
		echo '<tr bgcolor="#d3d3d3">';
		$num--;
	}
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
	echo '<img height="500" width="350" src="http://localhost/akart/images/'.$row['image'].'">';
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
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

