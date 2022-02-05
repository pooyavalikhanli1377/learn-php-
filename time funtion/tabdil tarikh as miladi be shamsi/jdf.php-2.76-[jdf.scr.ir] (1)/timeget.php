<!DOCTYPE html>
<html>

<head>
    <title>form1 </title>
</head>
<link rel="stylesheet" href="form.css">
<bady>
    <?php 
include 'tabdil funtion.php';
    if($_POST["time"]){
        tabdil($_POST['time']);
    }else {
        echo "you dont select time ";
    }
   
    ?>
    <div class="form">
        <form action="" method="post">
            <label>time </label><input type="date" name="time">
            <button type="submit">rejster </button>
        </form>
    </div>
</bady>

</html>