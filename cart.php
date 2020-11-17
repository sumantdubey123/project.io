<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="http://localhost/project/jquery-3.5.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light sticky-top bg-white  ">
		<div class="container-fluid">
		<a href="" class="navbar-brand text-white"><img src="project img/logo.png"></a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="nav">	
		<ul class="navbar-nav text-center ml-auto py-4">
			<li class="nav-item text-center mr-3 ">
				<a href=" index.php" class="nav-link text-black font-weight-bold">Home</a>
             </li>
             <li class="nav-item mr-3">
				<a href="about.php" class="nav-link text-black font-weight-bold">About Us</a>
            </li>
			<li class="nav-item mr3 dropdown">
            <a href="" class="nav-link text-black font-weight-bold dropdown-toggle" data-toggle="dropdown">Fashion</a>
              

              <ul class="dropdown-menu">
              	<li><a href="" class="dropdown-item text-center">Winter Collection</a></li>
              	<li><a href="" class="dropdown-item text-center">Summer Collection</a></li>
              	<li><a href="" class="dropdown-item text-center">Zara Brand</a></li>
              </ul>
			</li>
			<li class="nav-item mr3">
				<a href="cart.php" class="nav-link text-black font-weight-bold">Cart</a>
			</li>
			<li class="nav-item mr-3">
				<a href="blog.php" class="nav-link text-black font-weight-bold">Blog</a>
			</li>
			 <form class="form-inline bg " method="POST">
      <input class="form-control mr-sm-2 cmssearch" type="search" placeholder="Search" aria-label="Search">
      <button  class="btn btn-outline-dark my-1 my-sm-0 text-center" type="button">Search</button></form>
    <a class="btn btn-primary my-1 my-sm-0 text-center font-weight-bold text-white"href="login.php">Sign Up</a>
    </ul>
	</div>
	</div>
	</nav>
	<div style="background-image: url('project img/about9.jpg');

    min-height: 300px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover" >
    	
    </div>
<div class="product">
	<h2 class="text-center" style=" margin-top:-150px; text-align:center;">Cart</h2>
</div>

 <div style="margin-top:250px; " class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr class="m-4">
                <th  scope="col">Product</th>
                <th style="padding-left:45px;" scope="col">Price</th>
                <th style="padding-left:45px;" scope="col">Quantity</th>
                <th style="padding-left:45px;" scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img class="img-fluid" style="max-width:150px; " src="project img/cart2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5 style="margin:40px; ">$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input style="margin:40px; " class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5 style="margin:40px; ">$720.00</h5>
                </td>
              </tr>
              <tr>
                <td class="mt-2">
                  <div class="media mt-2">
                    <div class="d-flex">
                      <img style="max-width:150px; border:1px solid #fff; border-radius:3px;  " src="project img/cart1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5 style="margin:40px; ">$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input style="margin:40px; " class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5 style="margin: 40px;">$720.00</h5>
                </td>
              </tr>
              <tr class="bottom_button">
                <td>
                  <a style="border-radius:2px; " class=" btn_1 btn-primary" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5 style="margin-left:200px; font-family:Poppins, sans-serif; ">Subtotal</h5>
                </td>
                <td>
                  <h5 style="margin-left:120px;">$2160.00</h5>
                </td>
              </tr>
              <tr class="shipping_area ">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul style="list-style-type:none; " class="list">
                      <li style="margin:10px;     color: #828bb2; ">
                        Flat Rate: $5.00
                        <input  type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li style="margin:10px;     color: #828bb2; ">
                        Free Shipping
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li style="margin:10px;     color: #828bb2; ">
                        Flat Rate: $10.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li  >
                      <li style="margin: 10px;color: #828bb2;" class="active">
                        Local Delivery: $2.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                    </ul>
                    <h6 style="color: #415094;
    font-family:Playfair Display, serif; margin-left:60px; ">
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select mt-3">
                      <option value="1">New York</option>
                      <option value="2">India</option>
                      <option value="4">America</option>
                    </select>
                    <select class="shipping_select section_bg ml-3">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select>
                    <input class="post_code mt-3" type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1 mt-2" href="#">Update Details</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="#">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </div>
  <div style="margin-top:150px; " class="container">
	<div class="row">
		<div class="col-md-3">
			<a href="" class="navbar-brand text-white"><img src="project img/logo.png"></a>
			<p style="margin-top:30px;color: #868c98;font-size: 16px;
    margin-bottom: 50px;
    line-height: 1.8; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
		</div>
		<div class="col-md-3">
			<h4 style="font-family: Poppins, sans-serif;margin-bottom: 29px;margin-left:40px;">Quick Link</h4>
			<ul style="list-style-type:none ">
                                   <li style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">About</a></li>
                                   <li style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#"> Offers & Discounts</a></li>
                                   <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#"> Get Coupon</a></li>
                                   <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">  Contact Us</a></li>
             </ul>
		</div>
		<div class="col-md-3">
			<h4 style="font-family: Poppins, sans-serif;margin-bottom: 29px; margin-left:40px;">New Products</h4>
			<ul style="list-style-type:none; ">
                                   <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">Woman Cloth</a></li>
                                   <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">Fashion Accessories</a></li>
                                   <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#"> Man Accessories</a></li>
                                   <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#"> Rubber made Toys</a></li>
             </ul>
		</div>
		<div class="col-md-3">
			<h4 style="font-family: Poppins, sans-serif;margin-bottom: 29px; margin-left:40px; ">Support</h4>
			 <ul style="list-style-type: none;">
                         <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">Frequently Asked Questions</a></li>
                         <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">Terms & Conditions</a></li>
                         <li style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;"href="#">Privacy Policy</a></li>
                         <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">Privacy Policy</a></li>
                          <li  style="color: #012f5f;margin-bottom: 15px;"><a style="color:#868c98;" href="#">Report a Payment Issue</a></li>
               </ul>
		</div>
	</div>
