<!------ Php code start---------->
<?php
$conn=mysqli_connect('localhost','root','','arbandatabase');
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

    $query="select * from projecct";
    $result=mysqli_query($conn,$query);

?>
<!------ Php code end ---------->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arban</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!--*************start header**************-->
    <header class="project-detail-header">
        <nav class="navbar navbar-expand-lg custom-nav fixed-top" id="navbar">

            <div class="container-fluid ">
                <a class="navbar-brand" href="/index.html"><img class="logo" src="images/LOGO.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse menu-area" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-capitalize">

                        <li class="nav-item dropdown ">
                            <a class="nav-link " href="project.php" id="navbardrop">
                                Projects
                            </a>
                            <!-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="/project.html"><span class="check">All Project</span></a>
                            <a class="dropdown-item" href="/readyproject.html"><span>Ready Project</span></a>
                            <a class="dropdown-item" href="/ongoingproject.html"><span>Ongoing Project</span> </a>
                            </div> -->
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Media
                            </a>
                            <div class="dropdown-menu slideIn animate">
                                <a class="dropdown-item" href="/blog.html"><span class="check">Blog</span></a>
                                <a class="dropdown-item" href="/virtualtours.html"><span class="check">Virtual Ture</span></a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbardrop">
                                About Us
                            </a>
                            <div class="dropdown-menu slideIn animate">
                                <a class="dropdown-item" href="/aboutus.html"><span class="check">About us</span></a>
                                <a class="dropdown-item" href="/meetourteam.html"><span class="check">Meet Our Team</span></a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactus.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="overlay"> </div>

        <div class="container text-center margin  ">
            <h1 class="heading text-center text-uppercase">Project</h1>
            <h2 class="heading text-center text-uppercase">Marr tower </h2>
        </div>
    </header>

    <!--************end header***************-->
    <!--************start redefine***************-->
    <Section class="redefine-sectin">
        <div class="container redefinepadding">
            <div class="row">
                <div class="col-md-6 repadding">
                    <img src="images/project3.jpg" alt="">
                </div>
                <div class="col-md-6">
                   <div class="redifinedesc">
                    <h1>Demo</h1>
                    <h1>Demo</h1>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                   <div class="redifinedesc1">
                   <h1>Grand Living</h1>
                    <h1>At Its Best</h1>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                   </div>

                </div>
                <div class="col-md-6 repadding">
                    <img src="images/project3.jpg" alt="">
                </div>
            </div>
        </div>
    </Section>
    <section class="features-img">
        <!-- <img src="images/project4.jpg" alt=""> -->
    </section>
    <!--************end redefine***************-->
    <!--************start galary***************-->
    <section class="galary-section">
        <div class="container redefinepadding">
            <h1 class="text-center">Galary</h1>
            <div class="row">
                <div class="col-md-4 galarypadding">
                    <img src="images/project1.jpg" alt="">
                </div>
                <div class="col-md-4 galarypadding">
                    <img src="images/project2.jpg" alt="">
                </div>
                <div class="col-md-4 galarypadding">
                    <img src="images/project3.jpg" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 galarypadding">
                    <img src="images/project1.jpg" alt="">
                </div>
                <div class="col-md-4 galarypadding">
                    <img src="images/project2.jpg" alt="">
                </div>
                <div class="col-md-4 galarypadding">
                    <img src="images/project3.jpg" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 galarypadding">
                    <img src="images/project1.jpg" alt="">
                </div>
                <div class="col-md-4 galarypadding">
                    <img src="images/project2.jpg" alt="">
                </div>
                <div class="col-md-4 galarypadding">
                    <img src="images/project3.jpg" alt="">
                </div>

            </div>
        </div>
    </section>
    <!--************end galary***************-->
    <!--************start pricing***************-->
    <section class="pricing-section">
        <div class="container redefinepadding">
            <div class="row">
                <div class="col-md-4">
                   <div class="pricing">
                   <div class="hradd">
                   <h1>Price & Size Structure</h1>
                   </div>
                    <div class="price-detail">
                        <h2>1 Bed Apartments</h2>
                        <h3><span>></span>770 Sq.Ft <span>></span>from AED</h3>
                        <h2>1 Bed Apartments</h2>
                        <h3><span>></span>770 Sq.Ft <span>></span>from AED</h3>
                        <h2>1 Bed Apartments</h2>
                        <h3><span>></span>770 Sq.Ft <span>></span>from AED</h3>
                    </div>
                   </div>
                </div>
                <div class="col-md-4 mt-2">
                  <div class="payment">
                  <h1 >Payment Plan</h1>
                    <div class="payment-detail">
                        <h3>10% upon Bookig </h2>
                        <h3>40% Under Construction </h2>
                        <h3>50% upon HandOver </h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                   <div class="pricing">
                   <div class="hradd">
                   <h1>Price & Size Structure</h1>
                   </div>
                    <div class="price-detail">
                        <h2>1 Bed Apartments</h2>
                        <h3><span>></span>770 Sq.Ft <span>></span>from AED</h3>
                        <h2>1 Bed Apartments</h2>
                        <h3><span>></span>770 Sq.Ft <span>></span>from AED</h3>
                        <h2>1 Bed Apartments</h2>
                        <h3><span>></span>770 Sq.Ft <span>></span>from AED</h3>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!--************end pricing***************-->
    <!--************start section5***************-->
    <section class="section5">
        <div class="container-fluid footer-body">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="footer-body1">
                        <h3>Homes 4 Life Real Estate Broker LLC</h3>
                        <p>Striving for excellence, Homes 4 Life maintains the flexibility to adapt our business to the main needs of our valued clients in the evolving Real Estate marketplace. The highly qualified and professional teams of managers and sales consultants at Homes 4 Life are expertly trained to locate for you the right property that meets your expectations.</p>
                    </div>

                    <ul class="social-icon">
                        <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" class="tit"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="" class="inst"><i class="fab fa-instagram"></i></a></li>
                    </ul>

                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <h3>Important Links</h3>
                    <ul class="footer-body2">
                        <li><a href="">Carrer</a></li>
                        <li><a href="">Properties for Sale</a></li>
                        <li><a href="">Properties for Rent</a></li>
                        <li><a href="">List your Property</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <h3>Get in touch</h3>
                    <ul class="footer-body3">
                        <li><p>Office 25, Oasis Center, Sheikh Zayed Road, Dubai PO Box 34542</p></li>
                        <li><a href="">+971 4 3387300</a></li>
                        <li><a href="">info@homes4life.ae</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container-fluid "><p class="footer-p">© 2019 All Rights Reserved to Homes 4 Life Real Estate Broker LLC</p></div>
        </div>
    </section>
    <!--************end section5***************-->
    <div class="visibleafterscrollmsg" id="visibleafterscrollmsg">
        <div class="show-pop-messege">
            <div class="getintouchform padding-msg">
                <h1>
                    Contact Us
                </h1>
                <p>Use the form below to contact us!</p>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Requirement">
                    </div>
                    <button class="send">SEND</button>
                </form>
            </div>
        </div>
        <div class="show-pop-messege-icon"><i class="fas fa-caret-down fa-3x"></i></div>
    </div>
    <ul class="visibleafterscroll" id="scroll-top">

        <li><a href="" class="message" id="msgFunction"><i class="far fa-bold fa-lg fa-envelope"></i></a></li>
        <li><a href="" class="to-top" id="topFunction"><i class="fas fa-lg fa-chevron-up"></i></a></li>
    </ul>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bccc7b239b.js" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/ Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">  </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <footer></footer>
</body>
</html>
