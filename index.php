<?php
include("./theme/header.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/home.css">  -->
    <style>
    ul {
        list-style-type: none;
    
    }

    .jumbotron {
        background-position: top center;
        background-size: cover;
        height: 800px;
      
    }

    .card body {
        max-height: 800px;
    }

    .card header {
        margin: 10px;
        padding: 10px;
        width: 80px;
        height: 50px
    }

    .container1 {
        text-align: center;
    }
    </style>
</head>

<body>
    <section>
    <div class="jumbotron" style="background-image:url('./images/onlinelearning.jpg')">
            
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <?php include('./partials/course-list.php'); ?>
            </div>
        </div>
    </section>
    <?php
include("./theme/footer.php");
?>
</body>
</html>