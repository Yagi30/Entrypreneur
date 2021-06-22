<?php
session_start();
include 'connection.php';
if(isset($_SESSION['email'])) {
  header("location: index.php?access-denied");
}

if(isset($_POST['submit'])){
  $fn = htmlspecialchars($_POST["fname"], ENT_QUOTES);
  $ln = htmlspecialchars($_POST["lname"], ENT_QUOTES);
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
  $pass = htmlspecialchars($_POST["password"], ENT_QUOTES);
  $cpass = htmlspecialchars($_POST["con_password"], ENT_QUOTES);
  $phone = htmlspecialchars($_POST["phone"], ENT_QUOTES);
  $add_one = htmlspecialchars($_POST["address1"], ENT_QUOTES);
  $add_two = htmlspecialchars($_POST["address2"], ENT_QUOTES);
  $city = htmlspecialchars($_POST["city"], ENT_QUOTES);
  $state = htmlspecialchars($_POST["state"], ENT_QUOTES);
  $pincode = htmlspecialchars($_POST["pincode"], ENT_QUOTES); 
  $country = htmlspecialchars($_POST["country"], ENT_QUOTES);
  $exp = htmlspecialchars($_POST["experience"], ENT_QUOTES);  
  $skill = htmlspecialchars($_POST["skills"], ENT_QUOTES);  
  $b_edu = htmlspecialchars($_POST["graduation"], ENT_QUOTES);    
  $m_edu = htmlspecialchars($_POST["master"], ENT_QUOTES);  

  if($pass == $cpass){
    $hashpassword = md5($pass);
    $check_email = "select * from user where email='$email'";
    $result = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($result) > 0) {
      $_SESSION['errormessage'] = "Signup failed: Email exists!";
      $_SESSION['alert_bg'] = 'alert-warning';
      header("location: index.php?error=email_exist");
      exit();
    } else {
      $query = "INSERT INTO user(fname,lname,email,password,phone_no,address1,address2,city,state,pincode,country,experience,skills,basic_edu,master_edu) VALUES
	   ('$fn', '$ln', '$email', '$hashpassword','$phone','$add_one','$add_two','$city','$state','$pincode',' $country','$exp','$skill','$b_edu','$m_edu')";
      $data = mysqli_query( $conn,$query);

      if($data) {
        $_SESSION['message'] = "Signup succesfull";
        $_SESSION['alert_bg'] = 'alert-success';
        $_SESSION['email'] = $email;
        header("location: index.php?status=signup-success");
        exit();
      } else {
        $_SESSION['message'] = "Unable to submit data.";
        $_SESSION['alert_bg'] = 'alert-warning';
        header("location: index.php?error=signup-failed");
        exit();
      }
    }
  } else {
    $_SESSION['message'] = "Confirm password did not matched.";
    $_SESSION['alert_bg'] = 'alert-danger';
    header("location: index.php?error=password-mismatched");
    exit();
  }
}
  
?>