<!-- ************** Including Navbar ************** -->
<?php include_once('./Partials/header.php');?>

<!-- Start Video Background -->
<div class="container-fluid remove-video-margin">
    <div class="video-parent">
        <video playsinline autoplay muted loop>
            <source src="videos/videos-A.mp4">

        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-content">
        <h1 class="my-content">Welcome to eSchool</h1>
        <small class="my-content">Learn and Implement</small><br>
        <?php 
        if(isset($_SESSION['isLogin'])){
            echo'
            <a href="#" class="btn btn-success mt-3 my">My Profile</a>
            ';
        }else{
            echo'
            <a data-toggle="modal" data-target="#SignUpModal" class="btn btn-danger mt-3 my">Get Started</a>
            ';
        }
        ?>
       
    </div>
</div>
<!-- End Video Background -->

<!-- Start Text-Banner -->
<div class="container-fluid bg-danger text-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa fa-book-open mr-3"></i>100+ Online Courses</h5>
        </div>

        <div class="col-sm">
            <h5><i class="fas fa fa-users mr-3"></i>Experts Instructor</h5>
        </div>

        <div class="col-sm">
            <h5><i class="fas fa fa-keyboard mr-3"></i>Lifetime Access</h5>
        </div>

        <div class="col-sm">
            <h5><i class="fas fa fa-dollar mr-3"></i>Money Back Gurantee*</h5>
        </div>
    </div>
</div>
<!-- End Text-Banner -->

<!-- Start Popular Courses -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <!-- Start Popular Course 1st Card Deck -->
    <div class="card-deck mt-4">
        <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/linux.jpg" alt="" class="card-img-top" alt="AAA">
                <div class="card-body">
                    <h5 class="card-title">Linux for Begineer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                            class="font-weight-bolder"><a href="./course_deatils.php"
                                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                    </p>
                </div>
            </div>
        </a>

        <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/linux.jpg" alt="" class="card-img-top" alt="AAA">
                <div class="card-body">
                    <h5 class="card-title">Linux for Begineer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                            class="font-weight-bolder"><a href=""
                                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                    </p>
                </div>
            </div>
        </a>

        <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/linux.jpg" alt="" class="card-img-top" alt="AAA">
                <div class="card-body">
                    <h5 class="card-title">Linux for Begineer</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                            class="font-weight-bolder"><a href=""
                                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                    </p>
                </div>
            </div>
        </a>

    </div>
    <!-- End Popular Course 1st Card Dec -->

    <!-- Start Popular Course 2nd Card Deck -->
    <div class="card-deck mt-4">
        <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/wserver.png" alt="" class="card-img-top" alt="AAA">
                <div class="card-body">
                    <h5 class="card-title">Windows Server Management</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                            class="font-weight-bolder"><a href=""
                                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                    </p>
                </div>
            </div>
        </a>


        <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/wserver.png" alt="" class="card-img-top" alt="AAA">
                <div class="card-body">
                    <h5 class="card-title">Windows Server Management</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                            class="font-weight-bolder"><a href=""
                                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                    </p>
                </div>
            </div>
        </a>

        <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/wserver.png" alt="" class="card-img-top" alt="AAA">
                <div class="card-body">
                    <h5 class="card-title">Windows Server Management</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, atque?
                    </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>&#36 2000</del></small><span
                            class="font-weight-bolder"><a href=""
                                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a></span>
                    </p>
                </div>
            </div>
        </a>
    </div>
    <!-- End Popular Course 2nd Card Dec -->
    <div class="text-center m-2">
        <a href="" class="btn btn-danger btn-sm">View All Course</a>
    </div>
</div>
<!-- End Popular Courses -->

<!--*********** Including Contact us ***********  -->
<?php include_once('./contact.php');?>

<!-- Start Feedback -->
<div class="container-fluid mt-5" style="background-color: #f5e8eb;" id="feedback">
    <h1 class="text-center p-4">Students Feedback</h1>
    <div class="row owl-carousel owl-theme">
        <div class="col-md-12 ml-5 mb-5">
            <div class="card" style="width: 18rem;">
                <img src="images/linux.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <h5 class="card-title">Name</h5>
                    <h5 class="card-title">Designation</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Feedback -->

<!-- Start Social Follow banner -->

<div class="container-fluid bg-danger">
    <div class="row text-white text-center p-3">
        <div class="col-sm">
            <a href="" class="text-white social-hover"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-sm">
            <a href="" class="text-white social-hover"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
        <div class="col-sm">
            <a href="" class="text-white social-hover"><i class="fab fa-whatsapp"></i> Whatsapp</a>
        </div>
    </div>
</div>

<!-- End Social Follow banner -->

<!-- Start About Section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
    <div class="container" style="background-color: #E9ECEF;">
        <div class="row text-container">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>eSchool Provides universal access to the world's best education, partnering with top universities
                    and organizations to offer online course</p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a href="" class="text-dark">Linux Server Administration</a><br>
                <a href="" class="text-dark">Windows Server Management</a><br>
                <a href="" class="text-dark">MS SQL Sever Administration</a><br>
                <a href="" class="text-dark">Network Administration</a><br>
                <a href="" class="text-dark">System Administration</a><br>
            </div>
            <div class="col-sm">
                <h5>Contact US</h5>
                <p>The Place <br>Jalan Teknokart <br>Cyberjaja 6300 <br>Selengor, Malaysia</p>
            </div>
        </div>
    </div>
</div>
<!-- End About Section -->

<!-- Including Footer -->
<?php include_once('./Partials/footer.php');?>

</html>