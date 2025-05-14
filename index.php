<?php
include "nav.php";
?>
<main>

   <!-- slider area start -->
   <section class="tp-slider-area p-relative z-index-1">
      <div class="tp-slider-active tp-slider-variation swiper-container">
         <div class="swiper-wrapper">
            <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">

               <div class="container">
                  <div class="row justify-content-center text-center align-items-center">
                     <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="tp-slider-content p-relative z-index-1">
                           <span>We are <q>Kawill Automation</q></span>

                           <h3 class="tp-slider-title">Leading the Future of Control Automation</h3>


                           <div class="tp-slider-btn">
                              <a href="trl:+91-8047686865" class="tp-btn tp-btn-2 tp-btn-white">+91-8047686865
                                 <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                                       stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                                       stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">

               <div class="container">
                  <div class="row justify-content-center text-center align-items-center">
                     <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="tp-slider-content p-relative z-index-1">
                           <span>Durable, Low-Maintenance Control Instruments for Every Need</span>

                           <h3 class="tp-slider-title">Discover the Future of Automation</h3>


                           <div class="tp-slider-btn">
                              <a href="trl:+91-8047686865" class="tp-btn tp-btn-2 tp-btn-white">+91-8047686865
                                 <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                                       stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                                       stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>

         </div>
         <div class="tp-slider-arrow tp-swiper-arrow d-none d-lg-block">
            <button type="button" class="tp-slider-button-prev">
               <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
            <button type="button" class="tp-slider-button-next">
               <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" />
               </svg>
            </button>
         </div>
         <div class="tp-slider-dot tp-swiper-dot"></div>
      </div>
   </section>
   <!-- slider area end -->

   <!-- product category area start -->
   <div class="">
      <section class="tp-product-category pt-60 pb-15">
         <div class="container">
            <div class=" " style="width: 100%;overflow-x:auto;scrollbar-width: thin;">
               <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-4  flex-nowrap">
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
         </div>
      </section>
   </div>
   <!-- product category area end -->

   <!-- feature area start -->
   <section class="tp-feature-area tp-feature-border-radius pb-70">
      <div class="container">
         <div class="row gx-1 gy-1 gy-xl-0">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
               <div class="tp-feature-item d-flex align-items-start">
                  <div class="tp-feature-icon mr-15">
                     <span>
                        <svg width="33" height="27" viewBox="0 0 33 27" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M10.7222 1H31.5555V19.0556H10.7222V1Z" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M10.7222 7.94446H5.16667L1.00001 12.1111V19.0556H10.7222V7.94446Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                           <path
                              d="M25.3055 26C23.3879 26 21.8333 24.4454 21.8333 22.5278C21.8333 20.6101 23.3879 19.0555 25.3055 19.0555C27.2232 19.0555 28.7778 20.6101 28.7778 22.5278C28.7778 24.4454 27.2232 26 25.3055 26Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                           <path
                              d="M7.25001 26C5.33235 26 3.77778 24.4454 3.77778 22.5278C3.77778 20.6101 5.33235 19.0555 7.25001 19.0555C9.16766 19.0555 10.7222 20.6101 10.7222 22.5278C10.7222 24.4454 9.16766 26 7.25001 26Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-feature-content">
                     <h3 class="tp-feature-title">Export Services</h3>
                     <p>Reach Globally</p>
                  </div>
               </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
               <div class="tp-feature-item d-flex align-items-start">
                  <div class="tp-feature-icon mr-15">
                     <span>
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <mask id="mask0_1211_583" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                              width="31" height="30">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30.0024V29.9998H0V0Z"
                                 fill="white" />
                           </mask>
                           <g mask="url(#mask0_1211_583)">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M13.4168 27.1116C14.3017 27.9756 15.7266 27.9651 16.6056 27.0816L17.6885 26.0017C18.5285 25.1632 19.6894 24.6848 20.8728 24.6848H22.4178C23.6687 24.6848 24.6856 23.6678 24.6856 22.4184V20.875C24.6856 19.6736 25.1506 18.5441 25.9995 17.6937L27.0795 16.6122C27.519 16.1713 27.7544 15.5998 27.7529 14.9938C27.7514 14.3894 27.513 13.8209 27.0825 13.3919L26.001 12.309C25.1506 11.4525 24.6856 10.3246 24.6856 9.12318V7.58277C24.6856 6.33184 23.6687 5.3149 22.4178 5.3149H20.8758C19.6744 5.3149 18.545 4.84842 17.6945 4.00397L16.6116 2.91954C15.7101 2.02709 14.2717 2.03159 13.3913 2.91804L12.3128 3.99947C11.4519 4.84992 10.3225 5.3149 9.12553 5.3149H7.58212C6.33269 5.3164 5.31575 6.33334 5.31575 7.58277V9.12018C5.31575 10.3216 4.84927 11.451 4.00332 12.303L2.93839 13.3694C2.92789 13.3814 2.91739 13.3904 2.90689 13.4009C2.02644 14.2874 2.03094 15.7258 2.91739 16.6062L4.00032 17.6892C4.84927 18.5411 5.31575 19.6706 5.31575 20.872V22.4184C5.31575 23.6678 6.33119 24.6848 7.58212 24.6848H9.12253C10.3255 24.6863 11.4549 25.1527 12.3053 26.0002L13.3868 27.0786C13.3958 27.0891 13.4063 27.0996 13.4168 27.1116ZM14.9972 30.0002C13.8468 30.0002 12.6963 29.5652 11.8159 28.6923C11.8039 28.6803 11.7919 28.6683 11.7799 28.6548L10.715 27.5914C10.2905 27.1699 9.72352 26.9359 9.12055 26.9344H7.58164C5.09029 26.9344 3.06541 24.908 3.06541 22.4182V20.8717C3.06541 20.2688 2.82992 19.7033 2.40694 19.2773L1.32851 18.2004C-0.423392 16.4575 -0.444391 13.6197 1.27601 11.8498C1.28951 11.8363 1.30301 11.8228 1.31651 11.8093L2.40844 10.7143C2.82992 10.2899 3.06541 9.72139 3.06541 9.11993V7.58252C3.06541 5.09266 5.09029 3.06628 7.58014 3.06478H9.12505C9.72652 3.06478 10.2935 2.82929 10.724 2.40482L11.7964 1.32938C13.5498 -0.436017 16.4161 -0.445016 18.1845 1.31288L19.281 2.40932C19.7054 2.83079 20.2724 3.06478 20.8754 3.06478H22.4173C24.9086 3.06478 26.935 5.09116 26.935 7.58252V9.12293C26.935 9.72439 27.169 10.2929 27.5935 10.7203L28.6704 11.7988C29.5239 12.6462 29.9978 13.7787 30.0023 14.9861C30.0068 16.1935 29.5404 17.329 28.6899 18.1854L27.5905 19.2818C27.169 19.7063 26.935 20.2718 26.935 20.8747V22.4182C26.935 24.908 24.9086 26.9344 22.4188 26.9344H20.8724C20.2784 26.9344 19.6979 27.1744 19.2765 27.5929L18.1995 28.6698C17.3191 29.5562 16.1581 30.0002 14.9972 30.0002Z"
                                 fill="currentColor" />
                           </g>
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M11.145 19.9811C10.857 19.9811 10.569 19.8716 10.3501 19.6511C9.91058 19.2116 9.91058 18.5006 10.3501 18.0612L18.0596 10.3501C18.4991 9.91064 19.2115 9.91064 19.651 10.3501C20.0905 10.7896 20.0905 11.502 19.651 11.9415L11.94 19.6511C11.721 19.8716 11.433 19.9811 11.145 19.9811Z"
                              fill="currentColor" />
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M18.7544 20.2476C17.925 20.2476 17.247 19.5772 17.247 18.7477C17.247 17.9183 17.9115 17.2478 18.7409 17.2478H18.7544C19.5839 17.2478 20.2543 17.9183 20.2543 18.7477C20.2543 19.5772 19.5839 20.2476 18.7544 20.2476Z"
                              fill="currentColor" />
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M11.2548 12.748C10.4254 12.748 9.74744 12.0775 9.74744 11.2481C9.74744 10.4186 10.4119 9.74817 11.2413 9.74817H11.2548C12.0843 9.74817 12.7548 10.4186 12.7548 11.2481C12.7548 12.0775 12.0843 12.748 11.2548 12.748Z"
                              fill="currentColor" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-feature-content">
                     <h3 class="tp-feature-title">Quality Control & Testing</h3>
                     <p>We prioritize the quality of our products</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
               <div class="tp-feature-item d-flex align-items-start">
                  <div class="tp-feature-icon mr-15">
                     <span>
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M1.5 24.3333V15C1.5 11.287 2.975 7.72602 5.60051 5.10051C8.22602 2.475 11.787 1 15.5 1C19.213 1 22.774 2.475 25.3995 5.10051C28.025 7.72602 29.5 11.287 29.5 15V24.3333"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                           <path
                              d="M29.5 25.8889C29.5 26.714 29.1722 27.5053 28.5888 28.0888C28.0053 28.6722 27.214 29 26.3889 29H24.8333C24.0082 29 23.2169 28.6722 22.6335 28.0888C22.05 27.5053 21.7222 26.714 21.7222 25.8889V21.2222C21.7222 20.3971 22.05 19.6058 22.6335 19.0223C23.2169 18.4389 24.0082 18.1111 24.8333 18.1111H29.5V25.8889ZM1.5 25.8889C1.5 26.714 1.82778 27.5053 2.41122 28.0888C2.99467 28.6722 3.78599 29 4.61111 29H6.16667C6.99179 29 7.78311 28.6722 8.36656 28.0888C8.95 27.5053 9.27778 26.714 9.27778 25.8889V21.2222C9.27778 20.3971 8.95 19.6058 8.36656 19.0223C7.78311 18.4389 6.99179 18.1111 6.16667 18.1111H1.5V25.8889Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-feature-content">
                     <h3 class="tp-feature-title">Technical Support</h3>
                     <p>Our team is always ready to assist you.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- feature area end -->

   <!-- product area start -->
   <section class="tp-product-area pb-55">
      <div class="container">
         <div class="row align-items-end">
            <div class="col-xl-5 col-lg-6 col-md-5">
               <div class="tp-section-title-wrapper mb-40">
                  <h3 class="tp-section-title">Trending Products

                     <svg width="114" height="35" viewBox="0 0 114 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor"
                           stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round" />
                     </svg>
                  </h3>
               </div>
            </div>

         </div>
         <div class="row">

            <div class="col-xl-12">
               <div class="tp-product-tab-content">
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel"
                        aria-labelledby="new-tab" tabindex="0">
                        <div class="row">
                           <?php
                           include "config.php";
                           $select = "SELECT * from `product` limit  8";
                           $qu = mysqli_query($con, $select);
                           $s_no = 1;
                           while ($row = mysqli_fetch_array($qu)) {
                              $image_list = json_decode($row['image'], true); // true to get an associative array
                              $name = $row['name'];
                              $name_url = strtolower(str_replace(' ', "-", $name));
                           ?>
                              <div class="col-xl-3 col-lg-3 my-4 col-sm-6">
                                 <div class="tp-product-item p-relative transition-3 mb-25">
                                    <div class="tp-product-thumb p-relative fix m-img">
                                       <?php
                                       $s = 1;
                                       foreach ($image_list as $image) {

                                       ?>

                                          <div class="text-center ">
                                             <img src="./admin/<?php echo $image ?>" class="pro_img-1  "  style="object-fit:cover" height="213px" width="226px"  alt="product-electronic">
                                          </div>

                                          <?php
                                          if ($s == 1) {
                                             break;
                                          }
                                          ?>
                                       <?php $s++;
                                       } ?>




                                       <!-- product action -->
                                       <div class="tp-product-action">

                                       </div>
                                    </div>
                                    <!-- product content -->
                                    <div class="tp-product-content">
                                       <div class="tp-product-category">
                                          <a href="category.php?cat_name=<?php echo $row['cat_name']; ?>#<?php echo $name_url ?>" class="text-primary"><?php echo $row['cat_name'] ?></a>
                                       </div>
                                       <div class="tp-product-price-wrapper">

                                          <span class="tp-product-price new-price text-danger">₹ <?php echo $row['price'] ?></span>
                                       </div>
                                       <h3 class="tp-product-title" style="height: 70px;">

                                          <?php echo $row['name'] ?>

                                       </h3>


                                       <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $s_no ?>" class="tp-btn tp-btn-2 tp-btn-blue mt-3">Enquiry Now
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>


                                       <div class="modal fade" id="exampleModal<?php echo  $s_no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


                           <?php
                              $s_no++;
                           } ?>
                        </div>
                     </div>

                  </div>
               </div>
            </div>

         </div>

      </div>
   </section>
   <!-- product area end -->

   <!-- banner area start -->
   <section class="tp-banner-area py-5   pb-70" style="    background-image:linear-gradient(45deg, #3d2200, #f98a00)">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6  my-4">
               <h4 class="fs-2 text-white">Leading the Future of Control Automation</h4>
               <p class="text-white">Welcome to Kawill Automation, your trusted partner in advanced control instruments. Established in 2007, we have built a reputation as one of the leading manufacturers and traders of high-quality control solutions. Our extensive product range includes Photocells, Clutch & Brake Controllers, Photocell Clutch & Brake Controllers, Rotary Coding Controllers, Digital Photo Electric Control Panels, Coding Stop Sensors, Clutch & Brake Control Panel Fork Sensors, Relay Cards, and more.</p>
               <a href="#" class="tp-btn tp-btn-2 tp-btn-blue mt-3">About Us
                  <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
               </a>
            </div>
            <div class="col-xl-6 col-lg-6 my-4">
               <img src="assets/image/banner/about-us.jpg" height="auto" width="100%" class="rounded border p-1 border-white border-2" alt="">
            </div>

         </div>
      </div>
   </section>
   <!-- banner area end -->

   <?php
   include "config.php";
   $cat_no = 1;
   $sel1 = "SELECT * from `categories`";
   $q1 = mysqli_query($con, $sel1);
   while ($row2 = mysqli_fetch_array($q1)) {

      $cat_name_c = $row2['cat_name'];
   ?>

      <section class="tp-product-gadget-area my-5">
         <div class="container py-3" style="background-color: #afb1af21;">
            <div class="row">
               <h3 class="tp-product-gadget-categories-title  "><?php echo $row2['cat_name'] ?></h3>

               <div class="col-xl-12 col-lg-12">
                  <div class="tp-product-gadget-wrapper">
                     <div class="row">
                        <?php
                        $sel_pro = "SELECT * from `product` where `cat_name`='$cat_name_c'  limit 8 ";
                        $qq1 = mysqli_query($con, $sel_pro);
                        $s_no = 1;
                        while ($sel_pro = mysqli_fetch_array($qq1)) {
                           $image_list = json_decode($sel_pro['image'], true); // true to get an associative array
                           $name = $sel_pro['name'];
                           $name_url = strtolower(str_replace(' ', "-", $name));
                        ?>
                           <div class="col-xl-3 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">

                                    <?php
                                    $s = 1;
                                    foreach ($image_list as $image) {

                                    ?>
                                       <a href="category.php?cat_name=<?php echo $sel_pro['cat_name']; ?>#<?php echo $name_url ?>">

                                          <img src="./admin/<?php echo $image ?>" class="pro_img" alt="<?php echo $image ?>">
                                       </a>
                                       <?php
                                       if ($s == 1) {
                                          break;
                                       }
                                       ?>

                                    <?php $s++;
                                    } ?>



                                 </div>

                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price text-danger">₹ <?php echo $sel_pro['price'] ?></span>
                                    </div>
                                    <div class="tp-product-category">
                                       <a href="category.php?cat_name=<?php echo $sel_pro['cat_name']; ?>#<?php echo $name_url ?>"><?php echo $sel_pro['cat_name'] ?></a>
                                    </div>
                                    <h3 class="tp-product-title" style="height: 65px;">

                                       <?php echo $sel_pro['name'] ?>

                                    </h3>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $s_no . $cat_no  ?>" class="tp-btn tp-btn-2 tp-btn-blue mt-3">Enquiry Now
                                       <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </a>


                                    <div class="modal fade" id="exampleModal<?php echo  $s_no . $cat_no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h4><?php echo $sel_pro['name'] ?></h4>

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
                        <?php $s_no++;
                        } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php $cat_no++;
   } ?>
   <!-- product banner area start -->



   <!-- service-->
   <section class="tp-work-area pt-115 pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-6">
               <div class="tp-work-section-title-wrapper text-center mb-60">
                  <h3 class="tp-work-section-title">Our Services</h3>
                  <p>At Kawill Automation, we are dedicated to providing exceptional services that meet the diverse needs of our clients. With years of experience in the industry, we specialize in delivering reliable, efficient, and customized automation solutions. Our services are designed to help businesses optimize their operations through advanced control instruments and expert support.</p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="tp-work-item mb-35 text-center">
                  <div class="tp-work-icon d-flex align-items-end justify-content-center">
                     <span>
                        <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M41 37.14V21.36C41 10.16 32 1 21 1C10 1 1 10.16 1 21.36V37.14C1 39.66 2.49997 40.34 4.33997 38.66L6.33997 36.84C7.07997 36.16 8.28002 36.16 9.02002 36.84L13.02 40.5C13.76 41.18 14.96 41.18 15.7 40.5L19.7 36.84C20.44 36.16 21.64 36.16 22.38 36.84L26.38 40.5C27.12 41.18 28.3201 41.18 29.0601 40.5L33.0601 36.84C33.8001 36.16 35 36.16 35.74 36.84L37.74 38.66C39.5 40.34 41 39.66 41 37.14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M13 25C17.74 28.56 24.26 28.56 29 25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M21 19C23.2091 19 25 17.2091 25 15C25 12.7909 23.2091 11 21 11C18.7909 11 17 12.7909 17 15C17 17.2091 18.7909 19 21 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-work-content">
                     <h3 class="tp-work-title">Quality Assurance</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="tp-work-item mb-35 text-center">
                  <div class="tp-work-icon  d-flex align-items-end justify-content-center">
                     <span>
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M30.4302 34.9645H11.7143C10.8781 34.9645 9.94231 34.305 9.66356 33.5056L1.42062 10.363C0.245898 7.04547 1.61972 6.02623 4.44701 8.0647L12.2121 13.6405C13.5063 14.5398 14.9797 14.0802 15.5372 12.6213L19.0414 3.24831C20.1564 0.250562 22.0081 0.250562 23.1231 3.24831L26.6273 12.6213C27.1848 14.0802 28.6582 14.5398 29.9325 13.6405L37.2197 8.42443C40.3257 6.18611 41.819 7.32526 40.5447 10.9425L32.5009 33.5456C32.2022 34.305 31.2665 34.9645 30.4302 34.9645Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M10.1211 40.9998H32.0226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M16.0942 25.012H26.0495" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-work-content">
                     <h3 class="tp-work-title">Experienced Team</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="tp-work-item mb-35 text-center">
                  <div class="tp-work-icon d-flex align-items-end justify-content-center">
                     <span>
                        <svg width="42" height="44" viewBox="0 0 42 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M2.42554 20.1025V29.4052C2.42554 38.7079 6.15491 42.4373 15.4576 42.4373H26.625C35.9277 42.4373 39.6571 38.7079 39.6571 29.4052V20.1025" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M21.052 21.7187C24.8435 21.7187 27.6405 18.6316 27.2676 14.8401L25.9001 1H16.2245L14.8363 14.8401C14.4634 18.6316 17.2604 21.7187 21.052 21.7187Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M34.1251 21.7187C38.3103 21.7187 41.3767 18.3209 40.9623 14.1564L40.3822 8.45874C39.6363 3.07187 37.5644 1 32.1361 1H25.8169L27.2672 15.5238C27.6194 18.9424 30.7065 21.7187 34.1251 21.7187Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M7.87469 21.7187C11.2933 21.7187 14.3804 18.9424 14.7119 15.5238L15.1677 10.945L16.1622 1H9.84297C4.41466 1 2.34279 3.07187 1.59692 8.45874L1.03751 14.1564C0.623137 18.3209 3.68951 21.7187 7.87469 21.7187Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M21.052 32.0781C17.592 32.0781 15.8723 33.7978 15.8723 37.2578V42.4375H26.2317V37.2578C26.2317 33.7978 24.512 32.0781 21.052 32.0781Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-work-content">
                     <h3 class="tp-work-title">Custom Solutions</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="tp-work-item mb-35 text-center">
                  <div class="tp-work-icon d-flex align-items-end justify-content-center">
                     <span>
                        <svg width="43" height="53" viewBox="0 0 43 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M21.0019 15.9417L18.2894 20.6568C17.681 21.6962 18.188 22.5581 19.3795 22.5581H22.599C23.8158 22.5581 24.2975 23.42 23.689 24.4594L21.0019 29.1745" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M11.6218 41.6723V38.7317C5.79122 35.208 1 28.338 1 21.0371C1 8.4887 12.5344 -1.34724 25.5645 1.492C31.2937 2.75952 36.313 6.56208 38.9241 11.8096C44.2224 22.4568 38.6453 33.763 30.4571 38.7063V41.647C30.4571 42.3821 30.736 44.0806 28.0235 44.0806H14.0554C11.2669 44.106 11.6218 43.0159 11.6218 41.6723Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M12.1292 51.7112C17.9344 50.0634 24.0692 50.0634 29.8744 51.7112" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-work-content">
                     <h3 class="tp-work-title">Global Reach</h3>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- service end -->




   <!-- subscribe area start -->
   <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">

      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
               <div class="tp-subscribe-content">
                  <span>Call Now</span>
                  <h3 class="tp-subscribe-title">+91-8047686865</h3>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!-- subscribe area end -->


</main>

<?php
include "footer.php";
?>