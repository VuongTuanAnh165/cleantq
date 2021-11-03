<!--Start footer top area-->
<section class="footer-top-area" style="background-image:url(images/resources/footer-top-area-bg.jpg);">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="iocn-holder">
                        <span class="flaticon-home"></span>
                    </div>
                    <div class="text-holder">
                        <h3>ĐỊA CHỈ</h3>
                        <p><?php echo $company['company_address'] ?></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="iocn-holder">
                        <span class="flaticon-phone-call"></span>
                    </div>
                    <div class="text-holder">
                        <h3>ĐIỆN THOẠI</h3>
                        <p><a style="color: white;" href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item">
                    <div class="iocn-holder">
                        <span class="flaticon-new-email-outline"></span>
                    </div>
                    <div class="text-holder">
                        <h3>LIÊN HỆ</h3>
                        <p>Email: <a style="color: white;" href="mailto:<?php echo $company['company_email'] ?>"><?php echo $company['company_email'] ?></a></p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End footer top area-->

<!--Start footer area-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mr-right-minus">
                    <div class="title">
                        <h3>THÔNG TIN LIÊN HỆ</h3>
                    </div>
                    <div class="footer-contact-info">
                        <!-- <img src="images/resources/tq_logo.png" style="width:220px;" alt="Logo"> -->
                        <p><b><?php echo $company['company_name'] ?></b></p>
                        <ul>
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="text-holder">
                                    <p><?php echo $company['company_address'] ?></p>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="text-holder">
                                    <p><a style="color:#eb7616;" href="tel:<?php echo $company['company_mobile'] ?>"><?php echo $company['company_mobile'] ?></a></p>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="icon-holder">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="text-holder">
                                    <p><a style="color: #eb7616;" href="mailto:<?php echo $company['company_email'] ?>"><?php echo $company['company_email'] ?></a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pdleft">
                    <div class="title">
                        <h3>Công ty</h3>
                    </div>
                    <ul class="quick-links">
                        <li>
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <a href="<?php echo base_url()?>pages/company/index.php">
                                Giới thiệu
                            </a>
                        </li>
                        <br>
                        <li>
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <a href="<?php echo base_url()?>pages/service_group/index.php">
                                Dịch vụ vệ sinh
                            </a>
                        </li>
                        <br>
                        <li>
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <a href="<?php echo base_url() ?>/pages/post_type/index.php">
                                Tin tức
                            </a>
                        </li>
                        <br>
                        <li>
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <a href="<?php echo base_url() ?>pages/video_clip/index.php">
                                Video Clip
                            </a>
                        </li>
                        <br>
                        <li>
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <a href="<?php echo base_url() ?>pages/user_tb/index.php">
                                Liên hệ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget margintop">
                    <div class="title">
                        <h3>Địa chỉ</h3>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9505761084874!2d105.79740201488353!3d21.034663485995285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab40a938cc61%3A0xc85d3ac4f97150af!2zNjkgRMawxqFuZyBRdeG6o25nIEjDoG0sIFF1YW4gSG9hLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1635911411238!5m2!1svi!2s" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>

<!--Start copyright area-->
<section class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-text text-center">
                    <p>Copyrights © 2021 All Rights Reserved, Powered by <a href="#">T&Q Services</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End copyright area-->



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="<?php echo base_url()?>js/wow.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo base_url()?>js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?php echo base_url()?>js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?php echo base_url()?>js/validation.js"></script>
<!-- mixit up -->
<script src="<?php echo base_url()?>js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?php echo base_url()?>js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="<?php echo base_url()?>js/gmaps.js"></script>
<script src="<?php echo base_url()?>js/map-helper.js"></script>
<!-- fancy box -->
<script src="<?php echo base_url()?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url()?>js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?php echo base_url()?>js/isotope.js"></script>
<script src="<?php echo base_url()?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="<?php echo base_url()?>assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?php echo base_url()?>assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="<?php echo base_url()?>assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?php echo base_url()?>assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="<?php echo base_url()?>assets/html5lightbox/html5lightbox.js"></script>

<!-- revolution slider js -->
<script src="<?php echo base_url()?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url()?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="<?php echo base_url()?>js/custom.js"></script>





</div>
</body>

</html>