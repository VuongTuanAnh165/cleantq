<?php require_once(__DIR__ . '/layout/header.php'); ?>

<?php
require_once(__DIR__ . '/autoload/autoload.php');
//service_gr_rand (nhóm dịch vụ ngẫu nhiên)
$sql_service_group_rand = "SELECT * FROM service_group WHERE service_gr_active=1 ORDER BY RAND() LIMIT 4";
$service_group_rand = $db->fetchdata($sql_service_group_rand);

//pages_img_rand (nhóm dịch vụ ngẫu nhiên)
$sql_pages_img_rand = "SELECT * FROM pages_img WHERE pages_img_gr_id=1 ORDER BY RAND() LIMIT 6";
$pages_img_rand = $db->fetchdata($sql_pages_img_rand);

//post_new (tin tức mới)
$sql_post_new = "SELECT * FROM post WHERE post_active=1 ORDER BY post_datetime_update LIMIT 3";
$post_new = $db->fetchdata($sql_post_new);
?>

<!--Start rev slider wrapper-->
<section class="rev_slider_wrapper">
    <!-- <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            
            <li data-transition="slidingoverlayleft">
                <img src="images/slides/slider_1.png"  alt="" width="1920" height="900" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="325" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <p>Welcome to Hanover Cleaning</p>
                        <h1>WE ARE HANOVER CLEANING SERVICE<br>PROFESSION OVER 25 YEARS</h1>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="532" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">CONTACT US</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="right" data-hoffset="-200" 
                    data-y="top" data-voffset="113" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="img-holder">
                            <img src="images/slides/slide-image.png" alt="Awesome Image">    
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="images/slides/slider_2.jpg" alt="" width="1920" height="900" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption tp-resizeme slogan"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-105" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-start="500">
                    <div class="slide-content-box">
                        <div class="slide-logo">
                            <a href="#">
                                <img src="images/slides/slider-logo.png" alt="Awesome Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="40" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box middle-slide">
                        <h1>CLEANING & ORGANIZING IS NOT A PROJECT<br> ITS OUR PROFESSION</h1>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="138" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box middle-slide">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">PURCHASE NOW</a>     
                            <a class="thm-btn contact" href="#">CONTACT US</a>     
                        </div>    
                    </div>
                </div>
            </li>
            <li data-transition="slidingoverlayright">
                <img src="images/slides/3.jpg"  alt="" width="1920" height="900" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption tp-resizeme slogan"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-110" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-start="500">
                    <div class="slide-content-box">
                        <div class="cleaning-service">
                            <h3>HANOVER CLEANING SERVICE</h3>
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-7" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box last-slide">
                        <h1>we provide INDEPTH house cleaning services<br>for our valued clients</h1>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="101" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">GET QUOTES</a>       
                        </div>    
                    </div>
                </div>
            </li>
        </ul>
    </div> -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slides/slider_1.png" alt="Slider_1" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/slides/slider_2.jpg" alt="Slider_2" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/slides/slider_3.png" alt="Slider_3" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--End rev slider wrapper-->

<!--Start welcome area-->
<!-- <section class="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="text-holder">
                    <div class="sec-title">
                        <h1>CÔNG TY CỔ PHẦN THƯƠNG MẠI – DỊCH VỤ VÀ SẢN XUẤT T&Q</h1>
                        <span class="border"></span>
                        <p>CHUYÊN NGHIỆP – TINH NHUỆ - HIỆU QUẢ - THÂN THIỆN</p>
                    </div>
                    <div class="row">
                   
                        <div class="col-md-4">
                            <div class="single-item">
                                <div class="iocn">
                                    <span class="flaticon-teeth-cleaning"></span>
                                </div>
                                <div class="text">
                                    <h3>Chúng tôi là?</h3>
                                    <p>Một trong
                                        những công ty uy tín nhất hoạt động trong lĩnh vực làm sạch chuyên nghiệp, duy trì cảnh quan và cho thuê các loại máy công trình, máy vệ sinh môi trường</p>
                                    <a href="#">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-4">
                            <div class="single-item">
                                <div class="iocn">
                                    <span class="flaticon-paint-brush"></span>
                                </div>
                                <div class="text">
                                    <h3>OUR MISSION</h3>
                                    <p>The ship set ground on the shore of this Now the world do a not  beat of just one drum.</p>
                                    <a href="#">READ MORE<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
               
                        <div class="col-md-4">
                            <div class="single-item">
                                <div class="iocn">
                                    <span class="flaticon-spray"></span>
                                </div>
                                <div class="text">
                                    <h3>OUR VISION</h3>
                                    <p>The ship set ground on the shore of this Now the world do a not  beat of just one drum.</p>
                                    <a href="#">READ MORE<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
              
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-holder wow slideInRight">
                    <img src="images/resources/about_us.png" alt="Awesome Image">
                </div>
            </div>    
        </div>
    </div>
