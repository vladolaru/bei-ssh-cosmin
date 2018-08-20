<?include '../model/logout.php';?>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
</head>
<body>

<style>
	.container{
		max-width: 500px;
	}

    .select, .select select {
        width: 100%;
    }
</style>

<section class="hero is-small is-danger is-bold">

	<div class="hero-body ">
		<div class="container">
			<h1 class="title">
				SSH
			</h1>
			<h2 class="subtitle">
				Santa's Secret Helper
			</h2>
		</div>
	</div>
<!--Aici ar trebui sa iau emailul userului, sa il caut in baza de date si sa iau first name-ul -->
	<div class="navbar-item navbar-end">
		<div class="field is grouped">
		<a class="has-text-white">
			Welcome back, <?php echo $_COOKIE['first_name'];?>!
		</a>
		</div>
	</div>

<!--Aici ar trebui sa ii sterg cookie-ul -->

	<div class="navbar">
		<div class="navbar-item">

            <form action="" method="post">

		<button name="logout" class="has-text-black button">
			Logout
		</button>

            </form>

		</div>

		<div class="navbar-item navbar-end">
			<div class="field is-grouped">

				<a href="../view/persons.php" class="control button is-white">Persons</a>

				<a href="roundhistory.php" class="control button is-white">Rounds</a>

			</div>

		</div>

	</div>


</section>
</body>
</html>


