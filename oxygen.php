<?php
$insert = false ;
if (isset($_POST['name'])){
// $server="localhost";
// $username="root";
// $password="";
$con = mysqli_connect("fdb27.runhosting.com", "3826676_yatin", "Yourdada1!");

if(!$con){
    die("connection failed due to".mysqli_connect_error());
}
// echo "success";

$name=$_POST['name'];
// echo $name;
// $email=$_POST['email'];
// echo $email;
$address=$_POST['address'];
// echo $address;
$city=$_POST['city'];
// echo $city;
$state=$_POST['state'];
// echo $state;
// $zip=$_POST['zip'];
// echo $zip;
$comment=$_POST['comment'];
// echo $comment;
$phone=$_POST['phone'];
// $time=

$sql1="INSERT INTO `3826676_yatin`.`oxygen` (`name`, `address`, `city`, `state`,`phone`, `comment`,`time`) VALUES ('$name', '$address', '$city', '$state', '$phone', '$comment',current_timestamp());";

// echo $sql1;
if($con->query($sql1)==true){
    $insert = true;
}
else{
    echo "failed <br> $con->error";
}
$con->close();
}
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style4.css">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Oxygen Form</title>
</head>

<body>
  <header class="header">
    <img src="images/logo2.png" class="logo" alt="">
    <header class="header">
    <img src="images/logo2.png" class="logo" alt="">
    <div class="heading">
    <u class="navigation">
        <li><a href="index.html">Home</a></li>      
        <li><a href="news.html">Covid News</a></li>
        <li><a href="guidelines.html">Guidelines</a></li>
        <li><a href="aboutus.html">About us</a></li>
    </u>
  </div>
    </nav>
    <style>
      #bttn{
    background: transparent;
    border: 1px solid white;
    border-radius: 10%;
    font-size:1.5rem;
    
}
.html{
  font-size=62.5%;
}
.header{
  height: 120vh;
}
@media (max-width: 998px){
    html{
        font-size: 55%;
    }
@media (max-width: 806px){
    html{
        font-size: 45%;
    }
@media (max-width: 662px){
    html{
        font-size: 40%;
    }

@media (max-width: 495px){
    html{
        font-size: 38%;
    }
    .form{
      width:75rem;
    }
@media (max-width: 464px){
    html{
        font-size: 35%;
    }
    .form{
    /* margin-top: 2rem; */
    width: 65rem;
}
@media (max-width: 367px){
    html{
        font-size: 35%;
    }
    .form{
    /* margin-top: 2rem; */
    width: 60rem;
}
    </style>
    <div class="container div1">
      <h1 class="head">FILL THE FORM</h1>
      <h4 class="head1">(IF YOU HAVE AVAILABLITY OF OXYGEN SUPPLY)</h4>
      <?php
      if($insert==true){
      echo "<u><p class='success'>Thanks For Submitting Your Form</p></u>";
    }
    ?>
      <form action="oxygen.php" method="POST" class="form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
          </div>
        <div class="form-group">
          <label for="address">Location</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>
          <div class="form-group col-md-4">
            <label for="state">State</label>
            <select id="state" class="form-control" name="state">
              <option selected>Choose...</option>
                  <option>Andhra Pradesh</option>
                  <option>Assam</option>
                  <option>Arunachal Pradesh</option>
                  <option>Andaman and Nicobar</option>
                  <option>Bihar</option>
                  <option>Chandigarh</option>
                  <option>Chhattisgarh</option>
                  <option>Delhi</option>
                  <option>Daman and Diu</option>
                  <option>Dadra and Nagar Haveli</option>
                  <option>Goa</option>
                  <option>Gujarat</option>
                  <option>Haryana</option>
                  <option>Himachal Pradesh</option>
                  <option>Jammu and kashmir</option>
                  <option>Jharkhand</option>
                  <option>Karnataka</option>
                  <option>Kerala</option>
                  <option>Madhya Pradesh</option>
                  <option>Maharashtra</option>
                  <option>Manipur</option>
                  <option>Meghalaya</option>
                  <option>Mizoram</option>
                  <option>Nagaland</option>
                  <option>Lakshadweep</option>
                  <option>Orissa</option>
                  <option>Punjab</option>
                  <option>Pondicherry</option>
                  <option>Rajasthan</option>
                  <option>Sikkim</option>
                  <option>Tamil Nadu</option>
                  <option>Tripura</option>
                  <option>Uttaranchal</option>
                  <option>Uttar Pradesh</option>
                  <option>West Bengal</option>
            </select>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phone">Phone no.</label>
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="comment">Comments</label>
            <input type="text" class="form-control text1" id="comment"
              placeholder="Additional Information like Oxyge 2l @ 300/- at faridabad phone no.39498390483 ..."
              name="comment">
          </div>
          <div class="form-group">
            <div class="form-check">
            </div>
          </div>
          <button type="submit" class="btn btn-primary" id="bttn">Submit</button>
      </form>
  </header>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>