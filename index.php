<?php

$conn = mysqli_connect('sql112.infinityfree.com','if0_39195821','Dental2025','if0_39195821_contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message = 'appointment made successfully!';
    }else{
        $message[] = 'appointment failed';
    }

}

?>

<!DOCTYPE html>
<html>
    <head>



        <title>Dentist Engineer</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        
        <!-- bootstrap cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
        
        <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

        <!-- header section starts -->

        <header class="header fixed-top">

            <div class="container">
                
                <div class="row align-items-center justify-content-between"><span style="align:center;">

                    <a href="#home" class="logo">dental<span>Care.</span></a>

                    <nav class="nav">
                        <a href="#home">home</a>
                        <a href="#about">about</a>
                        <a href="#services">services</a>
                        <a href="#reviews">reviews</a>
                        <a href="#contact">contact</a>
                    </nav>
                    <br>
                    <a href="#contact" class="link-btn">make appointment</a>

                    <div id="menu-btn" class="fas fa-bars"></div>

                </div></span>
            
            </div>

        </header>

        <!-- header section ends -->

        <!-- home section starts -->

        <section class="home" id="home">

            <div class="container">

                <div class="row min-vh-100 align-items-center">
                    <div class="content text-center text-md-left">
                        <h3>let us brighten your smile</h3>
                        <p>Not certain precisely how to say it? That's ok. Just type in your phrase and see if you hit the mark. Our search provides exact matches, near matches, frequency comparison, and even sentence correction.</p>
                        <a href="#contact" class="link-btn">make appointment</a>
                    </div>

                </div>

            </div>
        </section>

        <!-- home section ends -->

        <!-- about section starts -->

        <section class="about" id="about">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-6 image">
                        <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                    </div>

                    <div class="col-md-6 content">
                        <span>about us</span>
                        <h3>True Healthcare For Your Family</h3>
                        <p>Lorem, ipsum dolor ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nemo aliquid adipisci laboriosam neque placeat, asperiores soluta ducimus itaque amet. Repellat tempore magnam necessitatibus aut tempora natus ex maiores fuga!</p>
                        <a href="#contact" class="link-btn">make appointment</a>
                    </div>

                </div>

            </div>

        </section>

        <!-- about section ends -->

        <!-- services section starts -->

        <section class="services" id="services">

            <h1 class="heading">our services</h1>

            <div class="box-container container">

                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>Alignment specialist</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eos?</p>
                </div>
                
                <div class="box">
                    <img src="images/icon-2.png" alt="">
                    <h3>Cosmetic dentistry</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eos?</p>
                </div>
                
                <div class="box">
                    <img src="images/icon-3.png" alt="">
                    <h3>Oral hygiene experts</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eos?</p>
                </div>
                
                <div class="box">
                    <img src="images/icon-4.png" alt="">
                    <h3>Root canal specialist</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eos?</p>
                </div>
                
                <div class="box">
                    <img src="images/icon-5.png" alt="">
                    <h3>Live dental advisory</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eos?</p>
                </div>
                
                <div class="box">
                    <img src="images/icon-6.png" alt="">
                    <h3>Cavity inspection</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, eos?</p>
                </div>

            </div>
     
        </section>

        <!-- services section ends -->

        <!-- services section starts -->

        <section class="process">

            <h1 class="heading">work process</h1>

            <div class="box-container container">

                <div class="box">
                    <img src="images/process-1.png" alt="">
                    <h3>Cosmetic Dentistry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vitae?</p>
                </div>
                
                <div class="box">
                    <img src="images/process-2.png" alt="">
                    <h3>Pediatric Dentistry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vitae?</p>
                </div>
                
                <div class="box">
                    <img src="images/process-3.png" alt="">
                    <h3>Dental Implants</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vitae?</p>
                </div>

            </div>

        </section>

        <!-- services section ends -->

        <!-- reviews section starts -->

        <section class="reviews" id="reviews">

            <h1 class="heading"> satisfied clients </h1>

            <div class="box-container container">

                <div class="box">
                    <img src="images/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, reprehenderit temporibus. Voluptate assumenda beatae inventore corrupti laborum ratione fugit minima!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john wick</h3>
                    <span>satisfied client</span>
                </div>
                
                <div class="box">
                    <img src="images/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, reprehenderit temporibus. Voluptate assumenda beatae inventore corrupti laborum ratione fugit minima!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john wick</h3>
                    <span>satisfied client</span>
                </div>
                
                <div class="box">
                    <img src="images/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, reprehenderit temporibus. Voluptate assumenda beatae inventore corrupti laborum ratione fugit minima!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john wick</h3>
                    <span>satisfied client</span>
                </div>

            </div>

        </section>

        <!-- reviews section ends -->

        <!-- contact section starts -->

        <section class="contact" id="contact">

            <h1 class="header">make appointment</h1>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                    if (isset($message)) {
                        // Ensure $message is an array
                        if (!is_array($message)) {
                            $message = array($message);
                        }

                        foreach ($message as $msg) {
                            echo '<p class="message">' . $msg . '</p>';
                        }
                    }
                ?>
                <span>your name : </span>
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <span>your email : </span>
                <input type="email" name="email" placeholder="enter your email" class="box" required>
                <span>your number : </span>
                <input type="number" name="number" placeholder="enter your number" class="box" required>
                <span>appointment date : </span>
                <input type="datetime-local" name="date" class="box" required>
                <input type="submit" value="make appointment" name="submit" class="link-btn">
            </form>

        </section>

        <!-- contact section ends -->

        <!-- footer section starts -->

        <section class="footer">

            <div class="box-container container">

                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>phone number</h3>
                    <p>+123-456-7890</p>
                    <p>+111-222-3333</p>
                </div>

                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>our address</h3>
                    <p>Patna, india - 840001</p>
                </div>
                
                <div class="box">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>07:00am to 10:00pm</p>
                </div>

                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>dentalcare@yahoo.com</p>
                    <p>dentistclinic@gmail.com</p>
                </div>

            </div>

            <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Shifa Jabeen</span> | All rights reserved.</div>

        </section>

        <!-- footer section ends -->










    <!-- custom js file link -->
    <script src="js/script.js"></script>

    </body>
</html>