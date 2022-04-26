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
  if (isset($_SESSION['erorr']) && $_SESSION['msg']) {
    $log=$_SESSION['erorr'];
    echo "<script>alert('$log')</script>";
  }
  ?>
  <form method="POST" action="Rndom.php" class="was-validated">
   <div class="form-group">
   <label >Number of characters</label> <input type="text" name="number" class="form-control">
   <label >Ditali  </label> <input type="text" name="ditail" class="form-control">
    <button type="submit" name="send" value="send" class="btn btn-primary">refresh</button>
  </form>
  <form method="POST" action="Rndom.php" class="was-validated">
  <div class="form-group">
    <button type="submit" name="showditail" value="send" class="btn btn-primary">Show Ditail</button>
</form>
   </div>
   </form>
 </div>
</body>