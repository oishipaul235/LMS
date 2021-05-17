<?php
include("./theme/header.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Courses Page</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/home.css">  -->
    <style>
    ul {
        list-style-type: none;
      
    }

    .jumbotron {
        background-position: top center;
        background-size: cover;
        height: 700px;

    }
    .card-deck{
        color:black;
         width:1200px;
         margin:20px 50px 100px 20px;
         box-sizing:border-box;
    }
         .card{
         background-color:snow;
    }
    .container{
        font-family:Goudy Stout;
        padding:10px;
        margin:10px; 
        background-color:khaki;
        width:300px;
    }
    </style>
</head>
<body>
    
    <section>
    <div class=container ><h1> COURSES</h1></div>
        <div class="jumbotron" style="background-image:url('./images/onlineeducation.jpg')">
        </div>
    </section>
    <section>
    <d}iv class="card-deck">
  <div class="card">
    <img class="card-img-top" src="./images/bba.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">BBA</h5>
      <p class="card-text">Duration: 3 YEARS <br>Price: INR 30,000 </div>
    <div class="card-footer">
      <small class="text">The Bachelor of Business Administration (BBA) is a bachelor's degree in business administration.
                            In the United States, the degree is conferred after four years of full-time study in one or more areas of 
                            business concentrations.</small>
      <br><br><button type="button" class="btn btn-outline-warning"><a href="coursedetails1.php">View Course</button></a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="./images/bhm.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">BHM</h5>
      <p class="card-text">Duration: 3 YEARS <br>Price: INR 30,000 </div>
    <div class="card-footer">
      <small class="text">BHM or Bachelor of Hotel Management course is a 3-year undergraduate degree in hospitality management.</small>
      <br><br><button type="button" class="btn btn-outline-success"><a href="coursedetails2.php">View Course</button></a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="./images/bms.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">BMS</h5>
      <p class="card-text">Duration: 3 YEARS <br>Price: INR 30,000  </div>
    <div class="card-footer">
      <small class="text">Bachelor of Management Studies or BMS is an undergraduate program for management 
                            studies offered by many universities throughout the world. The course allows you to obtain the knowledge 
                            and skills needed to assume management positions in a wide range of organizations.</small>
    <br><br> <button type="button" class="btn btn-outline-info"><a href="coursedetails3.php">View Course</button></a>
    </div>
  </div>
</div>
    </section>
    <?php
include("./theme/footer.php");
?>
        
</body>

</html>