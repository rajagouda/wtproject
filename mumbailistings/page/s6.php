








<!-- -r4gj3ggg234g34g3grrberberb-->



<!DOCTYPE html>
<html lang="en">

<head>

    <title>DEXTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS      <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

    <script type="../js/bootstrap.min.js"></script>
    <script type="../js/jquery.js"></script>



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
        <a href="../index.php"><h1 style="margin-left:35px;margin-top:25px; color:red;">DEXTER</h1></a>
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
        
              <a href='../cart.php'><img src="../pictures/cart.png" alt="cart"></a>
            </div>
          </div>

          <div class="col-md-1">
        
              <form class="form-inline" style="float:left; margin-top:35px" method="POST" action="../logut.php">
                     <button type="submit" class="btn btn-default">Log Out</button>
              </form>

          </div>
       </div>

      <div class="row" style="margin-top:0px;margin-left:0px;">
              
          <div class="col-md-10" style="padding-left: 0px ">
              <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                  <li><a href="../mobiles.php">Mobiles</a></li>
                  <li class="active">s6</li>

              </ol>
          </div>
          <div class="col-md-2">
               <?php
                  error_reporting(0);
                  include('../connect.php');
                  include('../modal.php');
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
                    <li role="presentation" ><a href="../index.php">Home</a></li>
                     <li role="presentation" class="active"><a href="../mobiles.php">Mobile Phones</a></li> 
                     <li role="presentation"><a href="../deals.php">Deals</a></li> 
                    
              </ul>
          </div>

          <div class="col-md-1"></div> 
      </div>
        
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-1"></div>

            <div class="col-md-10" >

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" style="max-height:400px; min-height:400px;">
                                <div class="item active">
                                    <img class="slide-image" src="../images/s6/1.jpg" alt="mobile" style="max-height:400px; min-height:400px;max-width:900px; min-width:940px;">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../images/s6/2.jpg" alt="camera" style="max-height:400px; min-height:400px;max-width:900px; min-width:940px;">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../images/s6/3.jpg" alt="Home applicances" style="max-height:400px; min-height:400px;max-width:900px; min-width:940px;">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>


        </div>
        <div class="col-md-1"></div>

    </div>
<div="row">

    <div id="image" >
    <h1>Samsung Galaxy S6 32GB</h1> 
        <img src="../images/spec/s6.png">
    </div>
<div class="row">
          <form class="form-inline" action="../new.php" method="post" style="margin-top:50px;" align="center">
                              
                              <div class="form-group">
                                    
                                    <input type="hidden" name="poll" value="s6.php">
                              </div>

                              <button type="submit" class="btn btn-primary btn-lg " name="submit">Buy</button>
                        </form>
</div>
<div class="container" style ="margin-top:100px;">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row" style ="margin-top:0px;">
                <div class="col-lg-12">
                    <p>Copyright &copy; DEXTER 2015</p>
                </div>
            </div>
        </footer>

    </div>



    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>



</body>

</html>



