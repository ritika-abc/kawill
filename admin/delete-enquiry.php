<?php
include "config.php";
 
$id = $_GET['id'];
$del = "DELETE FROM `enquiry` WHERE `id`='$id'";
$query = mysqli_query($con, $del);

if ($query) {
    header("location:enquiry.php");
}