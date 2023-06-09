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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="styleup.css">

</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Health and Nuitration Dairy</label>
        <ul>
            <li><a class="active"  href="homepage.php">Home</a></li>
             <li><a class="active"   href="index.php">Live chat</a></li>
            <!--<li><a class ="active" href="search.php">Search</a></li>   -->
            <li><a class="active"  href="upload.php">Emergency</a></li>
            <li><a class="active"   href="registration.php">Appoinment</a></li>
            <li><a class="active"                 href="fit.html">Daily care </a></li>
            <li><a class="active"                 href="link.php">Search </a></li>
          
          
        </ul>
    </nav>
<style>
  body {
  background: url(27.jpg);
    
}</style>

<div>
<?php
    if(isset($_POST['create'])){
    $rname       = $_POST['rname'];
    $option       = $_POST['option'];
    $title       = $_POST['title'];
    $description       = $_POST['description'];

      $sql = "INSERT INTO upload (rname,option, title,description ) VALUES(?,?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$rname, $option, $title,$description]);
      if($result){
            echo '';
        }else{
            echo 'There were erros while saving the data.';
        }
}else{
    echo '  ';
}
    ?>
</div>
  

<br>
</br>

<div class="container">
  <form action="upload.php" method="post">
   
   <div class="row">
 <div class="col-25">
      <label for="rname">Anonymous</label>
    </div>

    <div class="col-75">
      <input type="text" id="rname" name="rname" placeholder="Your name.." >
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="category">Looking For</label>

    </div>
    <div class="col-75">
    
  <select style="margin-left: 00px" name="option">
  <option>Select Option</option>
  <option>Ambulance</option>
  <option>Appoinment</option>
  <option>For any Solution</option>
  <option>any information </option>
  <option>Quick Answer</option>

    </select>
      </div>
</div>
  


  <div class="row">
    <div class="col-25">
      <label for="title">Content Number</label>

    </div>

    <div class="col-75">
      <input type="text" id="title" name="title" placeholder="Content Number.." > 
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Write something.." style="height:200px" ></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" id="btn" value="Submit" name="create">
  </div>
  <div id="wait_for_admin_response"></div>
  </form>
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