</section>  -->
<!--End welcome area-->

<!--Start service v2 area-->
<section class="service-v2-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>Về chúng tôi</h1>
            <!-- <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div> -->
            <p><?php echo $company['company_description'] ?></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="service-left">
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-wiping-swipe-for-floors"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>CHUYÊN NGHIỆP</h3>
                                    <p>T&Q Services lên bảng kế hoạch làm việc và tổ chức vận hành công tác làm sạch một cách khoa học với đầy đủ chuyên môn, nghiệp vụ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-cleaning-mop"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>TINH NHUỆ</h3>
                                    <p>Chính là sự thể hiện của tính chuyên nghiệp nhằm đưa ra phương án tối ưu trong công tác làm sạch, là khả năng đáp ứng nhu cầu cao trong mọi điều kiện.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-v2-img-box">
                    <img src="<?php echo base_img('company') . $company['company_img'] ?>" alt="Awesome Image">
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-right">
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-paint-brush"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>HIỆU QUẢ</h3>
                                    <p>Chúng tôi luôn đưa ra các giải pháp dịch vụ tối ưu, phù hợp với yêu cầu và đặc điểm kinh doanh của quý khách hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-service-v2-item hvr-float-shadow text-center">
                                <div class="icon-holder">
                                    <span class="flaticon-teeth-cleaning"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>THÂN THIỆN</h3>
                                    <p>Với việc sử dụng các dụng cụ, thiết bị hóa chất, an toàn, thân thiện mang đến cho khách hàng môi trường làm việc trong lành.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End service v2 area-->

<!--Start express quote area-->
<section class="express-quote-area" style="background-image:url(images/resources/express-quote-area-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-holder">
                    <div class="sec-title text-right">
                        <h1>Đăng ký dịch vụ </h1>
                        <span class="border"></span>
                    </div>
                    <div class="text">
                        <p>Quý khách hàng có nhu cầu sử dụng dịch vụ có thể liên hệ theo mẫu sau</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form method="POST" id="quote-form" action="./pages/user_tb/index.php">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="user_name" value="" placeholder="Họ và tên*" required="">
                            <input type="text" name="user_number_phone" value="" placeholder="Số điện thoại*" required="">
                            <select class="selectmenu">
                                <?php foreach ($service_group as $item) : ?>
                                    <option value="<?php echo $item['service_gr_id'] ?>">
                                        <?php echo $item['service_gr_name'] ?></option>
                                <? endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="user_address" value="" placeholder="Địa chỉ" required="">
                            <input type="email" name="user_email" value="" placeholder="Email*">
                            <button class="thm-btn bg-clr1" type="submit">Gửi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End express quote area-->

<!--Start what we do area-->
<section class="what-we-do-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>DỊCH VỤ VỆ SINH</h1>
            <!-- <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div> -->
            <p>T&Q Services cung cấp nhiều dịch vụ vệ sinh trọn gói, quý khách có thể dễ dàng lựa chọn để sử dụng</p>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="wedo-carousel">
                    <div class="single-item">
                        <img src="images/whatwe-do/2.jpg" alt="Awesome Image">
                    </div>
                    <div class="single-item">
                        <img src="images/whatwe-do/2.jpg" alt="Awesome Image">
                    </div>
                    <div class="single-item">
                        <img src="images/whatwe-do/2.jpg" alt="Awesome Image">
                    </div>
                    <div class="single-item">
                        <img src="images/whatwe-do/2.jpg" alt="Awesome Image">
                    </div>
                </div>
                <div class="bottom">
                    <p>Keep the Place Clean & Clear</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-box">
                    <ul>
                        <?php foreach ($service_group_rand as $item) : ?>
                            <li>
                                <div class="icon-box">
                                    <a href="<?php echo base_url() ?>pages/service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                                    echo toSlug($item['service_gr_name']) ?>">
                                        <span class="flaticon-kettle"></span>
                                    </a>

                                </div>
                                <div class="text-holder">
                                    <a href="<?php echo base_url() ?>pages/service/index.php?name=<?php $_SESSION[toSlug($item['service_gr_name'])] = $item['service_gr_id'];
                                                                                                    echo toSlug($item['service_gr_name']) ?>">
                                        <h3><?php echo $item['service_gr_name'] ?></h3>
                                    </a>
                                    <p><?php echo $item['service_gr_description'] ?></p>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End what we do area-->

