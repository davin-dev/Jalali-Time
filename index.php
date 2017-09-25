<?
include ('Time.php');
date_default_timezone_set("Asia/Tehran");
$day_number = jdate('j');
$month_number = jdate('n');
$year_number = jdate('y');
$day_name = jdate('l');
echo "امروز $day_name ، $day_number-$month_number-$year_number"."<br>".date("h:i:sA"); //or whatever you want!
?>
