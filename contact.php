<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$description =$message.\n."Contact No.:".$mobile;

$mailHeader = "From:".$name."<".$email.">"\r\n;

$resever = "portfolio.shradha.2491@gmail.com";

mail($resever, "Want to Contact you, mail send from you Portfolio", $description, $mailHeader)o or die("Error!");

echo'
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
          <span class="text-info">Thank You for Contacting me,</span> I will connect to you as soon as possible.
        </h1>
        <div class="py-5 text-dark">
            <h2>Go to Home page</h2>
            <button
              class="btn btn-outline-dark btn-md mt-2"
              onclick="location.href= "index.htm";"
            >
              Home Page
            </button>
          </div>
      </div>
  </body>
</html>
'
?>