<!--Start Brand area-->
<section class="brand-area brand-v2-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand">
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/brand/1.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/brand/2.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/brand/3.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item" title="Media Partner">
                            <img src="images/brand/4.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a href="#">
                        <div class="single-item">
                            <img src="images/brand/5.png" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->

<!--Start Testimonial area-->
<!-- <section class="testimonial-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>ĐÁNH GIÁ CHẤT LƯỢNG</h1>
            <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel">
            
                    <div class="single-item">
                        <div class="client-info">
                            <div class="img-box">
                                <img src="images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3>JEROLD PHELPS</h3>
                                <span>Admin, Forges</span>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>That this group would somehow form a family that is the way we all became the ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife.</p>
                        </div>
                    </div>
             
                    <div class="single-item">
                        <div class="client-info">
                            <div class="img-box">
                                <img src="images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3>JOSEPH DOE</h3>
                                <span>Founder, Forges</span>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>That this group would somehow form a family that is the way we all became the ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife.</p>
                        </div>
                    </div>
      
                    <div class="single-item">
                        <div class="client-info">
                            <div class="img-box">
                                <img src="images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3>JEROLD PHELPS</h3>
                                <span>Admin, Forges</span>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>That this group would somehow form a family that is the way we all became the ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife.</p>
                        </div>
                    </div>
      
                    <div class="single-item">
                        <div class="client-info">
                            <div class="img-box">
                                <img src="images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3>JOSEPH DOE</h3>
                                <span>Founder, Forges</span>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>That this group would somehow form a family that is the way we all became the ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife.</p>
                        </div>
                    </div>
   
                    <div class="single-item">
                        <div class="client-info">
                            <div class="img-box">
                                <img src="images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3>JEROLD PHELPS</h3>
                                <span>Admin, Forges</span>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>That this group would somehow form a family that is the way we all became the ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife.</p>
                        </div>
                    </div>
           
                    <div class="single-item">
                        <div class="client-info">
                            <div class="img-box">
                                <img src="images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3>JOSEPH DOE</h3>
                                <span>Founder, Forges</span>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>That this group would somehow form a family that is the way we all became the ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife.</p>
                        </div>
                    </div>
    
                </div>
            </div>     
        </div>
    </div>
</section> -->
<!--End Testimonial area-->

<!--Start team area-->
<!-- <section class="team-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>MEET OUR TEAM</h1>
            <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-team-member text-center hvr-float-shadow">
                    <div class="img-holder">
                        <img src="images/team/1.jpg" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h3>ADAM FINLAY</h3>
                        <p>Expert Cleaner</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-team-member text-center hvr-float-shadow">
                    <div class="img-holder">
                        <img src="images/team/2.jpg" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h3>SHANE MICHEAL</h3>
                        <p>Expert Cleaner</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-team-member text-center hvr-float-shadow">
                    <div class="img-holder">
                        <img src="images/team/3.jpg" alt="Awesome Image">
                        <div class="overlay-style-two">
                            <div class="box">
                                <div class="content">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <h3>ALAN NEWMAN</h3>
                        <p>Expert Cleaner</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>   -->
<!--End team area-->

<!--Start gallery area-->
<section class="gallery-area" style="background-image:url(images/gallery/gallery-bg.jpg);">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>MỘT SỐ HÌNH ẢNH VỀ CÔNG TY</h1>
            <!-- <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div> -->
            <p>T&Q rất hân hạnh được gửi tới quý khách hàng những hình ảnh của công ty </p>
        </div>
        <div class="row">
            <!--Start single gallery item-->
            <?php foreach ($pages_img_rand as $item) : ?>
                <div class="col-md-4">
                    <div class="single-gallery-item">
                        <div class="img-holder">
                            <img width="360px" height="321px" src="<?php echo $item['pages_img_link'] ?>" alt="Awesome Image">
                            <div class="top-overlay">
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="content">
                                            <a href="<?php base_url() ?>pages/video_clip/index.php">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-overlay">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <div class="title pull-left">
                                            </div>
                                            <div class="see-project pull-right">
                                                <a href="<?php echo $item['pages_img_link'] ?>" data-rel="prettyPhoto" title="Hanover Project"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!--End single gallery item-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="more-project text-center">
                    <a class="thm-btn bg-clr1" href="<?php base_url() ?>pages/video_clip/index.php">XEM THÊM</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End gallery area-->

