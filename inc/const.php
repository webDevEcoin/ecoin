<?php
const USER = "admin@admin.com";
const PASS = "123456";

$lists = [
    ["email"=>"admin@admin.com","password"=>123456,"role"=>"admin"],
    ["email"=>"user@admin.com","password"=>123456,"role"=>"user"]
];



$lines  = file_get_contents("users.txt");
echo $lines ."<br>";
$x = explode("\n",$lines);
echo "<pre>";
print_r($x);
echo "</pre>";


foreach($x as $l){

    $xl = explode("|",$l);
    echo "<pre>";
print_r($xl);
echo "</pre>";
echo "<hr>";


}
?>