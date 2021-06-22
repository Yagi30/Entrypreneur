<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>
    <?php include '_header.php'; ?>

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 float-right">
                    <form action="logincode.php" method="post" class="d-flex flex-column shadow float-right">
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" placeholder="e.g: john@email.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
            <div style="height: 40px;"></div>
            <div class="row">
                <div class="col-md-4 col-12"></div>
                <div class="col-md-4 col-12">
                    <div class="panel p-3 shadow">
                        <h2>Find Jobs</h2>
                        <p>Helps passive and active jobseekers find better jobs. Get connected with over 45000
                            recruiters. Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                        <a href="register.php" class="btn border-dark">Register now</a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="panel p-3 shadow">
                        <h2>Looking for the right candidate?</h2>
                        <p>Post a job in easy steps and start receiving applications the same day. Find the right
                            candidates easily and quickly through our Search feature.</p>
                        <a href="register.php" class="btn border-dark">Register your company</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '_footer.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>