<!--Start latest blog area-->
<section class="latest-blog-v2-area">
    <div class="container">
        <div class="sec-title style-two text-center">
            <h1>TIN TỨC MỚI</h1>
            <!-- <div class="icon-holder">
                <img src="images/icon/title-icon.png" alt="Icon">
            </div> -->
            <p>Cập nhật thông tin về công ty</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="latest-blog-left">
                    <!--Start single blog post-->
                    <div class="single-blog-post">
                        <div class="published-date">
                            <h5><?php echo $post_new[0]['post_datetime_update'] ?></h5>
                        </div>
                        <div class="img-holder">
                            <img src="<?php echo base_img('post') . $post_new[0]['post_image1'] ?>" alt="Awesome Image">
                            <div class="overlay-style-two">
                                <div class="box">
                                    <div class="content">
                                        <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                        echo toSlug($post_new[0]['post_title']) ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                            echo toSlug($post_new[0]['post_title']) ?>">
                                <h3 class="blog-title"><?php echo $post_new[0]['post_title'] ?></h3>
                            </a>
                            <div class="meta-info clearfix">
                                <ul class="post-info">
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                                                                    echo toSlug($post_new[0]['post_title']) ?>">By Admin</a></li>
                                    <li><i class="fa fa-tags" aria-hidden="true"></i><a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                                                                    echo toSlug($post_new[0]['post_title']) ?>">Tin tức</a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <p><?php echo $post_new[0]['post_description'] ?></p>
                                <a class="readmore" href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[0]['post_title'])] = $post_new[0]['post_id'];
                                                                                echo toSlug($post_new[0]['post_title']) ?>">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="latest-blog-right">
                    <!--Start single blog post-->
                    <div class="single-blog-post blog-list first-list-blog">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="published-date">
                                    <h5><?php echo $post_new[1]['post_datetime_update'] ?></h5>
                                </div>
                                <div class="img-holder">
                                    <img src="<?php echo base_img('post') . $post_new[1]['post_image1'] ?>" alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                echo toSlug($post_new[1]['post_title']) ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-holder">
                                    <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                    echo toSlug($post_new[1]['post_title']) ?>">
                                        <h3 class="blog-title"><?php echo $post_new[1]['post_title'] ?></h3>
                                    </a>
                                    <div class="meta-info clearfix">
                                        <ul class="post-info">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                                                            echo toSlug($post_new[1]['post_title']) ?>">By Admin</a></li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i><a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                                                            echo toSlug($post_new[1]['post_title']) ?>">Tin tức</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $post_new[1]['post_description'] ?></p>
                                        <a class="readmore" href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[1]['post_title'])] = $post_new[1]['post_id'];
                                                                                        echo toSlug($post_new[1]['post_title']) ?>">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div class="single-blog-post blog-list">
                        <div class="row">
                        <div class="col-md-6">
                                <div class="published-date">
                                    <h5><?php echo $post_new[2]['post_datetime_update'] ?></h5>
                                </div>
                                <div class="img-holder">
                                    <img src="<?php echo base_img('post') . $post_new[2]['post_image1'] ?>" alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                echo toSlug($post_new[2]['post_title']) ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-holder">
                                    <a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                    echo toSlug($post_new[2]['post_title']) ?>">
                                        <h3 class="blog-title"><?php echo $post_new[2]['post_title'] ?></h3>
                                    </a>
                                    <div class="meta-info clearfix">
                                        <ul class="post-info">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                                                            echo toSlug($post_new[2]['post_title']) ?>">By Admin</a></li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i><a href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                                                            echo toSlug($post_new[2]['post_title']) ?>">Tin tức</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $post_new[2]['post_description'] ?></p>
                                        <a class="readmore" href="./pages/post/post_details.php?name=<?php $_SESSION[toSlug($post_new[2]['post_title'])] = $post_new[2]['post_id'];
                                                                                        echo toSlug($post_new[2]['post_title']) ?>">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>

        </div>
    </div>
</section>
<!--End latest blog area-->

<?php require_once(__DIR__ . '/layout/footer.php'); ?>