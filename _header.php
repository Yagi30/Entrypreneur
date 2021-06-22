<?Php session_start(); ?>

<header class="d-flex align-items-center justify-content-between px-3 px-md-5 py-4">
    <a href="index.php" class="logo">Entrypreneur</a>
    <div class="toggle_menu_icon d-flex d-lg-none"><i class="fas fa-bars"></i></div>
    <nav class="d-none d-lg-flex align-items-center justify-content-between ml-4">
        <div>
            <a href="index.php">Home</a>
            <a href="jobs.php">Recent Jobs</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact us</a>
            <a href="profile.php">Profile</a>
        </div>
        <?php if(isset( $_SESSION['email'])): ?>
        <div>
            <?php include 'connection.php'; ?>
            <?php $c_email =  $_SESSION['email'];
			  $sql = "SELECT `fname`,`lname` from user where email='$c_email'";
			  $query = mysqli_query($conn,$sql);
		    ?>
            <?php if(mysqli_num_rows($query) > 0): ?>
            <?php $row = mysqli_fetch_assoc($query) ?>
            <?php echo '
			
			<p class="own_profile  dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false" id="profiledrop">'.$row['fname']." ".$row['lname'].'</p>
			';
		    ?>
            <?php endif; ?>
            <div class="dropdown-menu" aria-labelledby="profiledrop">
                <a class="dropdown-item" href="logout.php">logout</a>
            </div>
        </div>
        <?php else: ?>
        <div>
            <a href="register.php"><i class="fas fa-user-plus"></i> Register</a>
            <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        </div>
        <?php endif; ?>

    </nav>
</header>
<div class="toggle_menu_div">
    <a href="index.php">Home</a>
    <a href="jobs.php">Recent Jobs</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact us</a>
    <a href="profile.php">Profile</a>
    <div class="user_btn d-flex flex-wrap">
        <a href="register.php"><i class="fas fa-user-plus"></i> Register</a>
        <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
    </div>
</div>