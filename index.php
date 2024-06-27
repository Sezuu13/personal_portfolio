<?php 
session_start();
require_once "admin/db.php";
?>

<!doctype html>
<html class="no-js" lang="en">


<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Seth Andrei Dimaano Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="front_end_assets/img/favicon.png">
        
        <link rel="stylesheet" href="front_end_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="front_end_assets/css/animate.min.css">
        <link rel="stylesheet" href="front_end_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="front_end_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="front_end_assets/css/flaticon.css">
        <link rel="stylesheet" href="front_end_assets/css/slick.css">
        <link rel="stylesheet" href="front_end_assets/css/aos.css">
        <link rel="stylesheet" href="front_end_assets/css/default.css">
        <link rel="stylesheet" href="front_end_assets/css/style.css">
        <link rel="stylesheet" href="front_end_assets/css/responsive.css">
    </head>
    <body class="theme-bg">

        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

                <?php 
                  $information_query = $dbcon->query("SELECT * FROM contact_information");
                  $contact_information = $information_query->fetch_assoc();
                ?>


                <?php 
                  $about_me_query = $dbcon->query("SELECT * FROM about_me");
                  $about_me = $about_me_query -> fetch_assoc();

                ?>

        </header>
        
        <main>
              
           
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6>HELLO!</h6>
                                <h2>I am <?=$about_me['name']?></h2>
                                <p><?=$about_me['intro']?></p>
                                    <ul>
                                        <li><a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=$about_me['twitter_link']?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?=$about_me['linkedin_link']?>"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="admin/image/profile/<?=$about_me['photo']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </section>
        
<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    <h2>About Myself</h2>
                </div>
                <div class="about-content">
                    <p><?=$about_me['details']?></p>
                </div>
                <div class="section-title mb-25">
                    <h3>Education and School:</h3>
                </div>

                <?php 
                $education_query = $dbcon->query("SELECT * FROM education_informations");
                foreach ($education_query as $education) {
                ?>

                <div class="education">
                    <div class="year"><?=$education['year']?></div>
                    <div class="line"></div>
                    <div class="location">
                        <span><?=$education['degree_name']?></span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>

            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$contact_information['small_text']?></p>
                                <h5>Place: <span><?=$contact_information['office']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$contact_information['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$contact_information['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$contact_information['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="guest_message.php" method="post">


                                  <?php if(isset($_SESSION['guest_message_error'])) { ?>
                                    <div class="alert alert-danger">
                                      <?=$_SESSION['guest_message_error']?>
                                    </div>
                                  <?php }

                                  unset($_SESSION['guest_message_error']);
                                  ?>

                                  <?php if(isset($_SESSION['message_send'])) { ?>
                                    <div class="alert alert-success">
                                      <?=$_SESSION['message_send']?>
                                    </div>
                                  <?php }

                                  unset($_SESSION['message_send']);
                                  ?>

                                    <input type="text" placeholder="your name *" name='guest_name'>
                                    <input type="email" placeholder="your email *" name='guest_email'>
                                    <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">Send Email</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        
        <script src="front_end_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="front_end_assets/js/popper.min.js"></script>
        <script src="front_end_assets/js/bootstrap.min.js"></script>
        <script src="front_end_assets/js/isotope.pkgd.min.js"></script>
        <script src="front_end_assets/js/one-page-nav-min.js"></script>
        <script src="front_end_assets/js/slick.min.js"></script>
        <script src="front_end_assets/js/ajax-form.js"></script>
        <script src="front_end_assets/js/wow.min.js"></script>
        <script src="front_end_assets/js/aos.js"></script>
        <script src="front_end_assets/js/jquery.waypoints.min.js"></script>
        <script src="front_end_assets/js/jquery.counterup.min.js"></script>
        <script src="front_end_assets/js/jquery.scrollUp.min.js"></script>
        <script src="front_end_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="front_end_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="front_end_assets/js/plugins.js"></script>
        <script src="front_end_assets/js/main.js"></script>
    </body>

</html>
