<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>
    <?php include '_header.php'; ?>

    <section class="home">
        <h1>Your dream jobs are here</h1>
        <form action="">
            <input type="text" name="search" placeholder="" />
            <button type="submit"><i class="fas fa-search"></i> Search</button>
        </form>
    </section>

    <section class="companies">
        <div class="container d-flex align-items-center flex-column flex-md-row">
            <h5 class="font-weight-bold mr-4">Sponsored by: </h5>
            <div class="d-flex flex-wrap">
                <img src="images/1.gif" alt="company1" />
                <img src="images/2.gif" alt="company2" />
                <img src="images/3.gif" alt="company3" />
                <img src="images/4.gif" alt="company4" />
                <img src="images/5.gif" alt="company5" />
            </div>
        </div>
    </section>

    <hr />

    <section class="about_us py-5 bg-light">
        <div class="container">
            <div class="row py-0 py-md-5">
                <div class="col-md-6 col-12 mb-3">
                    <img src="images/about.jpg" class="img-fluid rounded shadow" alt="meeting">
                </div>
                <div class="col-md-6 col-12 d-flex flex-column justify-content-center about_content pl-5">
                    <h2>About <span>us</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Harum, dolorem. Eos accusantium nam
                        sint, alias in placeat pariatur fugiat, similique saepe.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="featured_jobs">
        <div class="container">
            <h2 class="job_title"><span>Featured</span> Jobs</h2>
            <div class="d-flex flex-column px-2 px-md-5">
                <div class="single_row shadow-sm d-flex my-2">
                    <div><img src="images/6.png" height="90" width="90" /></div>
                    <div class="content">
                        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis, nostrum
                            esse est error.</a>
                        <div class="date_cat_loc my-1">
                            <span><i class="fas fa-calendar-alt"></i> 06-12-2020</span>
                            <span><i class="fas fa-briefcase"></i> Medical/Health</span>
                            <span><i class="fas fa-map-marker-alt"></i> Berlin</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis accusantium
                            sapiente numquam error harum similique. Temporibus cumque nulla magnam, amet, vitae
                            perferendis qui asperiores similique debitis, nostrum eum, illum!</p>
                    </div>
                </div>
                <div class="single_row shadow-sm d-flex my-2">
                    <div><img src="images/6.png" height="90" width="90" /></div>
                    <div class="content">
                        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis, nostrum
                            esse est error.</a>
                        <div class="date_cat_loc my-1">
                            <span><i class="fas fa-calendar-alt"></i> 06-12-2020</span>
                            <span><i class="fas fa-briefcase"></i> Medical/Health</span>
                            <span><i class="fas fa-map-marker-alt"></i> Berlin</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis accusantium
                            sapiente numquam error harum similique. Temporibus cumque nulla magnam, amet, vitae
                            perferendis qui asperiores similique debitis, nostrum eum, illum!</p>
                    </div>
                </div>
                <div class="single_row shadow-sm d-flex my-2">
                    <div><img src="images/6.png" height="90" width="90" /></div>
                    <div class="content">
                        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis, nostrum
                            esse est error.</a>
                        <div class="date_cat_loc my-1">
                            <span><i class="fas fa-calendar-alt"></i> 06-12-2020</span>
                            <span><i class="fas fa-briefcase"></i> Medical/Health</span>
                            <span><i class="fas fa-map-marker-alt"></i> Berlin</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis accusantium
                            sapiente numquam error harum similique. Temporibus cumque nulla magnam, amet, vitae
                            perferendis qui asperiores similique debitis, nostrum eum, illum!</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-4">
                <a href="#" class="btn btn-dark text-white">View more</a>
            </div>
        </div>
    </section>

    <section class="pricing px-4 bg-light">
        <div class="container-fluid text-center">
            <div class="title">
                <h2>Register</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, nulla.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 px-2 px-md-4">
                    <div class="card mt-4">
                        <div class="card-heading bg-warning py-3">
                            <h2>Employers</h2>
                        </div>
                        <div class="card-body py-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio consectetur ut nam
                                architecto laborum eos non veniam nihil voluptates.</p>
                        </div>
                        <div class="card-footer py-4">
                            <h1>$ 0</h1>
                            <a href="signup.php" class="btn btn-primary">Signup</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 px-2 px-md-4">
                    <div class="card mt-4 shadow">
                        <div class="card-heading bg-warning py-3">
                            <h2>Job Seekers</h2>
                        </div>
                        <div class="card-body py-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio consectetur ut nam
                                architecto laborum eos non veniam nihil voluptates.</p>
                        </div>
                        <div class="card-footer py-4">
                            <h1>$ 0</h1>
                            <a href="signup.php" class="btn btn-primary">Signup</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 px-2 px-md-4">
                    <div class="card mt-4">
                        <div class="card-heading bg-warning py-3">
                            <h2>Premium</h2>
                        </div>
                        <div class="card-body py-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio consectetur ut nam
                                architecto laborum eos non veniam nihil voluptates.</p>
                        </div>
                        <div class="card-footer py-4">
                            <h1>$ 0</h1>
                            <a href="signup.php" class="btn btn-primary">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="title text-center">
                <h2>Contact us</h2>
            </div>
            <div class="row px-4">
                <div class="address col-md-6 col-12 d-flex flex-column align-items-start">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <ul class="list-unstyled">
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <span>Bhubaneswar, Odisha, India</span>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <span>+91 230 193 9493</span>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <span>contact@jobportal.com</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Full Name:</label>
                                <input type="email" class="form-control" name="name" id="name"
                                    placeholder="e.g: John Doe" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email: </label>
                                <input type="password" class="form-control" name="email" id="email"
                                    placeholder="john@email.com" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject: </label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <label for="message">Message: </label>
                            <textarea class="form-control" name="message" id="message"
                                placeholder="Type your message here.."
                                style="height: 110px; max-height: 150px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map pt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119743.40927320423!2d85.75041262268228!3d20.301031224027753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1609957009331!5m2!1sen!2sin"
            frameborder="0" style="border:0; width: 100%; height: 320px;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </section>

    <?php include '_footer.php'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>