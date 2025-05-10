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
                  <h3 class="breadcrumb__title">Our Categories</h3>
                  <div class="breadcrumb__list">
                     <span><a href="/">Home</a></span>
                     <span>Our Categories</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->



    
   <!-- product category area start -->
   <section class="tp-product-category pt-60 pb-15">
      <div class="container">
         <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-4">
            <?php
            include "config.php";
            $select = "SELECT * from `categories`";
            $qu = mysqli_query($con, $select);
            $s_no = 1;
            while ($row = mysqli_fetch_array($qu)) {

            ?>
               <div class="col">
                  <div class="tp-product-category-item text-center mb-40">
                     <div class="tp-product-category-thumb fix">
                        <a href="category.php?cat_name=<?php echo $row['cat_name']; ?>">
                           <img src="./admin/<?php echo $row['image'] ?>" height="auto" width="70%" alt="product-category">
                        </a>
                     </div>
                     <div class="tp-product-category-content">
                        <h3 class="tp-product-category-title">
                           <a href="category.php?cat_name=<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name'] ?></a>
                        </h3>

                     </div>
                  </div>
               </div>
            <?php } ?>

         </div>
      </div>
   </section>
   <!-- product category area end -->
 
</main>

<?php
include "footer.php";

?>