<?php include_once("html/header.html") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1045934165412-203md9nhkqj4g6mn3kem8aujn4g4ksk4.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="sOnbO8K1"></script>-->
    <link href="css/singupLogin.css" rel="stylesheet">
</head>

<body>
    <!--
    <div id="fb-root"></div>
-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">
            <img src="../pics/logo%20(1).png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-auto"><a class="nav-link text-light" href="index.php">Home</a></li>
                <li class="nav-item mr-auto"><a href="#about" class="nav-link text-light">About Us</a></li>
                <li class="nav-item mr-auto"><a href="#contact" class="nav-link text-light">Contact Us</a></li>
                <li class="nav-item mr-auto"><a href="#reach" class="nav-link text-light">Reach Us</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active mr-4">
                    <div class="form-row">
                        <input type="search" class="form-control" placeholder="Search">
                        <div id="searchIcon"><i class="fa fa-search"></i></div>
                    </div>
                </li>
                <li class="nav-item active mr-4" id="icon">
                    <button class="btn btn-outline-success" data-toggle="modal" data-target="#signupModal"><i class="fa fa-user-plus"></i>Signup</button>
                </li>
                <li class="nav-item active mr-4" id="icon">
                    <button class="btn btn-outline-warning" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i>Login</button>
                </li>
            </ul>
        </div>
    </nav>
    <!--Body-->
    <div class="container-fluid">
        <div class="carousel slide carousel-fade" id="imagesControl" data-rider="carousel">
            <ol class="carousel-indicators">
                <li data-target="#imagesControl" data-slide-to="0"></li>
                <li data-target="#imagesControl" data-slide-to="1"></li>
                <li data-target="#imagesControl" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../pics/workforce.jpg">
                </div>
                <div class="carousel-item">
                    <img src="../pics/Rotator-WorkforceDev.png">
                </div>
                <div class="carousel-item">
                    <img src="../pics/labor-force.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#imagesControl" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#imagesControl" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <br>
        <h3>Categories</h3>
        <div class="form-row">
            <h4>Categories here</h4>
        </div>
        <h3 class="display-1">Our Services</h3>
        <div class="row">
            <div class="card col-md-3" id="findWork">
                <div class="card-header">
                    <h4 class="card-title text-center">Find JOB</h4>
                </div>
                <img src="../pics/findJob.png" class="card-img-top">
                <div class="card-body">
                    <div class="card-text">Unemployed, don't worry, get registered by for free and no paper work</div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" id="seachWorker">
                <div class="card-header">
                    <h4 class="card-title text-center">Search Workers</h4>
                </div>
                <img src="../pics/searchWorker.png" class="card-img-top">
                <div class="card-body">
                    <div class="card-text">Trouble finding worker for a problem search and get certified workers in one click.</div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" id="PostWork">
                <div class="card-header">
                    <h4 class="card-title text-center">Post Registeration</h4>
                </div>
                <img src="../pics/employee_hiring.png" class="card-img-top">
                <div class="card-body">
                    <div class="card-text">Post Registration here </div>
                </div>
            </div>
            <div class="card col-md-3" id="RateWorker">
                <div class="card-header">
                    <h4 class="card-title text-center">Rating</h4>
                </div>
                <img src="../pics/review.png" class="card-img-top">
                <div class="card-body">
                    <div class="card-text">Rate worker also</div>
                </div>
            </div>
        </div>
        <br>
        <h2 id="about">Meet The Developer</h2>
        <div class="form-row">
            <div class="card bg-info m-0 mt-4 col-md-5">
                <div class="row no-gutters">
                    <div class="col-sm-4">
                        <img src="../pics/RajeshSir.jpg" class="card-img">
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <h4 class="card-title">Mentor</h4>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>Rajesh Bansal</td>
                                </tr>
                                <tr>
                                    <td>About</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card bg-info m-0 mt-4 col-md-5">
                <div class="form-row">
                    <div class="col-md-4">
                        <img src="../pics/pic.png" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Dev</h4>
                            <table class="table-borderless">
                                <tr>
                                    <td>Name</td>
                                    <td>Aarush Kansal</td>
                                </tr>
                                <tr>
                                    <td>Branch</td>
                                    <td>Computer Engineering</td>
                                </tr>
                                <tr>
                                    <td>College</td>
                                    <td>Thapar Institute of Engineering and Technolgy</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>akansal_be19@thapar.edu</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2 id="reach">Reach Us</h2>
        <div class="row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.880733791613!2d74.95013941465109!3d30.21195128182158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f07278a9%3A0x4a0d6293513f98ce!2sBanglore%20Computer%20Education%20(C%20C%2B%2B%20Android%20J2EE%20PHP%20Python%20AngularJs%20Spring%20Java%20Training%20Institute)!5e0!3m2!1sen!2sin!4v1594725124120!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
    </div>
    <br>
    <center>
        <!--Footer-->
        <footer class="bg-dark">
            <div class="footer-main">
                <div class="container-fluid p-4">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="footer-logo">
                                <img src="../pics/logo%20(1).png" width="20%">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eius, in, similique architecto neque provident tempora modi quaerat, quae ullam sit repudiandae delectus reiciendis facilis enim fugit distinctio quasi maiores!</p>
                        </div>
                        <div class="col-md-4">
                            <h2>Useful links</h2>
                            <div class="row" id="usefulLinks">
                                <div class="col-6">
                                    <a href="#" class="nav-link">About Us</a>
                                    <a href="#" class="nav-link">Partners</a>
                                    <a href="#" class="nav-link">FAQ</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="nav-link">Blog</a>
                                    <a href="#" class="nav-link">Reviews</a>
                                    <a href="#" class="nav-link">Terms of Use</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h2 id="contact warning">Contact Us</h2>
                            <p>402, St. No. 18,Ajit Road, Bathinda, Punjab, India - 151001</p>
                            <div class="social-media">
                                <h4>Follow Us</h4>
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-reddit"></i>
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="feedback">
                                <button type="button" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#feedback">
                                    <h4>Feedback</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="footer-bottom p-2">
                <!--
                <div class="navbar-nav">
                    <a class="mr-auto">Help Center</a>
                    <a class="mr-auto">Sitemap</a>
                    <a class="mr-auto">Privacy policy</a>
                </div>
