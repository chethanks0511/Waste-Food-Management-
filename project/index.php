<?php
require('connection.php');
    if(array_key_exists('submitdetails',$_POST)){
        // echo"<script>alert('hello');</script>";
        $name = $_POST['name'];
        $mobile = $_POST['number'];
        $category = $_POST['donation'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        $result = mysqli_query($con,"select * from food");
        $id=0;
        if(mysqli_num_rows($result)==0){
            $id=1;
        }else{
            $res = mysqli_query($con,"select max(id) from food");
            $row = mysqli_fetch_assoc($res);
            $max_id = $row['max(id)'];
            $id = (int)$max_id;
            $id++;
        }
        $sql = "insert into food values($id,'$name',$mobile,'$category','$address','$message');";
        $res = mysqli_query($con,$sql);
        if($res){
            echo"<script>alert('Submitted Successfully');</script>";
        }else{
            echo"<script>alert('<?php$id?>');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WASTE FOOD MANAGEMENT
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home">Waste Food Management & Donation</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login/index.html">Admin Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Contact No : <a href="tel: +917090060539">+91 7090060539</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row">
                    <div class="col-lg-6 align-item-center">
                        <div class="home-info">
                            <h1>Alone we can do little, together we can do so much</h1>
                            <h2>We manage wastage for needy peoples</h2>
                            
                            <div class="buttons">
                                <a href="#contact" class="btn1">Donate now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="img/img-1.png" alt="home-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>We Manage Wastage or Donation like..</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/clothing.png" alt="img">
                        <h3>Clothes</h3>
                        <p> </p>
                        <button class="btn1" onclick='changeClothes()'>Donate Now</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/sneakers.png" alt="img">
                        <h3>Footware</h3>
                        <p>
                        </p>
                        <button class="btn1" onclick='changeFootware()'>Donate Now</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/salary.png" alt="img">
                        <h3>Fund</h3>
                        <p> </p>
                        <button class="btn1" onclick='changeFund()'>Donate Now</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/gadgets.png" alt="img">
                        <h3>Gadgets</h3>
                        <p></p>
                        <button class="btn1" onclick='changeEle()'>Donate Now</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/book.png" alt="img">
                        <h3>Stationary</h3>
                        <p></p>
                        <button class="btn1" onclick='changeBooks()'>Donate Now</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="img/don/shopping-bag.png" alt="img">
                        <h3>Food</h3>
                        <p></p>
                        <button class="btn1" onclick='changeFood()'>Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission" id="mission-id">
        <div class="container">
            <div class="heading">
                <h2>Our Missions</h2>
                <p>We have delivered <span>Wastage</span> or <span>Donations</span> to needy Peoples</p>
            </div>
            <div class="gallery-sec">
                <div class="container">
                    <div class="image-container">
                        <div class="image"><img src="img/miss/1.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/2.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/3.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/4.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/5.jpg" alt="img"></div>
                        <div class="image"><img src="img/miss/6.jpg" alt="img"></div>
                    </div>
                </div>
                <div class="pop-image">
                    <span>&times;</span>
                    <!-- <img src="img/gallery/1.jpg" alt="gallery-img"> -->
                </div>
                </di v>
            </div>
    </section>

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 about-img">
                    <img src="img/img-2.jpeg" alt="about">
                </div>
                <div class="col-lg-8 order-first order-lg-last">
                    <div class="heading">
                        <h2>What We Do & Why We Do</h2>
                    </div>
                    <p>The primary mission of our system is to enhance human well-being and help meet
                         the basic human needs of all people, with particular attention to the needs and empowerment
                          of people who are vulnerable, oppressed, and living in poverty. </p>
                    <p>We aim to maximize the development of human potential and the fulfillment of human
                         needs, through an equal commitment to working with and enabling people to achieve the best
                          possible levels of personal and social well-being. Working to achieve social justice through
                           social development and social change.</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="heading">
                    <h2>Connect With Us</h2>
                    <p>Fill this form, our team will collect your <span>Donation</span> or <span>Wastage</span> from your place.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <form class="contact-form" method="post" action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    
                                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" name="number"class="form-control" placeholder="Mobile No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <select name="donation" id="donation_select">
                                                        <option value=""  hidden>Choose the type of Donation</option>
                                                        <option value="food">Food</option>
                                                        <option value="clothes">Clothes</option>
                                                        <option value="footware">Footware</option>
                                                        <option value="books">Books</option>
                                                        <option value="fund">Fund</option>
                                                        <option value="gadget">Ele. Gadgets</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" id="" cols="90" rows="1" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button href="#" name="submitdetails" class="btn1 mt-5">Submit Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Waste Food Management & Donation</h4>
                        <p>Address : Canara Engineering College, Mangalore</p>
                        <p>Contact No : <a href="tel: +91 7090060539">+91 7090060539</a></p>
                        <p>Email : <a href="mailto:chethankrishna0511@gmail.com">chethankrishna0511@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="img/icons/instagram.png" alt="inatagram"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="#"><img src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        <p>Copyright &copy; 2023 | All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <script src="js/script.js"></script> -->
    
    <script>
    //    console.log(document.getElementById('donation_select'))
        // console.log('afa');

        
  function changeFood() {
    console.log('kuay');
    document.getElementById('donation_select').selectedIndex = 1;
    window.location.assign('#contact');
  }
  function changeClothes() {
    // console.log('waef');
    document.getElementById('donation_select').selectedIndex = 2;
    window.location.assign('#contact');
  }
  function changeFootware() {
    document.getElementById('donation_select').selectedIndex = 3;
    window.location.assign('#contact');
  }
  function changeBooks() {
    document.getElementById('donation_select').selectedIndex = 4;
    window.location.assign('#contact');
  }
  function changeFund() {
    document.getElementById('donation_select').selectedIndex = 5;
    window.location.assign('#contact');
  }
  function changeEle() {
    document.getElementById('donation_select').selectedIndex = 6;
    window.location.assign('#contact');
  }
  

    </script>
</body>

</html>