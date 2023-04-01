

<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health & Nutrition Dairy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">


  <title>Registration | PHP</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="stylereg.css">

<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Health and Nuitration Dairy</label>
        <ul>
            <li><a class="active"  href="homepage.php">Home</a></li>
             <li><a class="active"   href="index.php">Live Chat</a></li>
            <li><a class="active"  href="upload.php">Emergency</a></li>
            <li><a class="active"   href="registration.php">Appointment</a></li>
            <li><a class="active"   href="fit.html">Daily care </a></li>
            <li><a class="active"    href="link.php">Search </a></li>
            
        </ul>
    </nav>

<style>  
    body {
  background: url(regi.jpg);
}

p.ex1 {
   
  padding-left: 50px;
}
</style>



</head>
<body>


<br>
</br>
<br>
</br>
<div>
  <?php
    if(isset($_POST['create'])){
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $phonenumber    = $_POST['phonenumber'];

    
     $sql = "INSERT INTO total (username,email, phonenumber ) VALUES(?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$username, $email, $phonenumber]);
        if($result){
            echo 'Successfully saved.';
        }else{
            echo 'There were erros while saving the data.';
        }
}else{
    echo ' ';
}
  ?>  
</div>

<div>
  <form action="registration.php" method="post">
   
        <div class="col-sm-3">
          <h1 style="color: black">Appointment</h1>
          <hr class="mb-3">
          <br> <br>
          <label for="username" style="margin-left: 10px" ><b>User Name :</b></label>
          <input class="form-control" style="margin-left: 00px " id="username" type="text" name="username" required>
          <br> <br>


          <label for="email" style="margin-left: 10px"><b>Email :</b></label>
          <input class="form-control" style="margin-left: 40px" id="email"  type="email" name="email" required>
          <br><br>


          <label for="phonenumber" style="margin-left: 10px"><b>Phone Num:</b></label>
          <input class="form-control" style="margin-left: 2px" id="phonenumber"  type="text" name="phonenumber" required>
          <br>
          <br>
          <label for="select" style="margin-left: 10px"><b>Catagory:</b></label>
          <select style="margin-left: 22px" name="option">
  <option>Select</option>

  <option>heart</option>
  <option>Eye</option>
  <option>Sargary</option>
  <option>Gaiyeny </option>
  <option>Arthopadic</option>

    </select>
<br>
          <br>
          <br>
          <br>
          <hr class="mb-3">
          <input class="btn btn-primary" style="margin-left: 115px" type="submit" id="register" name="create" value="submit">
        </div>
      </div>
    </div>
  </form>
</div>


</br>
<br>
</br>
<br>

  
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
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>742,west kazipara, mirpur, Dhaka-1207</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>01748608636</li>
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
    <div class="footer-bottom">
        Copyright &copy; Computers & Codes 2021. All rights reserved.

    </div>


    </div>

</div>
    
</body>
</html>
