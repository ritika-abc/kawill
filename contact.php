<?php

include "nav.php";

?>
<main>

   <!-- breadcrumb area start -->
   <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content p-relative z-index-1">
                  <h3 class="breadcrumb__title">Keep In Touch with Us</h3>
                  <div class="breadcrumb__list">
                     <span><a href="/">Home</a></span>
                     <span>Contact</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->


   <!-- contact area start -->
   <section class="tp-contact-area pb-100">
      <div class="container">
         <div class="tp-contact-inner">
            <div class="row">
               <div class="col-xl-9 col-lg-8">
                  <div class="tp-contact-wrapper">
                     <h3 class="tp-contact-title">Sent A Message</h3>

                     <div class="tp-contact-form">
                        <form>
                           <div class="tp-contact-input-wrapper">
                              <div class="tp-contact-input-box">
                                 <div class="tp-contact-input">
                                    <input name="name" class="name" id="name" type="text" placeholder="Your Name">
                                 </div>
                                 <div class="tp-contact-input-title">
                                    <label for="name">Your Name</label>
                                 </div>
                              </div>
                              <div class="tp-contact-input-box">
                                 <div class="tp-contact-input">
                                    <input name="email" id="email" class="email" type="email" placeholder="Your Email">
                                 </div>
                                 <div class="tp-contact-input-title">
                                    <label for="email">Your Email</label>
                                 </div>
                              </div>
                              <div class="tp-contact-input-box">
                                 <div class="tp-contact-input">
                                    <input name="number" class="phone" id="phone" type="number" placeholder="Write Your Number">
                                 </div>
                                 <div class="tp-contact-input-title">
                                    <label for="Phone">Phone</label>
                                 </div>
                              </div>
                              <div class="tp-contact-input-box">
                                 <div class="tp-contact-input">
                                    <textarea id="message" class="message" name="message" placeholder="Write your message here..."></textarea>
                                 </div>
                                 <div class="tp-contact-input-title">
                                    <label for="message">Your Message</label>
                                 </div>
                              </div>
                           </div>

                           <div class="tp-contact-btn">
                              <button onclick="contact()">Send Message</button>
                           </div>
                        </form>
                        <p class="ajax-response"></p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4">
                  <div class="tp-contact-info-wrapper">
                     <div class="tp-contact-info-item">
                        <div class="tp-contact-info-icon">
                           <span>
                              <img src="assets/img/contact/contact-icon-1.png" alt="">
                           </span>
                        </div>
                        <div class="tp-contact-info-content">

                           <p data-info="phone"><a href="tel:+91-8047686865">+91-8047686865</a></p>
                        </div>
                     </div>
                     <div class="tp-contact-info-item">
                        <div class="tp-contact-info-icon">
                           <span>
                              <img src="assets/img/contact/contact-icon-2.png" alt="">
                           </span>
                        </div>
                        <div class="tp-contact-info-content">
                           <p>

                              VMS Autocircuit Microsystems Private Limited
                              Ground Floor, Plot No. 142, PKT C, Sec 5, Bawana, Dsidc
                              New Delhi - 110039, Delhi, India

                           </p>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact area end -->

   <!-- map area start -->
   <section class="tp-map-area pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="tp-map-wrapper">
                  <div class="tp-map-hotspot">
                     <span class="tp-hotspot tp-pulse-border">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="6" cy="6" r="6" fill="#821F40" />
                        </svg>
                     </span>
                  </div>
                  <div class="tp-map-iframe">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3496.4238681728657!2d77.07492507550683!3d28.79643997557566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDQ3JzQ3LjIiTiA3N8KwMDQnMzkuMCJF!5e0!3m2!1sen!2sin!4v1746615906508!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- map area end -->

</main>
<script>
   function contact() {
      var na = document.querySelector(".name").value;
      var em = document.querySelector(".email").value;
      var phone = document.querySelector(".phone").value;
      var mes = document.querySelector(".message").value;
      var url1 = "https://wa.me/918046063045?text=" +
         "Name: " + na + "%0A" +
         "Email: " + em + "%0A" +
         "Phone: " + phone + "%0A" +
         "Message: " + mes;
      window.open(url1, "_blank").focus();
   }
</script>
<?php

include "footer.php";

?>