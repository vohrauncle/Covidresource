<?php
$str=$_POST['inputstate1'];
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style4.css">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Data For Plasma</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
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
    <div class="alert alert-success" role="alert">
Detials is updating time to time
</div>
    <h1 id="detail">PLASMA DONORS DETAILS</h1>
    <table class="table table-dark table-striped">
  <thead>
  <style>
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
        font-size: 35%;
    }
@media (max-width: 495px){
    html{
        font-size: 35%;
    }
@media (max-width: 414px){
    html{
        font-size: 35%;
    }
@media (max-width: 331px){
    html{
        font-size: 30%;
    }
    </style>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col" class="nameclass">Name</th>
      <th scope="col" class="contactclass">Contact No.</th>
      <th scope="col" class="cityclass">City</th>
      <th scope="col" class="addressclass">Location</th>
      <th scope="col" class="commentclass">Comment</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr> -->
    <?php
$conn = mysqli_connect("fdb27.runhosting.com", "3826676_yatin", "Yourdada1!", "3826676_yatin");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,phone,city,address,comment,time FROM plasma WHERE state='$str' ORDER BY time DESC LIMIT 30; ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>" . "<td>" . $row["name"] . "</td><td>"
. $row["phone"] . "</td><td>" . $row["city"] . "</td><td>". $row["address"]."</td><td>". $row["comment"]."<br>"."Updated on".$row["time"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; 
echo $str;}
$conn->close();
?>
  </tbody>
</table>
  </header>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>