<!-- Import Connection Database -->
<?php
    include_once('./ConnectionDatabase/Connection.php');
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>The Vinh Shop || Fashion And Clothes</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php include_once('./header.php')?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>The Vinh Fashion</h4>
                                <span>Thời trang tạo nên chất lượng cuộc sống &amp; thay đổi thế giới</span>
                                <div class="main-border-button">
                                    <a href="#">Mua ngay !</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Thời Trang Nữ</h4>
                                            <span>Quần áo dành cho nữ giới</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Thời Trang Nữ</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class="main-border-button">
                                                    <a class="scroll-to-section" href="#women">Xem ngay !</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Thời Trang Nam</h4>
                                            <span>Quần áo dành cho nam giới</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Thời Trang Nam</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class="main-border-button">
                                                    <a class="scroll-to-section" href="#men">Xem ngay !</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>  
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Thời Trang Trẻ Em</h4>
                                            <span>Quần áo dành cho trẻ em</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Thời Trang Trẻ Em</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class="main-border-button">
                                                    <a class="scroll-to-section" href="#kids">Xem ngay !</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Phụ Kiện</h4>
                                            <span>Phụ kiện thời thượng</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Phụ Kiện</h4>
                                                <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                                <div class="main-border-button">
                                                    <a href="#">Xem ngay !</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Thời Trang Nam</h2>
                        <span>Quần áo dành cho nam giới, lịch lãm, cá tính, mạnh mẻ.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <!-- Xuat San Pham Danh Cho Nam -->
                            <?php
                                $sql_men_product =
                                'SELECT hanghoa.MaLoaiHang ,hanghoa.MSHH, TenHH, Gia, SoLuongHang, TenHinh 
                                FROM hanghoa, hinhhanghoa
                                WHERE hanghoa.MSHH = hinhhanghoa.MSHH
                                AND hanghoa.MaLoaiHang = "men";';
                                $sql_men_product_result = executeResutl($sql_men_product);
                         
                                foreach ($sql_men_product_result as $men_product) {
                                    $string_temp_product_id = "'".$men_product['MSHH']."'";
                                    echo '
                                    <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.php?mshh='.$men_product['MaLoaiHang'].'&id_product='.$men_product['MSHH'].'"><i class="fa fa-eye "></i></a></li>
                                                <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                                <li><a onclick="addToCart('.$string_temp_product_id.')"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="assets/images/men/'.$men_product['TenHinh'].'.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>'.$men_product['TenHH'].'</h4>
                                        <span class="price">Giá: '.$men_product['Gia'].' VNĐ</span>
                                        <span>Số lượng: '.$men_product['SoLuongHang'].'</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Thời Trang Nữ</h2>
                        <span>Sự thanh lịch tôn dáng tạo nên nét đẹp cho người phụ nữ</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <!-- Xuat San Pham Danh Cho Nu -->
                            <?php
                                $sql_women_product =
                                'SELECT hanghoa.MaLoaiHang,hanghoa.MSHH, TenHH, Gia, SoLuongHang, TenHinh 
                                FROM hanghoa, hinhhanghoa
                                WHERE hanghoa.MSHH = hinhhanghoa.MSHH
                                AND hanghoa.MaLoaiHang = "women";';
                                $sql_women_product_result = executeResutl($sql_women_product);
                                
                                foreach ($sql_women_product_result as $women_product) {
                                    $string_temp_product_id = "'".$women_product['MSHH']."'";
                                    echo '
                                    <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.php?mshh='.$women_product['MaLoaiHang'].'&id_product='.$women_product['MSHH'].'"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                                <li><a onclick="addToCart('.$string_temp_product_id.')" ><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="assets/images/women/'.$women_product['TenHinh'].'.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>'.$women_product['TenHH'].'</h4>
                                        <span class="price">Giá: '.$women_product['Gia'].' VNĐ</span>
                                        <span>Số lượng: '.$women_product['SoLuongHang'].'</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                    ';
                                }
                            ?>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Thời Trang Cho Bé</h2>
                        <span>Sự năng động thoải mái giúp cho bé tự do thoải mái phát triển.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                        <?php
                                $sql_kids_product =
                                'SELECT hanghoa.MaLoaiHang ,hanghoa.MSHH, TenHH, Gia, SoLuongHang, TenHinh 
                                FROM hanghoa, hinhhanghoa
                                WHERE hanghoa.MSHH = hinhhanghoa.MSHH
                                AND hanghoa.MaLoaiHang = "kids";';
                                $sql_kids_product_result = executeResutl($sql_kids_product);
                                foreach ($sql_kids_product_result as $kids_product) {
                                    $string_temp_product_id = "'".$kids_product['MSHH']."'";
                                    echo '
                                    <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.php?mshh='.$kids_product['MaLoaiHang'].'&id_product='.$kids_product['MSHH'].'"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                                <li><a onclick="addToCart('.$string_temp_product_id.')"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="assets/images/kids/'.$kids_product['TenHinh'].'.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>'.$kids_product['TenHH'].'</h4>
                                        <span class="price">Giá: '.$kids_product['Gia'].' VNĐ</span>
                                        <span>Số lượng: '.$kids_product['SoLuongHang'].'</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                    ';
                                }
                            ?>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** PhuKien Area Start ***** -->
    <section class="section" id="phukien">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Phụ Kiện Thời Trang</h2>
                        <span>Thời trang giới trẻ, không thể thiếu phụ kiện sang xịn mịn.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                        <?php
                                $sql_phukien_product =
                                'SELECT hanghoa.MaLoaiHang, hanghoa.MSHH, TenHH, Gia, SoLuongHang, TenHinh 
                                FROM hanghoa, hinhhanghoa
                                WHERE hanghoa.MSHH = hinhhanghoa.MSHH
                                AND hanghoa.MaLoaiHang = "phukien";';
                                $sql_phukien_product_result = executeResutl($sql_phukien_product);
                                foreach ($sql_phukien_product_result as $phukien_product) {
                                    $string_temp_product_id = "'".$phukien_product['MSHH']."'";
                                    echo '
                                    <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.php?mshh='.$phukien_product['MaLoaiHang'].'&id_product='.$phukien_product['MSHH'].'"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.php"><i class="fa fa-star"></i></a></li>
                                                <li><a onclick="addToCart('.$string_temp_product_id.')"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="assets/images/phukien/'.$phukien_product['TenHinh'].'.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>'.$phukien_product['TenHH'].'</h4>
                                        <span class="price">Giá: '.$phukien_product['Gia'].' VNĐ</span>
                                        <span>Số lượng: '.$phukien_product['SoLuongHang'].'</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                    ';
                                }
                            ?>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** PhuKien Area Ends ***** --> 

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Khám Phá Tất Cả Các Sản Phẩm Của Chúng Tôi</h2>
                        <span>Shop The Vinh chúng tôi không đơn thuần là cái đẹp thời trang, chúng tôi khao khát kiến tạo những giá trị xã hội nhân văn, trở thành một lối sống để đồng hành cùng phụ nữ trên hành trình thấu cảm vẻ đẹp của chính mình.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Không ngừng tìm kiếm và cập nhật các mẫu quần áo, các hot trend trên thị trường để đáp ứng nhu cầu của khách hàng.</p>
                        </div>
                        <p>Shop The Vinh là kênh mua sắm online uy tín hàng đầu, cùng với đội ngũ nhân viên chuyên nghiệp, chúng tôi cam kết đem những sản phẩm tốt nhất, với giá cả phải chăng, uy tín và chất lượng với dịch vụ tốt nhất đến với mọi người.</p>
                        <p>Nơi cung cấp thông tin và tư vấn sản phẩm tốt nhất cho khách hàng.</p>
                        <div class="main-border-button">
                            <a href="products.php">Xem ngay tất cả các sản phẩm!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Túi xách</h4>
                                    <span>Mẫu sưu tập</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Sản phẩm khác</h4>
                                    <span>Hơn 300 sản phẩm có tại shop</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Mạng Xã Hội</h2>
                        <span>Cùng nhau kết nối trên facebook, instagram, zalo để trao đổi thông tin làm đẹp</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-03.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-04.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-05.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Black Friday Siêu Sale Lên Đến 50% Tất Cả Các Sản Phẩm</h2>
                        <span>Đến ngay của hàng để xem và được sự tư vấn tận tình của nhân viên The Vinh Shop</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Địa chỉ:<br><span>08/Nguyễn Văn Linh, Ninh Kiều, Cần Thơ</span></li>
                                <li>Phone:<br><span>0939-267-641</span></li>
                                <li>Địa chỉ khác<br><span>310/22A, Nguyễn Văn Linh, Ninh Kiều, Cần Thơ </span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Giờ mở cửa<br><span>07:30 AM - 9:30 PM</span></li>
                                <li>Email:<br><span>thancongbao@company.com</span></li>
                                <li>Mạng xã hội:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <?php
        include_once('./footer.php');
    ?>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="./assets/js/DigitPrice.js"></script>
    <script src="./assets/js/AddToCart.js"></script>
                                
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>