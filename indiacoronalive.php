<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style8.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India Live Cases</title>
</head>
<body>
    <header class="header">
        <img src="images/logo2.png" class="logo" alt="">
        <div class="heading">
        <u class="navigation">
            <li><a href="index.html">Home</a></li>      
            <li><a href="helpout.html">Resources</a></li>
            <li><a href="https://www.mohfw.gov.in/pdf/UpdatedClinicalManagementProtocolforCOVID19dated03072020.pdf">Guidelines</a></li>
            <li><a href="aboutus.html">About us</a></li>
        </u>
      </div>
<h1 class="coro mt-5"><u>CORONA LIVE UPDATES</u></h1>
<section class="corono_update container-fluid mt-4">
    <!-- <div class="mb-3">h3.text-center <text-uppercase></text-uppercase></div> -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center table-dark" id="tbval">
<tr>
    <th>Total confirmed</th>
    <th>Total Active</th>
    <th>Total Recovered</th>
    <th>Total Deaths</th>
    <th>Daily Recovered</th>
    <th>New Deaths</th>
    <!-- <th></th> -->
</tr>
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive1 = json_decode($data, true);
$statescount1 = count($coranalive1['cases_time_series']);
$cal=($coranalive1['cases_time_series'][$statescount1-1]['totalconfirmed'])-($coranalive1['cases_time_series'][$statescount1-1]['totalrecovered']);
?>
<tr>
    <td> <?php echo $coranalive1['cases_time_series'][$statescount1-1]['totalconfirmed'] ?> </td>
    <td> <?php echo $cal ?> </td>
    <td> <?php echo $coranalive1['cases_time_series'][$statescount1-1]['totalrecovered'] ?> </td>
    <td> <?php echo $coranalive1['cases_time_series'][$statescount1-1]['totaldeceased'] ?> </td>
    <td> <?php echo $coranalive1['cases_time_series'][$statescount1-1]['dailyrecovered'] ?> </td>
    <td> <?php echo $coranalive1['cases_time_series'][$statescount1-1]['dailydeceased'] ?> </td>
</tr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center table-dark" id="tbval">
<tr>
    <th>Time Updtaes</th>
    <th>State</th>
    <th>confirmed</th>
    <th>Active</th>
    <th>New Recovered</th>
    <th>New Deaths</th>
    <!-- <th></th> -->
</tr>
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=1;
while($i < $statescount){

 ?>
<tr>
    <td> <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?> </td>
    <td> <?php echo $coranalive['statewise'][$i]['state']?> </td>
    <td> <?php echo $coranalive['statewise'][$i]['confirmed'] ?> </td>
    <td> <?php echo $coranalive['statewise'][$i]['active'] ?> </td>
    <td> <?php echo $coranalive['statewise'][$i]['recovered'] ?> </td>
    <td> <?php echo $coranalive['statewise'][$i]['deaths'] ?> </td>
</tr>
  <!-- echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;  -->

<?php
  $i++;
}


?>

        </table>
    </div>
</section>
<footer class="page-footer font-small special-color-dark">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Copyright:
  <a href="https://www.instagram.com/covidresourceswebsite"> CRW(Covid Resources Website)</a>
</div>
<!-- Copyright -->
<style>
    
    </style>
</footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    </header>
    </body>
</html>