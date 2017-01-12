<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>New Print Order</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css.map" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
  </head>
  
  <body>
  <div class="row">
	<div class="col-xs-12">
	<form class="form-horizontal" action="<?php base_url('index.php/Orders/makeNeworder'); ?>">
	<fieldset>

	<div class="col-xs-12 text-center">
	<legend>New Printing Order</legend>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="buttondropdown">Media Type</label>
	  <div class="col-md-4">
		<div class="input-group">
		  <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Media Type" type="text">
		  <div class="input-group-btn">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			  Select
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu pull-right">
			  <li><a href="#">type1</a></li>
			  <li><a href="#">type2</a></li>
			  <li><a href="#">type3</a></li>
			  <li><a href="#">type4</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="buttondropdown">Size</label>
	  <div class="col-md-4">
		<div class="input-group">
		  <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Size" type="text">
		  <div class="input-group-btn">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			  Select
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu pull-right">
			  <li><a href="#">size1</a></li>
			  <li><a href="#">size2</a></li>
			  <li><a href="#">size3</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="buttondropdown">Laminating</label>
	  <div class="col-md-4">
		<div class="input-group">
		  <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Laminating" type="text">
		  <div class="input-group-btn">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			  Select
			  <span class="caret"></span>
			</button>
			<ul class="dropdown-menu pull-right">
			  <li><a href="#">Gloss</a></li>
			  <li><a href="#">Matte</a></li>
			  <li><a href="#">None</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="finishing">Finishing</label>  
	  <div class="col-md-4">
	  <input id="finishing" name="finishing" type="text" placeholder="Finishing" class="form-control input-md">
		
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="comments">Comments</label>
	  <div class="col-md-4">                     
		<textarea class="form-control" id="comments" name="comments"></textarea>
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="delivery">Delivery</label>
	  <div class="col-md-4"> 
		<label class="radio-inline" for="delivery-0">
		  <input type="radio" name="delivery" id="delivery-0" value="" checked="checked">
		  UPS
		</label> 
		<label class="radio-inline" for="delivery-1">
		  <input type="radio" name="delivery" id="delivery-1" value="">
		  Pickup
		</label>
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="file">Upload File</label>
	  <div class="col-md-4">
		<input id="file" name="file" class="input-file" type="file">
	  </div>
	</div>

	
	<div class="form-group">
	  <label class="col-md-4 control-label" for="submit"></label>
	  <div class="col-md-8">
		
		<button id="clear" name="clear" class="btn btn-warning">Clear Form</button>
		<button id="submit" name="submit" class="btn btn-primary onclick="window.location.href = 'version/application/views/welcome_message.php'">Submit Order</button>
	  </div>
	</div>

	</fieldset>
	</form>
	</div>
</div>

<script>
            function sign_up() {

                first_name = $('#first_name').val();
                last_name = $('#last_name').val();
                email = $('#email').val();
                password = $('#password').val();
                confirm_password = $('#confirm_password').val();

                if (password === confirm_password) {

                    $.ajax({
                        type: "post",
                        url: '<?= base_url(); ?>index.php/admin/sign_up/add_user',
                        data: {
                            first_name: first_name,
                            last_name: last_name,
                            email: email,
                            password: password
                        },
                        success: function (msg) {
                            window.location.href = '<?php echo site_url('admin/home') ?>';
                        },
                        error: function (error) {
                            alert(error);
                        }
                    });
                } else {
                    alert("Passwords do not match");

                }

            }

        </script>
 
	
</body>

<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.npm.js"></script>

</html>
