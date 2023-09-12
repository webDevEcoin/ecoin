<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="">
   <?php
   $data = [
    "fr"=>"BienVenu",
    "ar"=>"مرحبا",
    "en"=>"Welcom"
   ];

   ?>
<a href="?l=ar">Arabic</a>
<a href="?l=fr">Franch</a>
<a href="?l=en">English</a>

<?php
$lang = (isset($_COOKIE['lang']))?$_COOKIE['lang']:"fr";
$cl = (isset($_GET['l']))?$_GET['l']:$lang;
setcookie("lang",$cl ,time()+60);

echo "<h3>$data[$cl]</h3>";

//session
//file

//SQL

?>

<form action="" method="get">
<input type="submit" name="send" value="ok">
</form>

</body>
</html>