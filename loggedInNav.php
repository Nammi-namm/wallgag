<section class="navigation">

	<div class="container">

	<div class="row">
		
		<nav class="twelve columns nav">
			
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="popular.php">Popular</a>
				</li>
				
				<li>
					<a href="random.php">Random</a>
				</li>

				<li>
					<a href="profile.php?p=<?php echo $_SESSION['login_user']; ?>">My profile</a>
				</li>

				<li>
					<a href="logout.php" class="logout">Log out</a>
				</li>
			</ul>
		</nav>
	</div>
	</div>
</section>
