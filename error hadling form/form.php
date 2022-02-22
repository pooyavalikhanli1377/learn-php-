<!DOCTYPE html>
<html>

<head>
 <title>this form for test </title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 <?php
 if (isset($_GET['submit'])) {
     if (!empty($_GET['fname']) && !empty($_GET['lname']) && !empty($_GET['email'])) {
         $fname = $_GET['fname'];
         $lname = $_GET['lname'];
         $email = $_GET['email'];
         echo "your name is $fname $lname  <br> your email addres is $email ";
     } else {
         echo "you dont write fast name :!!!!!!!!!!!:";
     }
 }
else {echo " ldmskdnfksndfksndfj";}
 ?>
 <div class="container">
  <form  name="form" action="" method="get" class="form-check">
   <input type="text" name="fname" id="">
   <input type="text" name="lname" id="">
   <input type="email" name="email" id="">
   <button type="submit" name="submit">rigiste</button>
  </form>
 </div>
</body>

</html>