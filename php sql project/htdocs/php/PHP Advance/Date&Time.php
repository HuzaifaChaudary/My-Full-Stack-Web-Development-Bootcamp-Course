<!DOCTYPE html>
<html>
<body>

<?php 
echo "Today Day and Month is :" . date("d/m/y") . "<br><br>" ;

date_default_timezone_set("America/New_York");
echo "Time is :" . date("h:i:sa") . "<br>" ;