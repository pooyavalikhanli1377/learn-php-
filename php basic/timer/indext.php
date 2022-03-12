<html>

<head>
 <title></title>
</head>

<body>
 <form action="" method="get">
  <label for="">enter your number:</label><input type="text" name="time">
  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
 </form>
 <script>
 setInterval(function () {element.innerHTML += "Hello"}, 1000);
 </script>
  <?php
   date_default_timezone_set('asia/tehran');
  if (!empty($_GET['time'])) {
      $number = $_GET['time'];
      if (is_integer($number*1)) {
          echo '<script>alert("   :| خستم کردی ")</script>';
          for ($i = $number; 0<= $i; $i--) {
           echo  $number-- ."<br>";
           $log1=fopen("pooya.text",'a+');
             fwrite($log1,"log is $number".date("Y/m/d h:i:s",time()).PHP_EOL);   
             fclose($log1);
          }

      }elseif(is_string($number)){
          echo '<script>alert("   :|عدد وارد کن الاغ  ")</script>';
      }

      }
   else {echo '<script>alert("  :) لطفا داخل کادر را پرکنید")</script>';}
  
  ?>
 
</body>

</html>