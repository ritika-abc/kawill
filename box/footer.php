<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#" class="text-white"> Kawill Automation</a>
                    </div>
                    <p>At Kawill Automation, we are a dedicated team of innovators, engineers, and experts committed to advancing the field of control automation.....</p>

                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Pages</h6>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Address</h6>
                    <p class="text-white">Jwalapuri, New Delhi, Delhi
                    </p>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Our Location</h6>
                    <div class="footer__newslatter">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7000.79201637235!2d77.07505359516841!3d28.67779831533778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0440185a9dc5%3A0xd2829752dc655ddf!2sJwalapuri%2C%20Paschim%20Vihar%2C%20Delhi%2C%20110087!5e0!3m2!1sen!2sin!4v1747212326898!5m2!1sen!2sin" class="rounded" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved <a href="#" target="_blank"> Kawill Automation   </a> | This Website is
                        made
                        by <a href="https://arvmedia1998.com/" target="_blank"> ARV MEDIA 1998.</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Kawill Automation</h5>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6 my-2">
                        <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                    </div>
                    <div class="col-12  my-2">
                        <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    function contact() {
        var na = document.querySelector(".name").value;
        var em = document.querySelector(".email").value;
        var phone = document.querySelector(".phone").value;
        var mes = document.querySelector(".message").value;
        var url1 = "https://wa.me/918047686865?text=" +
            "Name: " +
            na + " " +
            "Email: " +
            em + " " +
            "Phone :" + phone +
            "Message :" + mes;
        window.open(url1, "_blank").focus();
    }
</script>

<script>
    function go() {
        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var number = document.querySelector(".number").value;
        var url = "https://wa.me/918047686865?text=" +
            "Name: " +
            name + " " +
            "Number: " +
            number + " " +
            "Email :" + email;
        window.open(url, "_blank").focus();
    }
</script>

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>