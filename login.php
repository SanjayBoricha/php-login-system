<?php require "header.php" ?>


<main>
<div class="form-login">
    <h1>Login</h1>
	<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "wrongpassword" ) {
				echo '<p class="error">Wrong Password !</p>';
			}
			elseif ($_GET['error'] == "emptyfields") {
				echo '<p class="error">Fill in all fields !</p>';
			}
		}
	?>
<form action="inc/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Username/E-mail...."><br>
    <input type="Password" name="pwd" placeholder="Password..."><br>
    <button type="submit" name="login-submit">Login</button>   
</form>
</div>
</main>
<?php require "footer.php" ?>