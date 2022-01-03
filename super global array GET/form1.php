<!DOCTYPE html>
<html>

<head>
    <title>form1 </title>
</head>
<link rel="stylesheet" href="form.css">
<bady>
    <?php 
    if($_GET["fname"]||$_GET["lname"]){
        echo"hi  ".$_GET["fname"]." ".$_GET["lname"];
    }else {
        echo "ooooooooooooops";
    }
    ?>
    <div class="form">
        <form action="" method="get">
            <label>farst name </label><input type="text " name="fname">
            <label>last name </label><input nput type="text " name="lname">
            <button type="submit">rejster </button>
        </form>
    </div>
</bady>

</html>