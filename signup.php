<?php require "header.php" ?>


<main>
	<div class="form-submit">
		<section>
			<h1>Signup</h1>
			<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="error">Fill in all fields</p>';
					}
					elseif ($_GET['error'] == "invalidmail") {
						echo '<p class="error">Wrong Email Address !</p>';
					}
					else {
					}
				}
				elseif(isset($_GET['signup'])){
					if (($_GET['signup'] == "success")) {
						echo '<p class="success">Your successfully Signed In !</p>';
					}
				}
			?>
			<form action="inc/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="text" name="mail" placeholder="E-mail"><br>
            <input type="Password" name="pwd" placeholder="Password"><br>
            <input type="Password" name="pwd-repeat" placeholder="Repeat Password"><br>
            <button type="submit" name="signup-submit">signup</button><br>    
        	</form>
		</section>
	</div>
</main>

<?php require "footer.php" ?>