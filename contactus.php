<?php
define('DEBUG', true); // change true to false to disable errors showing up
if(DEBUG) {
  ini_set('display_errors', 1);
} else {
  ini_set('display_errors', 0);
}
error_reporting(E_ALL & ~E_NOTICE);
if($_POST)
{
    
  	if (!$_POST["firstname"])
    {
    	$error .="A first name is required.<br>";
    }
  
  if (!$_POST["lastname"])
    {
    	$error .="A last name is required.<br>";
    }
  if (!$_POST["emailid"])
    {
    	$error .="An email id is required.<br>";
    }
  if ($_POST["emailid"] && filter_var($_POST["emailid"], FILTER_VALIDATE_EMAIL) === false) {

  $error .="The email address is invalid.<br>";
    }
    if($error !="")
  {
  $error='<div class="alert alert-danger" role="alert"><p>
  <strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
  
  }
  else{
    
    
    
$con=mysqli_connect("localhost","id12756857_stockprediction","iris@007","id12756857_stockprediction");
if (mysqli_connect_error())
{
    echo "Database connection unsuccessful";
}
$firstname= $_POST["firstname"];
$lastname=$_POST["lastname"];
$emailid=$_POST["emailid"];
$feed=$_POST["feed"];
$table="users";

$sql="INSERT INTO $table (firstname,lastname,emailid,feedback) VALUES ('$firstname','$lastname','$emailid','$feed')";
$result = mysqli_query($con, $sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($con));
}
$subject="Your feedback is submitted";
$content="Thank you for submitting your feedback.It is important to us.If there is any complaint or suggestion,you can email us on stockprediction007@gmail.com.We will be happy to resolve it as soon as possibe.Thank you!";
$email="stockprediction007@gmail.com";
$headers = "from: ".$email;
if(mail($emailid,$subject,$content,$headers))
           {
             $successMessage ='<div class="alert alert-success" role="alert">
             Your message was sent,we\'ll get back to you ASAP:</div>'; 
             
        
        
        }
    else
    {
    	$error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - please try again later</div>';
    }


}









}
?>

<html>
<head>
<title>
Contactus-IRIS
</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	
	
	<!--Bootstrap CSS -->


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
	
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm bg-dark  fixed-top">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand mr-auto" href="#"><img src="logo.png" height="30" width="41"></img></a>
				<div class="collapse navbar-collapse" id="Navbar">
			
					<ul class="navbar-nav mr-auto">
					<li class="nav-item">
					<a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a>
					</li>
					
					<li class="nav-item active">
					<a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact Us</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="stockprediction.php"><span class="fa fa-area-chart fa-lg"></span> Predict Stocks</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="aboutus.php"><span class="fa fa-info fa-lg"></span> About Us</a>
					</li>
				
					</ul>
					
				</div>	
		</div>
</nav>

<div class="container">
		<div class="row row-content">
			<div class="col">
				<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
											  <ol class="carousel-indicators">
												<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
												<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
											  </ol>
											  <div class="carousel-inner">
												<div class="carousel-item active">
												  <img src="testimages/carousel.jpg" class="d-block w-100" alt="...">
												  <div class="carousel-caption d-none d-md-block">
													<h5>First slide label</h5>
													<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
												  </div>
												</div>
												<div class="carousel-item">
												  <img src="testimages/carousel.jpg" class="d-block w-100" alt="...">
												  <div class="carousel-caption d-none d-md-block">
													<h5>Second slide label</h5>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												  </div>
												</div>
												<div class="carousel-item">
												  <img src="testimages/carousel.jpg" class="d-block w-100" alt="...">
												  <div class="carousel-caption d-none d-md-block">
													<h5>Third slide label</h5>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												  </div>
												</div>
											  </div>
											  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											  </a>
											  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											  </a>
				</div>
			</div>	
	</div>
	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contactus</li>
  </ol>
</nav>

<div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form method="post">
					<div class="form-group row">
						<label for="firstname" class="col-md-2 col-form-label">First Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
							
						</div>
					</div>
					<div class="form-group row">
						<label for="lastname" class="col-md-2 col-form-label">Last Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="emailid" class="col-md-2 col-form-label">Email</label>
						<div class="col-md-10">
							<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
						<div class="col-md-10">
							<textarea class="form-control" id="feedback" name="feed" rows="12"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-md-2 col-md-10">
							<button  class="btn btn-primary" type="submit">
							Send Feedback
							</button>
						</div>
					</div>
				</form>
				<div class="row row-content">
	        <div class="col-12" >
			    <div id="error" class="alert-danger"><? echo $error.$successMessage; ?>
			    </div>
        	</div>
            
             
				</div>
			</div>

    </div>
	</div>









<footer class="footer black">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="#">link</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              ADDRESS<br>
					  <i class="fa fa-phone fa-lg"></i>
		              Tel.: <br>
					  
					  <i class="fa fa-envelope fa-lg"></i>
		              Email: <a href="mailto:stockprediction007@gmail.com">stockprediction007@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google"   href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook"   href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"   href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twiiter"   href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon"   href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a href="mailto:stockprediction007@gmail.com"><i class="fa fa-envelope-o fa-lg"></i>Mail</a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 IRIS</p>
                </div>
           </div>
        </div>
	</footer>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js" async></script>

<script type="text/javascript">
$(document).ready(function(){
        console.log("carousel...")
        $('.carousel').carousel();
      });
        $("form").submit(function (e){
		e.preventDefault();
	
		var error="";
		if($("#firstname").val()== ""){
		error +="<p>The firstname field is required</p>";
	
	
		}
		if($("#lastname").val()== ""){
		error +="<p>The last name field is required</p>";
	
	
		}
		if($("#emailid").val()== ""){
		error +="<p>The emailid field is required</p>";
	
	
		}
		if($("#feedback").val()== ""){
		error +="<p>The feedback field is required</p>";
	
	
		}
		if(error!=""){
		$("#error").html(error);
		}
		else{
			$("form").unbind("submit").submit();
		}
	});

</script>
</html>
