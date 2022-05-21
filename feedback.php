<?php

$name = $_POST['name'];
$email = $_POST['email'];
$workplace = $_POST['workplace'];
$jobtitle = $_POST['jobtitle'];
$message = $_POST['message'];

$description =$message."\nMy Workplace:".$workplace."\nMy Role:".$jobtitle;

$mailheader = array("From: ".$email,
    "Reply-To: portfolio.shradha.2491@gmail.com",
    "X-Mailer: PHP/" . PHP_VERSION
);
$mailheader = implode("\r\n", $mailheader);

$to = "portfolio.shradha.2491@gmail.com";
$subject = "Given Feedback to you, mail send from you Portfolio";

$status = mail($to, $subject, $message, $mailheader);

if($status)
{
    echo '<p>Your mail has been sent!</p>';
} else {
    echo '<p>Something went wrong. Please try again!</p>';
}

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <style>
      .scrollbar::-webkit-scrollbar {
        display: none;
      }
      .backg {
        background-color: rgb(129, 6, 211);
      }
    </style>
    <title>Shradha Suryawanshi</title>
    <link rel = "icon" href = 
    "Logo/s_icon.png" 
            type = "image/x-icon">
  </head>
  <body>
    <div class="container text-center" style="margin-top: 100px">
        <h1 class="font-weight-light">
          <span class="text-info">Thank You for Your feedback</span> 
        </h1>
        <div class="py-5 text-dark">
            <h2>Go to Home page</h2>
            <a href="index.htm" class="text-dark d-block">Home page</a>
          </div>
      </div>
  </body>
</html>
';
?>