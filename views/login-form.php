<?php foreach($data['errors'] as $err){ ?>
	<div class="error"><?php echo $err; ?></div>
<?php } ?>

<form method="post" action="login.php">
	Username<br>
	<input type="text" name="username">
	
	<br><br>
	Password<br>
	<input type="password" name="password">
	
	<br>
	<input type="submit" name="login" value="Sign in">
</form>

<style>
	.error{ 
	    border: solid 1px red;
	    color: red;
	    background-color: yellow;
	    font-size: 20px;
	 }
</style>