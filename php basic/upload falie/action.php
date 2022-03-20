  <?php
  date_default_timezone_get();
  $msg = null;
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btupload']) && !empty($_POST['btupload']) == 'uoload') {
      if (isset($_FILES['upload']) && !empty($_FILES['upload'])) {
        $filename = $_FILES['upload']['name'];
        $filetype = $_FILES['upload']['type'];
        $filetemp = $_FILES["upload"]["tmp_name"];
        $filesize = $_FILES['upload']['size'];
        $fileexplod = explode(".", $filename);
        $ftype = strtolower($fileexplod[1]);
        $newfilename = md5($fileexplod[0] . date("Y-m-d h:i:s", time()));
        echo $newfilename;
        $newname_of_type = $newfilename . "." .  $ftype;
        $typrof_file_array = ["jpg", "gif", "png", "txt"."rar"];
        if (in_array($ftype, $typrof_file_array)) {
          $file_of_size = 2 * 1024 * 1024;
          if ($filesize < $file_of_size) {
            $locdir = 'upload\ ' . $newname_of_type;
            if (move_uploaded_file($filetemp, $locdir)) {
              $msg = "فایل مورد نظر اپلود شد ";
            } else {
              $msg = "فایل مورد نظر اپلود نشد";
            }
          } else {
            $msg = "سایز فایل بیش از حد مجاز است ";
          }
        } else {
          $msg = "خطا  در فرمت فایل مورد نظر";
        }
      }
    }
  }

  $_SESSION['msg'] = $msg;
  header("Location:index.php");
