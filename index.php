<?php require "header.php" ?>


<main>
	<?php
		if (isset($_SESSION['userId'])) {
			echo '<p class="success">You are logged in !</p>';
		}
		else {
			echo '<p class="error">You are logged out !</p>';
		}
	?>
</main>

<?php require "footer.php" ?>