<?php


session_start();
include 'connection.php';
if(isset($_SESSION['com_name'])) {
  header("location: index.php?access-denied");
}

if(isset($_POST['submit'])){
  
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
  $pass = htmlspecialchars($_POST["password"], ENT_QUOTES);
  $cpass = htmlspecialchars($_POST["con_password"], ENT_QUOTES);
  $com_name = htmlspecialchars($_POST["com_name"], ENT_QUOTES);
  $industry = htmlspecialchars($_POST["industry"], ENT_QUOTES);
  $com_type = htmlspecialchars($_POST["com_type"], ENT_QUOTES);
  $address = htmlspecialchars($_POST["address"], ENT_QUOTES); 
  $con_person = htmlspecialchars($_POST["con_person"], ENT_QUOTES);
  $con_num = htmlspecialchars($_POST["con_number"], ENT_QUOTES);  
  $about = htmlspecialchars($_POST["about"], ENT_QUOTES);  
  

  if($pass == $cpass){
    $hashpassword = md5($pass);
    $check_email = "select * from company where email='$email'";
    $result = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($result) > 0) {
      $_SESSION['errormessage'] = "Signup failed: Email exists!";
      $_SESSION['alert_bg'] = 'alert-warning';
      header("location: index.php?error=email_exist");
      exit();
    } else {
      $query = "INSERT INTO company(company_name,industry,type,email,password,address,con_person,con_num,about) VALUES
	   ('$com_name', '$industry', '$com_type', '$email','$hashpassword','$address','$con_person','$con_num','$about')";
      $data = mysqli_query( $conn,$query);

      if($data) {
        $_SESSION['message'] = "Signup succesfull";
        $_SESSION['alert_bg'] = 'alert-success';
        $_SESSION['com_name'] = $com_name ;
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