
<!DOCTYPE html>
<html lang="en">


<head>
  	<title>SIGNIN</title>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.css'); ?>">
  	<link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="<?php echo base_url('public/images/favicon.ico'); ?>" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url('public/images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <script src="<?php echo base_url('public/js/jquery-1.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/script.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.css'); ?>">
<style>

form{
    max-width: 500px;
    margin: 2% auto;
    padding: 10px 30px;
    background: #e4f0ff;
    border-radius: 20px;
}
label{
    display: block;
    margin-bottom: 8px;
}

</style>


</head>
<body id="page7">
<div class="bg">

    <header>
    	<div class="main">
            <nav>
                <ul class="sf-menu">
                    <li><a href="index-2.html">company</a></li>
                    <li><a href="index-1.html">products</a>
                    	<ul>
                            <li><a href="more.html">Catalog Printing</a></li>
                            <li><a href="more.html">Pad Printing</a></li>
                            <li><a href="more.html">Label Printing</a></li>
                            <li><a href="more.html">Envelope Printing</a>
                            	<ul>
                                    <li><a href="more.html">Key Applications</a></li>
                                    <li><a href="more.html">Information Request Form</a></li>
                                </ul>
                            </li>
                            <li><a href="more.html">Business Card Printing</a></li>
                            <li><a href="more.html">Flyer Printing</a></li>
                            <li><a href="more.html">Check Printing</a></li>
                            <li><a href="more.html#">Post Card Printing</a></li>
                        </ul>
                    </li>
                    <li><a href="index-3.html">specials</a></li>
                    <li><a href="index-4.html">services</a></li>
                    <li class="active"><a href="index-5.html">creations</a></li>
                    <li><a href="index-6.html">mail</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="header-box2">
        	<div class="header-box3">
            <div class="main">
            	<h1><a class="logo" href="index-2.html">Digital print</a></h1>
                <div class="inner1">
                	<span>Contact Us</span><i><br> +94 702 470 762</i>
                    <strong>our expert Staff Is Standing By to answer your questions</strong>
                </div>
            </div>
            	<div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </header>

<section class="container">

    <div class="login">

    <section id="contentnew">
        <div class="main">
            <div class="container_24">
                <div class="wrapper">

    <!--<div style=" margin-left:10%; margin-top: 6%; border: solid; width:60%; background-color: #ccdef9; " >-->
<form class="form-horizontal" action="<?php echo base_url('index.php/Login/signin'); ?>" method="post">
<h3><align ="centre">SIGIN</h3>
<div class="form-group">
	<label >User ID :</label>
		<input type="text" name="inputuid">
		</div>

		<div class="form-group">
	<label >Password :</label>
		<input type="password" name="inputpwrd">
		</div>
		<div class="form-group">
	<button type="submit">Login</button>
	</div>

</form>
<div>
	<br>
	<a href="signup"><button>Signup</button></a>
</div>
</div>
</div>
</section>
</body>


</html>



