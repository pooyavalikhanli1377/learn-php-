<?php 
session_start();   
if (isset($_SESSION['msg'])&& $_SESSION['msg']){}  ?>
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
 <form method="POST" action="login.php" enctype="multipart/form-data" class="was-validated">
 <div class="form-group">
  <label>username :<input type="text " name="username" class="form-control"></label></br>
  <label>password :     <input type="password" name="pasword"class="form-control"></label></br>
  <button type="submit" name="register" value="send"class="btn btn-primary">register</button>
 </div>
 </form>
</div>
</body>

</html>