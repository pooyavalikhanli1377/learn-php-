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
 if (isset($_SESSION['msg']) && $_SESSION['msg']) {
  echo $_SESSION['msg'];
 }
 ?>
 <form method="POST" action="sendemail.php" enctype="multipart/form-data" class="was-validated">
 <div class="form-group">
  <label>your email address:<input type="email" name="youremail" class="form-control"></label></br>
  <label>email address:<input type="email" name="email"class="form-control" ></label></br>
  <label>subjecet:     <input type="text" name="subject"class="form-control"></label></br>
  <label >masseg:</label>
  <textarea name="masseg" class="form-control"></textarea>
  <button type="submit" name="send" value="send"class="btn btn-primary">SEND</button>
 </div>
 </form>
</div>
</body>

</html>