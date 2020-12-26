<?php
SESSION_START();

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
   $url = "https://";
}
else{
   $url = "http://";
}
$url.= $_SERVER['HTTP_HOST']."/aaa";

$req = $_GET['id'];
if (strtoupper($req) == "LOGIN")
{
   include 'view/auth/login.view.php';
   // echo $_SERVER['REQUEST_URI'];
}
else if (strtoupper($req) == "REGISTER")
{
   include 'view/auth/register.view.php';
   // echo $_SERVER['REQUEST_URI'];
}
else
{
    include 'view/404/index.html';
}
//echo $_GET['id'];
