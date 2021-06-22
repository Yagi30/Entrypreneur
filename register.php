<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
	<?php include '_header.php'; ?>

	<section class="register">
		<div class="container">
			<!-- Nav tabs -->
		  <ul class="nav nav-tabs">
		    <li class="nav-item">
		      <a class="nav-link active" href="#findJob">Register & find Jobs</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#companyJob">Register your company</a>
		    </li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content border mb-3">
		    <div id="findJob" class="container tab-pane active"><br>
		      <?php include '_userRegister.php'; ?>
		    </div>
		    <div id="companyJob" class="container tab-pane fade"><br>
		      <?php include '_companyRegister.php'; ?>
		    </div>
			</div>
		</div>
	</section>

	<?php include '_footer.php'; ?>

	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>