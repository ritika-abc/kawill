<?php
include "config.php";
if (isset($_POST['submit'])) {
   $buyer_name = $_POST['buyer_name'];
   $buyer_email = $_POST['buyer_email'];
   $buyer_phone = $_POST['buyer_phone'];
   $enquiry_for = $_POST['enquiry_for'];
   $ins = "INSERT INTO `enquiry`(`buyer_name`,`buyer_email`,`buyer_phone`,`enquiry_for`) values ('$buyer_name','$buyer_email','$buyer_phone','$enquiry_for')";
   $q = mysqli_query($con, $ins);
}
?>
<!-- footer area start -->
<footer>
   <div class="tp-footer-area" data-bg-color="footer-bg-grey">
      <div class="tp-footer-top pt-95 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                  <div class="tp-footer-widget footer-col-1 mb-50">
                     <div class="tp-footer-widget-content">
                        <div class="tp-footer-logo">
                           <a href="/">
                              <img src="./assets/image/logo/logo.jpg" width="200px" alt="logo">
                           </a>
                        </div>
                        <p class="tp-footer-desc">Welcome to Kawill Automation, your trusted partner in advanced control instruments. Established in 2007, we have built a reputation as one of the leading manufacturers and traders of high-quality control solutions. Our extensive .... </p>
                        <div class="tp-footer-social">
                           <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="https://x.com/intent/post?url=https%3A%2F%2Fwww.vmsautocircuit.com%2F"><i class="fa-brands fa-twitter"></i></a>
                           <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-xl-2 col-lg-3 col-md-6  col-sm-12">
                  <div class="tp-footer-widget footer-col-3 mb-50">
                     <h4 class="tp-footer-widget-title">Links</h4>
                     <div class="tp-footer-widget-content">
                        <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="about.php">About Us</a></li>
                           <li><a href="all-category.php">Products</a></li>
                           <li><a href="contact.php">Contact Us</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3  col-md-6 col-sm-12">
                  <div class="tp-footer-widget footer-col-3 mb-50">
                     <h4 class="tp-footer-widget-title">Infomation</h4>
                     <div class="tp-footer-widget-content">
                        <ul>
                           <?php
                           include "config.php";
                           $cat_no = 1;
                           $sel1 = "SELECT * from `categories` limit 5";
                           $q1 = mysqli_query($con, $sel1);
                           while ($row2 = mysqli_fetch_array($q1)) {

                              $cat_name_c = $row2['cat_name'];
                           ?>
                              <li><a href="category.php?cat_name=<?php echo $row2['cat_name']; ?>"><?php echo $row2['cat_name'] ?></a></li>
                           <?php } ?>
                           <hr>
                           <li><a href="all-category.php">All Category... </a></li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="tp-footer-widget footer-col-4 mb-50">
                     <h4 class="tp-footer-widget-title">Talk To Us</h4>
                     <div class="tp-footer-widget-content">
                        <div class="tp-footer-talk mb-20">
                           <span>Got Questions? Call us</span>
                           <h4><a href="tel:+91-8047686865">+91-8047686865</a></h4>
                        </div>
                        <div class="tp-footer-contact">

                           <div class="tp-footer-contact-item d-flex align-items-start">
                              <div class="tp-footer-contact-icon">
                                 <span>
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z"
                                          stroke="currentColor" stroke-width="1.5" />
                                       <path
                                          d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z"
                                          stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                 </span>
                              </div>
                              <div class="tp-footer-contact-content">
                                 <p>Jwalapuri, New Delhi, Delhi</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="tp-footer-bottom">
         <div class="container">
            <div class="tp-footer-bottom-wrapper">
               <div class="row align-items-center">
                  <div class="col-md-12">
                     <div class="tp-footer-copyright">
                        <p>© 2025  All Rights Reserved  <b><a href="/">Kawill Automation</a></b> | This Website is made by   <b><a target="_blank" href="https://arvmedia1998.com/">ARV MEDIA 1998</a></b>.</p>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer area end -->

<script>
        // Get all elements with class 'q' (the three input fields)
        const inputs = document.getElementsByClassName('q');
    
        // Special characters to check for
        const specialCharacters = ['<', '>', '#', '^',  '*' ,'!','~','`','$','(',')'];
    
        // Function to validate input and alert if special characters are detected
        function validateInput(event) {
            const inputValue = event.target.value;
    
            // Check if any special character is found in the input
            for (let char of specialCharacters) {
                if (inputValue.includes(char)) {
                    alert("Special character detected!");
                    event.target.value = "";  // Clear the input value
                    break;  // Stop after the first special character is found
                }
            }
        }
    
        // Add event listener to all inputs
        for (let input of inputs) {
            input.addEventListener('input', validateInput);
        }
    </script>

<!-- JS here -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/waypoints.js"></script>
<script src="assets/js/bootstrap-bundle.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/swiper-bundle.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/range-slider.js"></script>
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/purecounter.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/isotope-pkgd.js"></script>
<script src="assets/js/imagesloaded-pkgd.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/main.js"></script>
</body>



</html>