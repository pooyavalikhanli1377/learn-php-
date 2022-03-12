<?php


$date = date("l");
function roz($halekarmands=null, $dates)
{
    if ($halekarmands == "good") {
        switch ($dates) {
            case "satrday":
                return "شنبه  ساعت کاری شما تمام وقت هست ";
                break;
            case "Sunday":
                return "یک شنبه  ساعت کاری شما تمام وقت هست ";
                break;
            case "Monday":
                return "دوشنبه  ساعت کاری شما تمام وقت هست ";
                break;
            case "Tuesday":
                return  "سه شنبه  ساعت کاری شما تمام وقت هست ";
                break;
            case "Wednesday":
                return "چهارشنبه  ساعت کاری شما تمام وقت هستید ";
                break;
            case "Thursday":
                return  " پنج شنبه   ساعت کاری شما تمام وقت هست";
                break;
            case "friday":
                return " جمعه تعطیل هستید  ";
                break;
            default:
                return "روزی پیدا نشد ";
        }
    } elseif ($halekarmands == "medium") {
        switch ($dates) {
            case "satrday":
                return "شنبه  ساعت کاری شما تمام وقت هست ";
                break;
            case "Sunday":
                return "یک شنبه  شما دور کار هستید ";
                break;
            case "Monday":
                return "دوشنبه شما امروز پاره وقت هستید ";
                break;
            case "Tuesday":
                return  "سه شنبه شما امروز درو کار هستید ";
                break;
            case "Wednesday":
                return "چهارشنبه  ساعت کاری شما تمام وقت هستید ";
                break;
            case "Thursday":
                return  " پنج شنبه   شما امروز درو کار هستید";
                break;
            case "friday":
                return " جمعه تعطیل هستید  ";
                break;
            default:
                return "روزی پیدا نشد ";
        }
    } else {
        return "برایشما یه مدت 30 روز مزخصی رد شده است ";
    }
}
echo roz($date,null);
