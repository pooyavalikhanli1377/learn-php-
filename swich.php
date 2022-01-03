<?php
$days = date("l");
switch ($days) {
    case "satrday":
        echo "شنبه ".date("d");
        break;
    case "Sunday":
        echo "یکشنبه ".date("l   F Y h:i:s A");
        break;
    case "Monday":
        echo "دوشبه ";
        break;
    case "Tuesday":
        echo "سهشنبه ";
        break;
    case "Wednesday":
        echo "چهارشنبه ";
        break;
    case "Thursday":
        echo "پنج شنبخ ;".date("d");
        break;
    case "friday":
        echo "جمعه ";
        break;

    default:
        echo "روزی پیدا نشد ";
}
