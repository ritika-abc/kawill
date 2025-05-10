<?php
include "nav.php";
?>

<main>

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title"><?php echo $_GET['cat_name']; ?></h3>
                        <div class="breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span><?php echo $_GET['cat_name']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <?php
    // Database connection (update these details based on your actual database credentials)
    include "config.php";

    ?>

    <!-- Shop Area Start -->
    <section class="tp-shop-area pb-120">
        <div class="container">
            <div class="row">

                <?php
                $cat_name = $_GET['cat_name'];
                include "config.php";
                $b = 1;
                $select = "SELECT * from `product` where `cat_name` = '$cat_name' ";
                $qu = mysqli_query($con, $select);
                $s_no = 1;
                while ($row = mysqli_fetch_array($qu)) {
                    $image_list = json_decode($row['image'], true); // true to get an associative array
                    $name = $row['name'];
                    $name_url = strtolower(str_replace(' ',"-",$name));
                ?>
                    <div class="col-xl-12 my-3 " id="<?php echo $name_url ?>">
                        <div class="tp-product-details-top  rounded shadow-sm py-5  border">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                                            <nav>
                                                <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                                                    <?php
                                                    $s = 1;
                                                    foreach ($image_list as $image) {

                                                    ?>
                                                        <button class="nav-link <?php echo ($s  == 1) ? 'active' : ''; ?>" id="nav-<?php echo $s ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo $s.$b ?>" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                                            <img src="./admin/<?php echo $image ?>" alt="">
                                                          
                                                        </button>

                                                    <?php $s++;
                                                    } ?>



                                                </div>
                                            </nav>
                                            <div class="tab-content m-img w-100 " id="productDetailsNavContent">
                                                <?php
                                                $s = 1;
                                                foreach ($image_list as $image) {

                                                ?>
                                                    <div style="width: 100%; " class="tab-pane border p-2 shadow-sm rounded fade   <?php echo ($s  == 1) ? 'show active' : ''; ?> " id="nav-<?php echo $s.$b ?>" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                                        <div class="tp-product-details-nav-main-thumb  text-center">
                                                            <img src="./admin/<?php echo $image ?>"     alt="">
                                                        </div>
                                                    </div>

                                                <?php $s++;
                                                } ?>

                                            </div>
                                        </div>
                                    </div> <!-- col end -->
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-details-wrapper">
                                            <div class="tp-product-details-category">
                                                <span><?php echo $row['cat_name'] ?></span>
                                            </div>

                                            <h4 class=" "><?php echo $row['name'] ?></h4>

                                            <!-- inventory details -->
                                            <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                                <div class="tp-product-details-stock mb-10">
                                                    <span class="fs-5"><b><i>₹ <?php echo $row['price'] ?></i></b></span>
                                                </div>
                                                <div class="tp-product-details-price-wrapper mb-20 mt-3">

                                                    <span class="tp-product-details-price new-price"></span>
                                                </div>

                                            </div>
                                            <div class="">
                                                <?php
                                                echo $row['content'] ?>
                                            </div>

                                            <!-- price -->


                                            <!-- variations -->
                                            <div class="tp-product-details-variation">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $b ?>" class="tp-btn tp-btn-2 tp-btn-blue mt-3">Enquiry Now
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>


                                       <div class="modal fade" id="exampleModal<?php echo  $b ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h4><?php echo $row['name'] ?></h4>

                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="" method="post"> <!-- Move form tag here -->
                                                   <div class="modal-body">
                                                      <div class="container">
                                                         <div class="row">
                                                            <div class="col-lg-4">
                                                               <?php
                                                               $s = 1;
                                                               foreach ($image_list as $image) {

                                                               ?>


                                                                  <img src="./admin/<?php echo $image ?>" class="rounded" height="200px" width="100%" style="object-fit: cover;" alt="">

                                                                  <?php
                                                                  if ($s == 1) {
                                                                     break;
                                                                  }
                                                                  ?>
                                                               <?php $s++;
                                                               } ?>


                                                            </div>
                                                            <div class="col-lg-8">

                                                               <input type="text" placeholder="Name" name="buyer_name" class="form-control my-2 q">
                                                               <input type="email" name="buyer_email" placeholder="Email" class="form-control my-2 ">
                                                               <input type="number" name="buyer_phone" placeholder="Number" class="form-control my-2">
                                                               <small>We will contact you on this number</small>
                                                               <input type="hidden" readonly name="enquiry_for" placeholder="Enquiry Product Name" value="<?php echo $name ?>" class="form-control my-2 q">
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="submit" name="submit" class="btn btn-primary">Send Enquiry</button>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $b++ ; } ?>
            </div>
        </div>
    </section>
    <!-- Shop Area End -->

    </div>
    </section>
    <!-- shop area end -->

    
</main>

<?php
include "footer.php";
?>