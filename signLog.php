<?php include 'head.php'; ?>
<body>
<?php include 'loggedOutNav.php'; ?>
<section class="">

	<div class="container">

		<div class="row">
			<h2>Log in or sign up if you don't have an account</h2>
		</div>
	</div> 
</section>

<section class="register/login">

	<div class="container">

		<div class="row">
			<div class="six columns">
				<form action="login.php" method="POST">
					<label for="username">Username</label>
					<input class="u-full-width" type="text" id="username" name="username">

					<label for="password">Password</label>
					<input class="u-full-width" type="password" id="password" name="password">
					<input type="submit" class="buttonn" name="submit" value="Login">
				</form>
			</div>

			<div class="six columns whitespace">
				<form action="register.php" method="POST">
					<label for="username">Username</label>
					<input class="u-full-width" type="text" id="username" name="username">

					<label for="email">Email</label>
					<input class="u-full-width" type="email" id="email" name="email">

					<label for="password">Password</label>
					<input class="u-full-width" type="password" id="password" name="password">

					<label for="password">Retype-password</label>
					<input class="u-full-width" type="password" id="retype-password" name="retype-password">
					<label for="select">How did you learn about this website?</label>
					<select>
					  <option value="">A friend told me</option>
					  <option value="saab">Google</option>
					  <option value="mercedes">Another</option>
					</select><br>
					<input type="submit" class="buttonn" name="submit" value="sign up">
				</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>