-->
                <p>Copyright &copy; 2020 - Developed By irOzen -BCE. All Rights Reserved.</p>
            </div>
        </footer>
        <!--Signup Modal-->
        <div class=" modal fade" id="signupModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SignUp</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <form id="signup">
                        <div class="modal-body">
                            <div class="form-row">
                                <!--
                                   <div class="col-md-12 form-group">
                                    <div class="g-signin2"><a data-onsuccess="onSignIn" data-theme="dark"></a>
                                    </div>
                                <a href="index.php" class="text-white" onclick="signOut();">Sign out</a>
                                <div class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="true" data-width="10"></div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <h4 class="text-center">OR</h4>
                                </div>
                            
-->
                                <div class="col-md-12 form-group">
                                    <label>Unique user id</label>
                                    <input type="text" required class="form-control" name="uid" id="uid">
                                    <span id="errUid"></span>.
                                    <div id="suggestions" hidden>
                                        <div id="suggestUid"></div>
                                        <button class="btn btn-primary" id="generate">Any Other</button>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Password</label>
                                    <input type="password" required class="form-control" name="pwd" id="pwd">
                                    <div id="signupEye"><i class="se fa fa-eye-slash"></i></div>
                                    <div id="errPwd">
                                        <h4>Password must contain the following:</h4>
                                        <p id="capital" class="ca fa fa-times-circle">A <b>capital (uppercase)</b> letter</p>
                                        <p id="number" class="na fa fa-times-circle">A <b>number</b></p>
                                        <p id="char" class="cha fa fa-times-circle">A <b>special character</b></p>
                                        <p id="length" class="la fa fa-times-circle">Minimum <b>8 characters</b></p>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Mobile Number</label>
                                    <input type="number" required class="form-control" name="mobile" id="mobile">
                                    <span id="errMob"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="category">Citizen</label>
                                    <input type="radio" required id="category" name="category" value="Citizen">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Worker</label>
                                    <input type="radio" required id="category" name="category" value="Worker">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <span id="signupDisplay">*</span>
                        <button type="submit" class="btn btn-info" id="signupBtn">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <!--LoginModal-->
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label>Username or Number</label>
                                <input type="text" class="form-control" name="loginUid" id="loginUid">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="loginPwd" id="loginPwd">
                                <div id="loginEye"><i class="le fa fa-eye-slash"></i></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div id="forgotBtn"><a class="stretched-link text-warning">Forgot Password</a></div> <span id="forgotPwd"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span id="loginDisplay"></span>
                        <button type="submit" class="btn btn-light" id="loginBtn">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Feedback Modal-->
        <div class="modal fade" id="feedback">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Your feedback Matters</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Rate Us</h4>
                        <h3>Suggest something</h3>
                        <textarea></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="js/signupLogin.js" type="text/javascript"></script>
    <script src="js/pluralize.js" type="text/javascript"></script>
    <script src="js/nameGen.js" type="text/javascript"></script>
</body>

</html>
