<!DOCTYPE html>
<html lang="en">

<head>
  	<title>Profile</title>
  	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">    
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <script src="<?php echo base_url('public/js/jquery-1.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/script.js'); ?>"></script>


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
 
<body id="page5">
<div class="bg">
<!--==============================header=================================-->
    <header>

    	<div class="main" >        	
            <nav>
                <ul class="sf-menu">
                    <li><a href="<?php echo base_url('index.php/Welcome/index'); ?>">company</a></li>
                    <li class="active"><a href="<?php echo base_url('index.php/Welcome/products'); ?>">products</a>
                        <ul>
                            <li><a href="<?php echo base_url('index.php/Welcome/handbill'); ?>">Handbills</a></li>
                            <li><a href="<?php echo base_url('index.php/Welcome/boxes'); ?>">Boxes</a></li>
                            <li><a href="<?php echo base_url('index.php/Welcome/weddingcards'); ?>">Wedding Cards<a></li>
                            <li><a href="<?php echo base_url('index.php/Welcome/stickers'); ?>">Stikers</a></li>  
                        </ul>
                    </li>
                    <li><a href="#">specials</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="<?php echo base_url('index.php/Welcome/creations'); ?>">Creations</a></li>
                    <li><a href="index-6.php">mail</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/signin'); ?>">profile</a></li>
                    <li><a href="#">Payments</a>
                        <ul>
                            <li><a href="<?php echo base_url('index.php/Welcome/adddata'); ?>">Add Payments</a></li>
                            <li><a href="<?php echo base_url('index.php/Welcome/updatedata'); ?>">Update Payments</a></li>
                            <li><a href="<?php echo base_url('index.php/Welcome/deletedata'); ?>">Delete Payments</a></li>
                          </ul>
                    </li>
                </ul>
            </nav>            
            <div class="clear"></div>            
        </div>
        <div class="header-box2">
        	<div class="header-box3">
            <div class="main">           
            	<h1><a class="logo" href="index-2.html">Digital print</a></h1>
                <div class="inner1">
                	<span>Contact Us </span><i><br> +94 702 470 762</i>
                    <strong>our expert Staff Is Standing By to answer your questions</strong>
                </div>                
            </div>
            	<div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="contentnew">
        <div class="main">
            <div class="container_24">
            	<div class="wrapper">
                	<form class="form-horizontal" action="<?php echo base_url('index.php/Login/signup'); ?>" method="post">


    <h3><align ="centre">SIGNUP</h3>

    <div class="form-group">
        <label for="FirstName">First Name :</label>
            <input type="text" class="form-control" name="FirstName" required>

    </div>

    <div class="form-group">
        <label for="LastName">Last Name :</label>
            <input type="text" class="form-control" name="LastName" >
    </div>  

    <div class="form-group">
        <label for="UID">User ID :</label>
            <input type="text" class="form-control" name="UID" minlength="5" required placeholder="minimum of 5 integers" required>
    </div>
    
    <div class="form-group">
        <label for="E-mail">E-mail :</label> 
            <input type="email" class="form-control" name="Email" required>
    </div>

    <div class="form-group">
        <label for="Address">Address :</label>
            <input type="text" class="form-control" name="Address" required>
    </div>
        
    <div class="form-group">
        <label for="Telephone">Telephone Number :</label>
            <input type="text" class="form-control" name="Telephone" maxlength="9" placeholder="ex: 719999999">
    </div>  

    <div class="form-group">
        <label for="Password">Password :</label>
            <input type="password" class="form-control" name="Password" minlength="5" required placeholder="minimum of 5 characters">
    </div>      

    <div class="form-group">
        <label for="ConfirmPassword">Confirm Password :</label>
            <input type="password" class="form-control" name="ConfirmPassword" required>
    </div>      

    <div class="form-group">
        
            <button type="submit" class="btn btn-primary btn-block" name="insert"><span class="glyphicon glyphicon-user"></span>  SIGN UP</button>
        </div>  
    </div>  
</form>
                    <div class="clear"></div>
                    
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        <div class="foot-page1">
        	<span>mahen graphics</span><a href="index-7.html"></a>
            <div class="clear"></div>
        </div>
        <ul class="foot-menu">
                    <li class="first1"><a href="index-2.html">home</a></li>
                    <li><a href="index-1.html">products</a></li>
                    <li><a href="index-3.html">specials</a></li>
                    <li><a href="index-4.html">services</a></li>
                    <li><a href="index-5.html">creations</a></li>
                    <li><a class="active" href="signin2.html">profile</a></li>
                    <li class="last1"><a href="index-6.html">contacts</a></li>
                </ul>
        <div class="clear"></div>        
        </div>
    </footer>
</div>
</body>


</html>
