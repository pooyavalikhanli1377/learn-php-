<?php
session_start();
?>
<html>


<head>
 <title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body background="#ff8080">
<div class="container">
 <?php
 if (isset($_SESSION['text']) && $_SESSION['text']) {
  echo $_SESSION['text'];
 }
 ?>
 <form method="POST" action="insert to database .php" enctype="multipart/form-data" class="was-validated">
 <div class="form-group">
  <label>fname :<input type="text " name="fname" class="form-control"></label></br>
  <label>lname :<input type="text " name="lname"class="form-control" ></label></br>
  <label>age :     <input type="text" name="age"class="form-control"></label></br>
  <button type="submit" name="send" value="send"class="btn btn-primary">SEND</button>
 </div>
 </form>
</div>
</body>

</html>