 <?php
 session_start()
 ?>
 <html>

 <head>
  <title>

  </title>
 </head>

 <body>
  <?php
  if (isset($_SESSION['msg']) && $_SESSION['msg']) {
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
  } ?>
  <form method="POST" action="action.php" enctype="multipart/form-data">
   <input type="file" name="upload">
   <button type="submit" name="btupload" value="upload">upload</button>
  </form>
 </body>

 </html>