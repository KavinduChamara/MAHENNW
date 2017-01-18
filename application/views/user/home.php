<?php



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cdn.livedemo00.template-help.com:82/wt_40305/more.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 11:52:07 GMT -->
<head>
  	<title>About Freelan Enterprises (Pvt) Ltd</title>
  	<meta charset="utf-8">
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
    max-width: 400px;
    margin: 2% auto;
    padding: 10px 20px;
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
<!--==============================header=================================-->
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

<body id="page5">
<div class="bg">

    <!--==============================content================================-->
    <section id="contentnew">
        <div class="main">
            <div class="container_24">
                <div class="wrapper"> 

    <a href="<?php echo base_url('index.php/Orders/newOrder'); ?>"><button>New order</button></a>
    <a href="<?php echo base_url('index.php/Orders/viewOrder'); ?>"><button>View orders</button></a>
    <a href="<?php echo base_url('index.php/Welcome/viewprofile'); ?>"><button>View profile</button></a>
        <a href="<?php echo base_url('index.php/Welcome/logout'); ?>"><button>Logout</button></a>

<?php echo $this->session->userdata('userfname'). " " .$this->session->userdata('userlname') ; ?>
</body>


</html>
