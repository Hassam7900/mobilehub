<!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>
<div class="container-main">
<header class="header">
    <div class="header-left">
	   <h2>Advance Mobile Store</h2>
    </div>
    <div class="header-right">
    	<i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <a href="product_detail.html" style="color: black;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
    </div>
</header>
<nav class="navbar navbar-expand-md bg-dark navbar-dark section-menu">
<div class="collapse navbar-collapse" id="navb">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="Home.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Home.html">All_Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About_us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.html" style="color: white;">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.html" >Login</a>
    </li>
  </ul>
  <form class="form-inline" action="Home.html">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn" type="submit" style="color:white; background-color:#fe9c00; ">Search</button>
  </form>
</div>
</nav>
<!--	<ul class="navbar navbar-expend-lg bg-dark">
		<li><a href="Home.html">Home</a></li>
		<li><a href="#"> About_us</a></li>
		<li><a href="register.html">Register</a></li>
		<li><a href="login.html">Login</a></li>
	</ul>-->
<section class="section row">
<aside class="aside col-md-2" >
	<div class="asside-content">
	<div class="aside-header""><strong style="margin-left: 20px;"> Catagory</strong></div>
	<ul style="list-style: none;">
		<li><a href="#">Mobile Phone</a></li>
		<li><a href="#">Tablet</a></li>
		<li><a href="#">Mobile Accessories</a></li>
		<li><a href="#">Tablet Accessories</a></li>
	</ul>
    </div>
	<div class="asside-content">
	<div class="aside-header"><strong style="margin-left: 20px;"> Shop By Price</strong></div>
	<ul style="list-style: none;">
		<li><a href="#">5000 t0 10000</a></li>
		<li><a href="#">11000 to 19000</a></li>
		<li><a href="#">20000 to 30000</a></li>
	</ul>
    </div>
	<div class="asside-content">
	<div class="aside-header"><strong style="margin-left: 20px;"> Brand</strong></div>
	<ul style="list-style: none;">
		<li><a href="#">Samsung</a></li>
		<li><a href="#">QMobile</a></li>
		<li><a href="#">Apple</a></li>
		<li><a href="#">OPPO</a></li>
		<li><a href="#">Nokia</a></li>
		<li><a href="#">lenovo</a></li>
		<li><a href="#">HTC</a></li>
		<li><a href="#">Infinix</a></li>
	</ul>
    </div>
</aside>
<div class="contentreg col-md-10" >
	<div class="mpimage">
		<div class="mpimageshow">
			<img src="" alt="mobile">
		</div>
     
	</div>
	<div class="aboutmobile">
		<div class="mobileDetail">
			<div class="msame">
			<label>Product Name:</label>
			<p style="float: left;"></p></div>
			<div class="msame">
			<label>Avaibility:</label>
			<p style="float: left;"></p></div>
			<div class="msame">
			<label>Price:</label>
			<p style="float: left;"><strong></strong></p></div>
		</div>
			<div class="mobileAdd">
				<div style="margin-bottom: 10px;">
					<label >Select Color:</label>
				<select value="black" class="colorSelect" style="width: 150px;">
					<option>blue</option>
					<option>red</option>
				</select>
			</div>
                <form>
                	<label>Enter Quantity:</label>
                	<input type="number" name="Mquantity">
                	<input type="submit" name="submit" value="Add to Cart" style="background-color: #fe9c00; color: white;">
                </form>
				
			</div>
	</div>
	
</div>
</section>
</div>
</body>
</html>