<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DEXTER</title>

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
                  height:100px;
            }

            .Entry {
            background-color:blueviolet;
            color:white;
            height:1000px;
            margin-top: 25px;
            padding:10px;
            float:right;
            }

            .dealpoint{
                min-width: 200px;
                max-width: 200px;

                min-height: 200px;
                max-height: 200px;

            }

    </style>

</head>

<body style="color:#000:">
      
      
	
         <div class="row navbar-fixed-top header" style="background-color:black">
	           
                  

      	 <div class="col-md-2" >
			   <a href="Entry.php"><h1 style="margin-left:35px;margin-top:25px; color:red;">DEXTER</h1></a>
		      </div>
	
      	      <div class="col-md-6">
                  <ul class="nav nav-pills"  style="margin-left:35px; margin-top:40px;">
                <li role="presentation" ><a href="#" data-toggle="modal" data-target="#myModal">About</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#myModal101">Services</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#myModal202">Contact Us</a></li>
              </ul>
              </div>
	
                  <div class="col-md-4" style="float:left; margin-top:35px" >
				
		          	<form class="form-inline" action="login.php" method="post">
                              
                              <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
                              </div>

                              <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword3" name="password" placeholder="Password">
                              </div>
                              
                              
  
                              <button type="submit" class="btn btn-default" name="submit">Sign in</button>
                        </form>
		      </div>
	      </div>
        <div class="container" style="margin-right:0px; margin-left:0px; width:100%;">
          <div="row">
                  <div class="col-md-8" align:"left">
                            <div class="row">
                                    <div class="col-md-6" style="margin-top:120px; padding-left:55px;" align:"left">


                                                <h4>Finally!!!!!!!  <br> A one stop shop for all your electronics. A place where best of the deals can be bagged. A place where your options are limitless and where quality is guaranteed. Why wait now, just Sign Up and in minute you will be able to grab those fabulous which are out there waiting for you.Get that beautiful and savvy phone you always wanted, that too at a price which stand unmatched.  </h4>
                           
                                    </div>

                                    <div class="col-md-6">
                                              <div class="dealpoint" style="margin-top:250px; margin-left:-20px;">
                                                        <img src="./pictures/dexter_won.jpg" style="width:500px;height:300px;" alt="dexter">
                                              </div>
                                    </div>
                            </div>
                  </div>





      
                  
                  <div class="col-md-4 entry" style="background-color:blueviolet; color:#000;margin-top:110px; padding-bottom:15px;" align:"right";>

                        <form action="sign.php" method="post"><br>
                            <label for="exampleInputName2">Full Name</label>

                            <div class="form-inline">

                                <div class="form-group">
                                  <label class="sr-only" for="exampleInputName2">First Name</label>
                                  <input type="text" class="form-control" id="exampleInputName2" name="fname" placeholder="John">
                                </div>

                                <div class="form-group">
                                  <label class="sr-only" for="exampleInputName2">Last Name</label>
                                  <input type="text" class="form-control" id="exampleInputName2" name="lname" placeholder="Doe">
                                </div>
                                
                              </div>
                              <br>
                              <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputName2">Phone No.</label>
                                  <input type="tel" class="form-control" id="exampleInputName2" name="tel" placeholder="47324732">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputName2">Address</label>
                                  <input type="text" class="form-control" id="exampleInputName2" name="address" placeholder="25-B wing, Detroit - 400507">
                                </div>
                              
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
                              </div>
            
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" name="passwordConfirm" placeholder="ConfirmPassword">
                              </div>                           
                              
                              <div class="checkbox">
                                    <label>
                                    <input type="checkbox" name="conditions"> I Agree to the Terms & Conditions.
                                    </label>
                              </div>

                              <button type="submit" class="btn btn-default" name="submit">Sign Up</button>

                        </form>

                  </div>
            </div>
          </div>

          <!-- Here The Footer Starts-->

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


<!-- Body should End here-->
<?php ?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">About</h4>
      </div>
      <div class="modal-body">
        At DEXTER, our vision is to be Earth's most customer centric company; to build a place where people can come to find and discover virtually any Mobile phone they want
         to buy online. With DEXTER.in, we endeavor to build on by giving customers more of what they want – vast selection, low prices, fast
          and reliable delivery, and a trusted and convenient online shopping experience . We are committed to ensure 
          100% Purchase Protection for your shopping done on DEXTER.in so that you can benefit from a safe and secure online ordering experience, convenient payment options 
          such as cash on delivery, easy returns and enjoy a completely hassle free online shopping experience. <br><br>

          It is still “Day 1” and we continue to relentlessly focus on using our investments in technology and innovation to transform the lives of our customers and all our partners. 
          We strive to transform the way World shops and the way World sells. 
      </div>
      
    </div>
  </div>
</div>

<!--2nd Modal -->
<div class="modal fade" id="myModal101" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Services</h4>
      </div>
      <div class="modal-body">
        At DEXTER we provide a hell lot of services just for you. Some of them are listed below:<br>
        <br>1) Quick Buy
        <br>2) Home Delivery  (You will be requested by email for your home address)
        <br>3) Cash on Delivery  
        <br>4) Easy Return  (Just a call and we will quickly get it done)
        <br>5) 30 days Guarrantee (It's our promise)
        <br>6) Quick Phone Support (Any problem just call)
        <br><br>And much more...
     </div>
      
    </div>
  </div>
</div>

<!--3rd Modal-->
<div class="modal fade" id="myModal202" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
        If you are a buying customer and want to place an order on DEXTER.in or want to know the status of your order, please contact Amazon Customer Support
To learn more about how DEXTER can help you build your business and to start selling via DEXTER.in, call us on 1800-419-7355 (8 AM to 8 PM) OR email your information 
to DEXTER@gmail.com, and we will follow up with you shortly.   

                        <br><br>
                        We will be looking forward for any queries or requests from you. We will be always be happy to answer them all.
      </div>
      
    </div>
  </div>
</div>
<?php 

?>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script><
</body>

</html>
