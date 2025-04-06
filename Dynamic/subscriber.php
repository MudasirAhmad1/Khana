<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delicious Resturant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Pacifico" rel="stylesheet">
  <style type="text/css">
      .navbar-default {
        background-color: orange;

        border:0px;

      }
      .navbar-brand {
        font-size:29px;
        color:white !important;
        font-family: "Pacifico";
        text-decoration: underline;
      }

    .navbar-default  .navbar-right li a {
        color:white;
        font-size:18px;
        font-family:"Josefin Slab";
      }
      .navbar-default  .navbar-right li a:hover {

        color:white;
        text-decoration: underline;
      }

      #greetings {

          margin-top:60px;
          height:400px;

      }

      .container h1 {
        text-align:center;
        font-family:"sans serif";
        color:Black;
        margin-top:150px;
      }

      .h1span {
        text-align:center;
        color:orange;
        font-family:"sans serif";

      }

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Delicious Resturant</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="Menu.html">Menu</a></li>
        <li><a href="Blog.html">Blog</a></li>
        <li><a href="about-us.html">About us</a></li>
        <li><a href="contact-us.html">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" id="greetings">

<?php

$connect = mysqli_connect('localhost','root','','resturant_blog');

if($connect->error) {



echo '<p>Something is wrong is happend';


}else {


    if(!empty($_GET["email"])) {

      $email = mysqli_real_escape_string($connect,htmlspecialchars(strip_tags($_GET["email"])));

        $query = 'INSERT INTO subscribers (id,email) VALUES '.'(NULL,"'.$email.'");';

        if($result = mysqli_query($connect,$query)){


            echo '<h1>THANK YOU <span class="h1span">FOR SUBSCRIBING</span></h1>';




        }else {


        echo '<p>Error</p>';



        }






    }




}


?>
</div>

<div class="jumbotron footer" id="footer" style="text-align:center;background-color:orange;color:white;margin-bottom:0px;">
<i class="fa fa-facebook-official" style="font-size:48px;color:white"></i>
<i class="fa fa-github" style="font-size:48px;color::white"></i>
<i class="fa fa-instagram" style="font-size:48px;color::white"></i>

  <p>&copy; Resturant<br/>Developed and designed by : <a href="#">Yashraj Basan</a></p>


</div>
</body>
</html>
