<?php
include "config.php";
 
$cat_id = $_GET['cat_id'];
$del = "DELETE FROM `categories` WHERE `cat_id`='$cat_id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:add-category.php");
}