</div>
<div style="margin-top:60px;" class="container">
	<div class="row">
		<div class="col-md-7">
			<p style="margin-top:30px;color: #868c98;font-size: 16px;
    margin-bottom: 50px;
    line-height: 1.8;">Copyright ©2020 All rights reserved | This template is made   by Sumant</p>
		</div>
		<div class="col-md-5">
			<div style="margin-left:240px; margin-top:20px;">
		<a style="margin-top:30px; margin:10px" href=""><i class="fa fa-behance text-primary mr-2"></i></a>
	    <a style="margin-top:30px; margin:10px" href=""><i class="fa fa-linkedin text-primary mr-2"></i></a>
		<a style="margin-top:30px; margin:10px" href=""><i class="fa fa-facebook text-primary mr-2"></i></a>
		<a style="margin-top:30px; margin:10px" href=""><i class="fa fa-twitter text-primary mr-2"></i></a>
		</div>
	</div>
</div>
</div>	
</body>
<style type="text/css">
	.cart_inner .table thead tr th {
    border-top: 0px;
    font-size: 14px;
    font-weight: 500;
    font-family: "Playfair Display", serif;
    color: #828bb2;
    border-bottom: 0px !important;
}
.cart_inner .table tbody tr td .media .d-flex img {
    border: 1px solid #eeeeee;
    border-radius: 3px;
    max-width: 150px;
}
p {
    font-family: "Poppins", sans-serif;
    color: #506172;
    font-size: 16px;
    line-height: 30px;
    margin-bottom: 15px;
    font-weight: normal;
	margin:40px;}
	h5{
	 font-family: "Poppins", sans-serif;
    color: #506172;
    font-size: 16px;
    line-height: 30px;
    margin-bottom: 15px;
    font-weight: normal;
		
	}
	.cart_area .btn_1 {
    border: 1px solid transparent;
}
.btn_1 {
    display: inline-block;
    padding: 17px 50px;
    border-radius: 5px;
    background-color: #2577fd;
    border: 2px solid #2577fd;
    font-size: 15px;
    font-weight: 500;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    text-transform: capitalize;
    color: #fff;
}

	</style>
</html>