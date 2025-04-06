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
      .blog-image {
        background-image: url("images/blog-image.png");
        margin-top: 54px;
        text-align: center;
      }
      .blog-image h1 {
        color:orange;
        font-family: "Josebin Slab";

      }
      .blog_div {
        margin-top:60px;

      }

      .active {
        text-decoration: underline;
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
        <li><a href="Blog.html" class="active">Blog</a></li>
        <li><a href="about-us.html">About us</a></li>
        <li><a href="contact-us.html">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php

  $connect  = mysqli_connect('localhost','root','','resturant_blog');

  if($connect->error) {


    echo "something is wrong";




  }else {


    $query = 'SELECT *,SUBSTRING(blog_content,1,600) AS "content" FROM blog ORDER BY blog_time DESC';
    $result = mysqli_query($connect,$query);

    echo '<div class="container blog_div">';


    while($row = mysqli_fetch_array($result)) {

      echo '<div class="col">';
      echo '<h1>'.$row["blog_title"].'</h1>';
      echo '<p><small>By - Admin</small><br/>';
      echo '<small>'.$row["blog_time"].'</small></p>';
      echo '<p>'.$row["content"].'</p>';
      echo '<a href="view.php?q='.$row["blog_id"].'">Read more</a>';
      echo "</div>";

    }

    echo "</div>";

  }
 ?>

 <div class="jumbotron footer" id="footer" style="text-align:center;margin-top:30px;margin-bottom:0px;background-color:orange;color:white;">
 <i class="fa fa-facebook-official" style="font-size:48px;color:white"></i>
 <i class="fa fa-github" style="font-size:48px;color:white"></i>
 <i class="fa fa-instagram" style="font-size:48px;color:white"></i>

   <p>&copy; Resturant<br/>Developed and designed by : <a href="#">Yashraj Basan</a></p>
 </div>


</body>
</html>
