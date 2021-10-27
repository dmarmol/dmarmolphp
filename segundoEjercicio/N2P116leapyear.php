<html>
<head>
<title> Is it a leap year? </title>
</head>
<body>
<?php
date_default_timezone_set("America/New_York");
$leapyear = date("L"); //1-> Si es bisiesto / 2-> Si no lo es, debe saltar al else.
if ($leapyear == 1) {
echo "Hooray! It\"s a leap year!";
}
else {
echo "Aww, sorry, mate. No leap year this year.";
}
?>
</body>
</html>
