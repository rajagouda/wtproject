<!DOCTYPE html>
<html lang="en">

<head>

    <title>DEXTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS      <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <script type="js/bootstrap.min.js"></script>
    <script type="js/jquery.js"></script>

  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
            .header{
                  margin-top: 0px;
                  height:90px;
            }

            .nav-group{
              margin-top: 30px;
            }

            img {
    max-width: 100%;
    height: auto;
      }

.item {
    min-height: 620px;
    max-height: 620px;
    float: left;
    margin: 3px;
    padding: 3px;
}

.icon{
  min-width: 60px;
    max-width: 60px;

  min-height: 60px;
    max-height: 60px;
    
    padding: 3px;
    margin-left:3px ;
    margin-top: 20px;
    
}
.fix{
  min-width: 320px;
    max-width: 320px;

  min-height: 350px;
    max-height: 350px;
}


    </style>

</head>

<body style="padding:0px;">
      
      <!--The heading -->
  
         <div class="row navbar header" style="background-color:black; margin-bottom:0px;">
             
                  

           <div class="col-md-2" >
               <a href="index.php"><h1 style="margin-left:35px;margin-top:25px; color:red;">DEXTER</h1></a>
            </div>
  
           <div class="col-md-3">
             <ul class="nav nav-pills"  style="margin-left:35px; margin-top:40px;">
                <li role="presentation" ><a href="#" data-toggle="modal" data-target="#myModal">About</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#myModal101">Services</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#myModal202">Contact Us</a></li>
              </ul>
            </div><div class="col-md-5" style="padding-top: 15px !important; padding-right: 35px !important;">
                <form id="tfnewsearch" method="get" action="http://www.google.com">
                      <input type="text" class="tftextinput" name="q" size="51" maxlength="820"><input type="submit" value="search" class="tfbutton">
                </form>
                <div class="tfclear"></div>
        
          </div>

          <div class="col-md-1">
            <div class="icon">
        
              <a href='cart.php'><img src="./pictures/cart.png" alt="cart"></a>
            </div>
          </div>

          <div class="col-md-1">
        
              <form class="form-inline" style="float:left; margin-top:35px" method="POST" action="logout.php">
                     <button type="submit" class="btn btn-default">Log Out</button>
              </form>

          </div>
       </div>

      <div class="row" style="margin-top:0px;margin-left:0px;">
              
          <div class="col-md-10" style="padding-left: 0px ">
              <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                  <li class="active">Mobiles</li>
              </ol>
          </div>
          <div class="col-md-2">
               <?php
                  error_reporting(0);
                  include('connect.php');
                  include('modal.php');

                  $a1=$_SESSION['email'];
                  $sql = "SELECT * FROM users WHERE email = '$a1'";
                  $row=mysqli_query($con,$sql);
                  if($row === FALSE) { 
                    echo "string";
                  die(mysqli_error("query error")); // TODO: better error handling
                  }
                  else{
                    foreach ($row as $row) {
                      echo '<h5>Hello '.$row["firstname"].'!</h5>';
                    }
                    
                    }
                    
                ?>
          </div>

     </div>

      <div class="row" style="margin-top:0px;margin-left:0px;">
          <div class="col-md-1"></div> 
          <div class="col-md-10">
              <ul class="nav nav-pills nav-justified">
                    <li role="presentation" ><a href="index.php">Home</a></li>
                     <li role="presentation" class="active"><a href="#">Mobile Phones</a></li> 
                     <li role="presentation"><a href="deals.php">Deals</a></li> 
                    
              </ul>
          </div>

          <div class="col-md-1"></div> 
      </div>
        

      <div class="row">
            <form method="POST" action="mobiles.php" >
              <div class="col-md-3" style="padding-left:50px; padding-right:70px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">SORT BY</h3>
                        </div>
                      <div class="panel-body">
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                           <h3 class="panel-title">Price</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-primary" name="PRICE_ASC" >Low->High</button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-primary"name="PRICE_DSC" >High->Low</button>
                                                </div>
                                        </div>
                                    </div>
                              </div>
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                           <h3 class="panel-title">Name</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-primary" name="NAME_ASC">Ascending</button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-primary" name="NAME_DSC">Descending</button>
                                                </div>
                                        </div>
                                    </div>
                              </div>
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                           <h3 class="panel-title">Brand</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-primary" name="BRAND_ASC">Ascending</button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                  <button type="submit" class="btn btn-primary" name="BRAND_DSC">Descending</button>
                                                </div>
                                        </div>
                                    </div>
                              </div>



                      </div>
                    </div>

              </div>
            </form>

    <div class="col-md-8">
      <div class="row">


      <!--The heading Ends-->
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
          $res=mysqli_query($con,$sql);
if($res === FALSE) { 
    die(mysqli_error("query error")); // TODO: better error handling
}
$num=mysqli_num_rows($res);

while($row=mysqli_fetch_array($res))
{

    

    echo ' <div class="col-sm-6 col-lg-6 col-md-6">';
                        echo '<div class="thumbnail">';
                           echo '<img  class="img-responsive fix" src="./images/'.$row['image'].'">';
                            echo '<div class="caption">';
                                echo'<h4 class="pull-right">'.$row['price'].'</h4>';
                                echo'<h4><a href="#">'.$row['name'].'</a>';
                                echo '</h4>';
                                echo'<p>'.$row['brand'].'</p>';
                            echo'</div>';
                            echo'<div class="ratings">';
                                echo'<p class="pull-right">';
                                        echo'<ul class="nav nav-pills nav-justified">';
                                          echo'<li role="presentation" class="active"><a href="./page/'.$row['page'].'">More</a></li>';
                                        echo'</ul>';
                                echo'</p>';
                                
                            echo'</div>';
                            
                       echo' </div>';
                    echo'</div>';
}

  ?>    
</div>
  </div>
                  
                    <div class="col-md-1">
                        

                    </div>
</div>



<!-- Here The Footer Starts-->

<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; DEXTER 2015</p>
                </div>
            </div>
        </footer>

    </div>


<!-- Body should End here-->

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>

