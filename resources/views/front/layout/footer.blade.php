<footer>
    <!-- Footer Start-->
    <div class="footer-area footer bg-dark">
        <br><br><br>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('front/')}}/assets/img/logo/logo2_footer.png" alt="" width="45%"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>{{$config_site->banner_text}}</p>
                                </div>
                            </div>
                            <div class="footer-social">
                                <a href="{{$config_site->twitter_url}}"><i class="fab fa-twitter" style="color: white;"></i></a>
                                <a href="{{$config_site->facebook_url}}"><i class="fab fa-facebook-f" style="color: white;"></i></a>
                                <a href="{{route('homepage')}}"><i class="fas fa-globe" style="color: white;"></i></a>
                            </div>
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm hakları saklıdır
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50228.64125766119!2d35.323704526152376!3d38.110185337897235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152bd0d247874ddd%3A0xf16ed0617ebd6bec!2sYahyal%C4%B1%2C%20Kayseri!5e0!3m2!1str!2str!4v1627407081115!5m2!1str!2str" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!-- Footer bottom -->
<div class="row align-items-center bg-dark">
    <div class="col-xl-12 col-lg-12 col-md-12">

    </div>
    <div class="col-xl-5 col-lg-4 col-md-5">
        <div class="footer-copy-right f-right">
            <!-- social -->

        </div>
    </div>
</div>
</div>
</div>
<!-- Footer End-->
</footer>
<!--? Search model Begin -->

<!-- JS here -->

<script src="{{asset('front/')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('front/')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('front/')}}/assets/js/popper.min.js"></script>
<script src="{{asset('front/')}}/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('front/')}}/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('front/')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('front/')}}/assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{asset('front/')}}/assets/js/wow.min.js"></script>
<script src="{{asset('front/')}}/assets/js/animated.headline.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<!--<script src="{{asset('front/')}}/assets/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.sticky.js"></script> --->

<!-- contact js -->
<script src="{{asset('front/')}}/assets/js/contact.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.form.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.validate.min.js"></script>
<script src="{{asset('front/')}}/assets/js/mail-script.js"></script>
<script src="{{asset('front/')}}/assets/js/jquery.ajaxchimp.min.js"></script>
<!--<script src="{{asset('front/')}}/assets/js/select.js"></script>-->
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script>
    $(document).ready(function() {
        $("#ackapa").click(function() {
            $(".trwpwhatsappballon").toggle(1000);
        });
        $("#kapatac").click(function() {
            $(".trwpwhatsappballon").toggle(1000);
        });
    });
</script>
<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('front/')}}/assets/js/plugins.js"></script>
<script src="{{asset('front/')}}/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>
</html>
