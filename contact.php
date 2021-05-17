<?php
// $name -$_POST['name'];
// $visitor_email =$_POST['email'];
// $message =$_POST['message'];

// $email_from ='basaksaheli18@gmail.com';
// $email_subject =" New From Submission";
// $email_body = "User Name: $name.\n";
//               "User Emal: $visitor_email.\n";
//                  "User Message: $message.\n";

// $to ="oishipaul235@gmail.com";
// $headers = "From: $email_from\r\n";
// $headers = "Reply-To: $visitor_email\r\n";
// mail($to.$email_body,$headers);
// header("Location: index.html");

?>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
</head>

<body>
    <div class="contact-title">
        <h1> Contact Us</h1>
    </div>
    <div class="contact-form">
        <form id="contact-form" method="post" action="contact.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="text" class="form-control" placeholder="Your Email" required>
            <br>
            <input name="message" type="text" class="form-control" placeholder="Message" row="4" required>
        </form></textarea><br>
        <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>
</body>

</html>