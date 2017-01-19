

<?php
echo $this->session->userdata('uid');



$logedin = $this->session->userdata('loggedin');
if ($logedin != true){
    redirect('Welocme/index');
}
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
	<link rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.css'); ?>">   
	<link rel="shortcut icon" href="<?php echo base_url('public/images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <script src="<?php echo base_url('public/js/jquery-1.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/script.js'); ?>"></script>
<style>

form{
    max-width: 500px;
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
 


<form class="form-horizontal" action="<?php echo base_url('index.php/Welcome/changeprof'); ?>" method="post">

    <h3><align ="centre">MY PROFILE</h3>

    <div class="form-group">
        <label for="FirstName">First Name :</label>
            <input type="text" class="form-control" name="FirstName" required value="<?php echo $this->session->userdata('userfname'); ?>" >

    </div>

    <div class="form-group">
        <label for="LastName">Last Name :</label>
            <input type="text" class="form-control" name="LastName" value="<?php echo $this->session->userdata('userlname');?>" >
    </div>  

    <div class="form-group">
        <label for="NIC">User ID :</label>
            <input type="text" class="form-control" name="inputuid" value="<?php echo $this->session->userdata('uid');?>" readonly>
    </div>
    
    <div class="form-group">
        <label for="E-mail">E-mail :</label> 
            <input type="email" class="form-control" name="Email"  value="<?php echo $this->session->userdata('email');?> ">
    </div>

    <div class="form-group">
        <label for="Address">Address :</label>
            <input type="text" class="form-control" name="Address"  value="<?php echo $this->session->userdata('add');?>" >
    </div>
        
    <div class="form-group">
        <label for="Telephone">Telephone Number :</label>
            <input type="text" class="form-control" name="Telephone"  value="<?php echo $this->session->userdata('tel');?>" >
    </div>  
    
    <div class="form-group">
            <br>
            <a href=""><button type="submit" class="btn btn-primary btn-block" name="update"><span class="glyphicon glyphicon-user"></span>  UPDATE</button>
            <br>
</form>
            <form action="<?php echo base_url('index.php/Welcome/deleteprof'); ?>" method="post">  
            <button type="submit" class="btn btn-primary btn-block" name="delete"><span class="glyphicon glyphicon-trash"></span>  DELETE</button>

            </form>
        </div>  
    </div>  


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





