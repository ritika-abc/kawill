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
    </style>
    <div class="section">
        <div class="abo"></div>
    </div>
    <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Product</span>
                    <h2> Our Products</h2>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            include "config.php";
            $sel = "SELECT * FROM `pro`";
            $q = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($q)) {
                 

            ?>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top    p-3 shadow-lg rounded " style="height: 400px;">
                        <div class="cat_icon pro_box border border-4 border-dark">
                            <a href="single-product.php?slug=<?php echo $row['slug'] ?>"><img src="image/product/<?php echo $row['image'] ?>"
                            height="250px" width="100%" style="object-fit:cover" alt="<?php echo $row['name'] ?>"></a>
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger text-capitalize"><?php echo $row['name'] ?></div>
                        <a href="" class="btn btn-dark w-100 mt-3" data-toggle="modal" data-target="#exampleModal">Enquiry
                            now</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

   
    <?php
    include "footer.php";
    ?>