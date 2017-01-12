<!DOCTYPE html>
<html>


<body>
<div style=" margin-left:20%; margin-top: 6%; border: solid; width:30%; background-color: #ccdef9; " >
<form action="<?php echo base_url('index.php/Login/signin'); ?>" method="post">

	<label >User ID :</label>
		<input type="text" name="inputuid">
	<label >Password :</label>
		<input type="text" name="inputpwrd">
	<button type="submit">Login</button>
	

</form>
<div>
	<br>
	<a href="signup.php"><button>Signup</button></a>
</div>
</div>
</body>
</html>