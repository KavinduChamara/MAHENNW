<!DOCTYPE html>
<html lang="en">


<head>
  	<title>Boxes</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="<?php echo base_url('public/images/favicon.ico'); ?>" type="image/x-icon">    
	<link rel="shortcut icon" href="<?php echo base_url('public/images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <script src="<?php echo base_url('public/js/jquery-1.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/script.js'); ?>"></script>
</head>

<body id="page6">
<div class="bg">
<!--==============================header=================================-->
    <header>
    	<div class="main">        	
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
            	<h1><a class="logo" href="index-2.php">Digital print</a></h1>
                <div class="inner1">
                	<span>Call Us</span><i>&nbsp; +94 702 470 762</i>
                    <strong>our expert Staff Is Standing By to answer your questions</strong>
                </div>                
            </div>
            	<div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container_24" style="margin-left:20%">
                	
                    <article class="grid_8 push_1" >
                    <h2 align="center">Add Payments</h2>

               <script>

                                  function validateForm() {
                      var x = document.forms["insertform"]["cname"].value;
                          if (x == null || x == "") {
                             alert("Name must be filled out");
                             return false;
                      }
                     
                      var x = document.forms["insertform"]["cnic"].value;
                          if (x == null || x == "") {
                             alert("NIC must be filled out");
                             return false;
                      }
                      
                      var x = document.forms["insertform"]["pammount"].value;
                          if (x == null || x == "") {
                             alert("Ammount must be filled out");
                             return false;
                      }
                      
                      var x = document.forms["insertform"]["recno"].value;
                          if (x == null || x == "") {
                             alert("Receipt number must be filled out");
                             return false;
                      }
                      
                      
                      var x = document.forms["insertform"]["ctelno"].value;
                          if (x == null || x == "") {
                             alert("Telephone number must be filled out");
                             return false;
                      }
                          
                   }


                 </script>

                   <div class="container"   style="margin-left:-5%;">  
                          <form  action="datainsertbackend.php" method="post" name="insertform" onsubmit = "return validateForm()">
  
                       <fieldset>

                         <input type="text" placeholder="Customer Name" name="cname" style = "width:500px;height:30px;"/>
    
    
                         <input type="text" placeholder="Customer NIC" name="cnic" style = "width:500px;height:30px; margin-top:5px;"/>
    
  
                         <input type="text" placeholder="Paid Ammount" name="pammount"  style = "width:500px;height:30px; margin-top:5px;"/>
  
  
                         <input type="text" placeholder="Receipt Number" name="recno"  style = "width:500px;height:30px; margin-top:5px;"/>

   
                         <input type="text" placeholder="Telephone Number" name="ctelno"  style = "width:500px;height:30px; margin-top:5px;"/>
    
    
                         <input type="submit" name="insertbutton" value="ADD DATA" onclick='letters(inputtxt1);' style = "width:505px;height:30px; margin-top:5px; background-color:#1475ff"/>
  
             </form>
        </div>

                              
                              											
                                    
                    
                    </article>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        <div class="foot-page1">
        	<span>Mahen Graphics</span>
            <div class="clear"></div>
        </div>
        <ul class="foot-menu">
                    <li class="first1"><a href="index-2.php">company</a></li>
                    <li><a href="index-1.php">products</a></li>
                    <li><a href="index-3.php">specials</a></li>
                    <li><a href="index-4.php">services</a></li>
                    <li><a href="index-5.php">gallery</a></li>
                    <li class="last1"><a class="active" href="index-6.php">contacts</a></li>
                </ul>
        <div class="clear"></div>        
        </div>
    </footer>
</div>
</body>

</html>