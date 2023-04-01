<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health & Nutrition Dairy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">
</head>
<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Health and Nutrition Dairy</label>

        <ul>
            <li><a class="active"  href="homepage.php">Home</a></li> 
             <li><a class="active"   href="index.php">Live chat</a></li>
            <li><a class="active"  href="upload.php">Emergency</a></li>
            <li><a class="active"   href="registration.php">Appoinment</a></li>
            <li><a class="active"                 href="fit.html">Daily Care </a></li>
            <li><a class="active"                 href="link.php">Search </a></li>
            
        </ul>
    </nav>

    <div class="container">
        <div class="slider">
            <div class="slide slide1">
                <div class="caption">
                    <h2>Medical World </h2>
                    <p>For your GP practice, surgery, hospital, clinic and ophthalmic practice. A wide choice of money saving pharmaceuticals, practice consumables, GP and hospital equipment and furniture – Medical World</p>
                </div>
            
            </div>

            <div class="slide slide2">
                <div class="caption">
                    <h2>Nutrition  Table</h2>
                    <p>A dietary term signifying a diet that provides all nutrients, fiber, and energy in amounts sufficient to maintaining good health and body weight. A balanced diet supplies various types of foods in proportion to one another. With balance, foods rich in one nutrient leave room for foods that are rich in other nutrients.</p>
                </div>
            
            </div>

            <div class="slide slide3">
                <div class="caption">
                    <h2>24 Hours Docotor</h2>
                    <p>Our experienced physicians have been providing quality medical advice to those in need since 2014. Your Doctors Online is the passion project of our founders to bring affordable healthcare to all of the corners of the world. We believe that everyone in the world should have the ability to connect with an experienced doctor.</p>
                </div>
            
            </div>

            <div class="slide slide4">
                <div class="caption">
                    <h2>Cancer New Treatment</h2>
                    <p>Any cancer treatment can be used as a primary treatment, but the most common primary cancer treatment for the most common types of cancer is surgery. If your cancer is particularly sensitive to radiation therapy or chemotherapy, you may receive one of those therapies as your primary treatment. If you decide that you don't want more cancer treatment, then it's time to focus on a kind of palliative care called hospice care. Hospice care improves your quality of life. Care near the end of life is called hospice care.</p>
                </div>
            
            </div>

            <div class="slide slide5">
                <div class="caption">
                    <h2>Corona Vexin</h2>
                    <p>For most organizations, COVID-19 has been a literal transformative agent. Our organizations have almost overnight gone from environments
                     where teleworking was an exception, to where it's the norm.</p>
                </div>
            
            </div>

        </div>

    </div>



<div class="footer">
    <div class="inner-footer">

        <div class="footer-items">
            <h1>New Invented</h1>
            <p>Content itself is what the user derives value from....</p>

        </div>

        <div class="footer-items">
            <h1>Quick Links</h1>
            <div class="border"></div>
                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Upload</li></a>
                    <a href=""><li>Search</li></a>
                    <a href=""><li>Registration</li></a>
                </ul>

        </div>
        <div class="footer-items">
            <h1>Tutorials</h1>
            <div class="border"></div>
                <ul>
                    <a href=""><li>Madical Information</li></a>
                    <a href=""><li>Embulance</li></a>
                    <a href=""><li>Technology</li></a>
                    <a href=""><li>Madicen Delivery</li></a>
                </ul>

        </div>

        <div class="footer-items">
            <h1>Contact Us</h1>
            <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>15/2, Dhanmondi, Dhaka-1207</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+8801627162691</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>support@dairy.com</li>
                </ul>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>

        </div>
    </div>
    <div class="w3-container w3-teal" style="border: 1px solid black;background-color: #9932CC ">
  <footer style="width:100%; text-align: center;">
    <p>&copy; 2021 Health And Nurtation Dairy</p>
    <a href=" "> 24 hours service</a>
  </footer>


    </div>

</div>
    
</body>
</html>
