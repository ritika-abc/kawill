<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arrds Export Import</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <?php
    include "header.php";
    ?>

    <style>
        .abo {
            background-image: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(image/banner/about.jpg);
            background-size: cover;
            /* background-attachment: fixed; */
            height: 400px;
            width: 100%;
        }

        .fff {
            float: right;
        }

        @media screen and (max-width:576px) {
            .fff {
                width: 100%;
                float: none;
                clear: both;
            }
        }

        @media screen and (max-width:768px) {
            .float_img {
                width: 90%;
            }
        }
    </style>
    <div class="section">
        <div class="abo"></div>
    </div>

    <div class="container  py-5">
        <div class="  text-capitalize">

            <div class="font-math ">
                <div class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        include "config.php";
                        $slug = $_GET['slug'];

                        $sel = "SELECT * FROM `pro` where `slug`='$slug'";
                        $q = mysqli_query($con, $sel);
                        while ($row = mysqli_fetch_array($q)) {


                        ?>
                            <div class="col-12" data-wow-delay="0.1s">
                                <h4 class="  mb-3 "><?php
                                                            echo $row['name'] ?> <hr> </h4>
                                <div stylel="text-align:justify">
                                    <div class="text-center  ">
                                        <img src="image/product/<?php
                                                                echo $row['image'] ?>" class="border float_img mx-4 mb-4 border-3 p-1 border-dark rounded   shadow-lg" height="auto" width="50%" alt="" style="float: right;">
                                    </div>

                                    <div class=" px-3 jus">
                                        <?php
                                        echo $row['content'] ?>
                                    </div>
                                    <a href="" class="btn btn-dark my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Send Enquiry Now</a>
                                </div>

                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>

        </div>
    </div>




    <?php

    include "footer.php";
    ?>