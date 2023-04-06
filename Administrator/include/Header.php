<?php
session_start();
// require_once(".../connect.php");
require_once("C:\\xampp\\htdocs\\Online Hotel Management System Web App\connect.php");
if(!isset($_SESSION['KEY']))
{
   // echo "<script>location.assign('logout.php');</script>"
   Header(location: './logout.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel-Online Hotel Management System</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
   
</head>
    
