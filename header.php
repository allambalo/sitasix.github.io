 <?php
    $time = date("H");
    $timezone = date("e");
    if ($time < "12") {
        echo "GOOD MORNING KHOJIAKBAR!";
    } else
    if ($time >= "12" && $time < "17") {
        echo "GOOD AFTERNOON KHOJIAKBAR";
    } else
    if ($time >= "17" && $time < "19") {
        echo "GOODEVENING SIR!";
    } else
    if ($time >= "19") {
        echo "GOODNIGHT KHOJIAKBAR!";
    }
?>