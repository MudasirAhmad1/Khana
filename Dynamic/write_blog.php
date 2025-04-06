<?php

  $connect = mysqli_connect('localhost','root','','resturant_blog');
  $msg = "this is string";

  if($connect->error) {


echo "something is wrong";



  }else {

        if(!empty($_POST["blog_title"]) || !empty($_POST["blog_content"])) {

            $blog_title = mysqli_real_escape_string($connect,htmlspecialchars(strip_tags($_POST["blog_title"])));
            $blog_content = mysqli_real_escape_string($connect,htmlspecialchars(strip_tags($_POST["blog_content"])));

            $query = 'INSERT INTO blog (blog_title,blog_content,blog_time) VALUES '.'("'.$blog_title.'",'.'"'.$blog_content.'",'."NOW()".');';

            if($result = mysqli_query($connect,$query)) {

                $msg = '<p class="panel-success">Success your blog is written</p>';

            }else {

                $msg = '<p>Something wen wrong';

            }


        }else {


              $msg = '<p class="panel-danger">Please fill all the blanks</p>';

        }


  }


 ?>
<!doctype html>
<html>
<head>
  <title>Write your blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<h1 style="text-align:center;">welcome writer</h1>
<div class="container">
  <?php echo $msg ?>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="POST" enctype="application/x-www-form-urlencoded">

    <div class="form-group">
      <label for="blog_name">Blog title</label>
      <input type="text" class="form-control" name="blog_title" id="blog_title"/>
    </div>

    <div class="form-group">
      <label for="blog_content">Blog content</label>
      <textarea cols="30" class="form-control" rows="10" name="blog_content" id="blog_content"></textarea>
    </div>

    <input type="submit" class="btn btn-default" value="Submit"/>


    </form>
</div>


 </body>
 </html>
