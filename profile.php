<?php
include 'dbcon/dbcon.php';
include 'head.php';
include 'startsession.php';
	 if(!isset($_SESSION['login_user']))
	{
		include 'loggedOutNav.php';
	}
	else
	{
		include 'loggedInNav.php';
	}

	$username = $_GET['p'];
?>
<body>
	<section class="profile">

		<div class="container">

			<div class="twelve columns">
				<h2><?php echo $username ?></h2>
			</div>
		</div>

		<div class="container">

			<div class="twelve columns">
			<label for="categories">Categories</label>
				<select>
					<option value="#">All</option>
					<option value="#">Landscape</option>
					<option value="#">Highrise</option>
					<option value="#">New York</option>
				</select>

			<label for="Uploaded">Uploaded</label>
				<select>
					<option value="#">All time</option>
					<option value="#">Today</option>
					<option value="#">Last 7 days</option>
				</select>

			</div>
			filtered images here
		</div>
	</section>

</body>
</html>