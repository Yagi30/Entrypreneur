<?php
session_start();
$u_email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal: User Profile</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>
    <?php include '_header.php'; ?>

    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="user_bio bg-light rounded shadow p-4">
                        <div class="profile_pic">
                            <img src="images/team_01.jpg" alt="profile pic" />
                        </div>
                        <div class="user_name_title text-center my-3">
                            <h4>John Doe</h4>
                            <p class="my-2">UI/UX Designer</p>
                        </div>
                        <div class="user_bio text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nulla odio sit repellat
                                quibusdam necessitatibus, nihil fugiat rerum consectetur vel maxime reiciendis corrupti
                                eius, corporis enim illo architecto non illum!</p>
                        </div>
                        <div class="skills py-3">
                            <h3 class="heading">Skills</h3>
                            <div class="d-flex flex-wrap">
                                <span>UI</span>
                                <span>UX</span>
                                <span>Adobe XD</span>
                                <span>Adobe PS</span>
                                <span>Wireframing</span>
                            </div>
                        </div>
                        <div class="add_notes py-3">
                            <h3 class="heading">Add Notes</h3>
                            <form action="#">
                                <div class="d-flex flex-column form_div">
                                    <textarea name="note" placeholder="Add notes for future reference"></textarea>
                                    <button type="submit">Add Note</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="user_info_div">
                        <div class="basic_info bg-light rounded shadow p-4">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <span class="title">Age</span>
                                    <span class="value">28 years</span>
                                </div>
                                <div class="col-md-4 col-12">
                                    <span class="title">Years of experience</span>
                                    <span class="value">6 years</span>
                                </div>
                                <div class="col-md-4 col-12">
                                    <span class="title">Phone</span>
                                    <span class="value">+91 213 456 7890</span>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <span class="title">CTC</span>
                                    <span class="value">12 Lac</span>
                                </div>
                                <div class="col-md-4 col-12">
                                    <span class="title">Location</span>
                                    <span class="value">Ahmedabad, Gujarat</span>
                                </div>
                                <div class="col-md-4 col-12">
                                    <span class="title">Email</span>
                                    <span class="value">john@email.com</span>
                                </div>
                            </div>
                            <br />
                            <a href="resume/resume.pdf" class="btn_fill" download><i class="fas fa-download"></i> &nbsp;
                                Download Resume</a>
                            <a href="#"><i class="fas fa-envelope"></i> &nbsp; Send Email</a>
                        </div>
                        <div class="experience bg-light shadow rounded my-4 p-4">
                            <h3 class="heading">Experience</h3>
                            <div class="exp_row">
                                <div class="exp_logo">
                                    <span>In</span>
                                </div>
                                <div class="exp_company">
                                    <p class="company">Infosys</p>
                                    <p class="job">Product & UI/UX Designer</p>
                                    <p class="exp_date">Apr 2018 - Present | Pune, India</p>
                                </div>
                            </div>
                            <div class="exp_row">
                                <div class="exp_logo">
                                    <span>In</span>
                                </div>
                                <div class="exp_company">
                                    <p class="company">Infosys</p>
                                    <p class="job">Product & UI/UX Designer</p>
                                    <p class="exp_date">Apr 2018 - Present | Pune, India</p>
                                </div>
                            </div>
                            <div class="exp_row">
                                <div class="exp_logo">
                                    <span>In</span>
                                </div>
                                <div class="exp_company">
                                    <p class="company">Infosys</p>
                                    <p class="job">Product & UI/UX Designer</p>
                                    <p class="exp_date">Apr 2018 - Present | Pune, India</p>
                                </div>
                            </div>
                        </div>
                        <div class="education bg-light shadow rounded my-4 p-4">
                            <h3 class="heading">Education</h3>
                            <div class="single_education_div">
                                <h4>Master in Computer Application</h4>
                                <strong>CET, BBSR</strong>
                                <strong>2019 - Present</strong>
                            </div>
                            <div class="single_education_div">
                                <h4>Bachelor in Science</h4>
                                <strong>D.R Nayapalli College, BBSR</strong>
                                <strong>2019 - Present</strong>
                            </div>
                            <div class="single_education_div">
                                <h4>Intermediate Science</h4>
                                <strong>Rajdhani Jr. College, BBSR</strong>
                                <strong>2019 - Present</strong>
                            </div>
                        </div>
                        <div class="certification"></div>
                    </div>
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