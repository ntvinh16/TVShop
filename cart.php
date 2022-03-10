<?php
    include_once('./ConnectionDatabase/Connection.php');
  require_once('./utility.php');
  $cart = [];
  if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}

  $mshhList = [];
  foreach ($cart as $item) {
    $mshhList[] = "'".$item['mshh']."'";
  }
  if(count($mshhList) >0){
    $mshhList = implode(',', $mshhList);
    $sql = 'select * from hanghoa where MSHH in ('.$mshhList.');';
    $cartList = executeResutl($sql);
  }else{
    $cartList = [];
  }
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
    <?php
        include_once('./header2.php');
    ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Giỏ Hàng</h2>
                        <span>Vui Lòng Nhập Thông Tin Để Đặt Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h4>Chi tiết giỏ hàng</h4>
                  <hr>
                <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên</th>
                  <th style="width: 50px;">Hình ảnh</th>
                  <th>Giá</th>
                  <th style="width: 130px; text-align: center;">Số Lượng</th>
                  <th>Tổng Tiền</th>
                  <th>Xóa</th>
                  
                </tr>
                
              </thead>
              <tbody>
              <?php             
                $STT = 0;
                $total = 0;
                  foreach($cartList as $item){
                    $num = 0;
                    foreach($cart as $value){
                      if($value['mshh'] == $item['MSHH']){
                        $num = $value['num'];
                        
                        break;
                      }
                    }
                    $total += $num * $item['Gia'];
                  
                    echo '
                      <tr class="align-middle">
                        <td class="align-middle" style="width: 20px; text-align: center;">'.(++$STT).'</td>
                        <td class="align-middle">'.$item['TenHH'].'</td>
                        <td class="align-middle"><img src="assets/images/'.$item['MaLoaiHang'].'/'.$item['MSHH'].'.jpg" alt="" width="100px"></td>
                        <td class="align-middle"><span class="price">'.$item['Gia'].' VNĐ</span></td>
                        
                        <td class="align-middle">
                          <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus" onclick="updateToCart(\'' . $item['MSHH'] . '\',\'' . $item['MSHH'] . '\',0)">
                            <input type="number" step="1" min="1" max="" name="quantity" value="'.$num.'" title="Qty" id="quantity" class="input-text qty text ' . $item['MSHH'] .'" size="4" pattern="" inputmode="">
                            <input type="button" value="+" class="plus" onclick="updateToCart(\'' . $item['MSHH'] . '\',\'' . $item['MSHH'] . '\',1)">
                          </div>
                        </td>
                        <td class="align-middle"><span class="price">'.$num * $item['Gia'].'VNĐ</span></td>
                        <td class="align-middle">
                        <button class="btn btn-danger" onclick="deleteToCart(\''.$item['MSHH'].'\')">Xóa</button>
                        </td>
                      </tr>
                    ';
                  
                  }
                ?>
              </tbody>
            </table>
            
            <?php
              if($STT == 0){
                echo '<h3 class="align-middle">Bạn chưa có sản phẩm nào !!!</h3>';
                echo'
                <a href="./index.php"><button class="btn btn-success">Mua hàng ngay</button></a>
                ';
              }
            ?>
            <hr>
            <div>
              <span class="price">Tổng số tiền: <?=$total?> VNĐ</span>
            </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe contact-us dathang">
        <div class="container">
            <div class="row">
              
              <div class="col-lg-4">
              <div class="section-heading">
                          <h2>Vui lòng liên hệ</h2>
                          <span>thevinhshop.com.vn/lienhe hoặc 0939267641</span>
                      </div>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
               
              </div>
                <div class="col-lg-8">

                  <div class="section-heading">
                          <h2>Nhập Thông Tin Đặt Hàng</h2>
                          <span>Nhanh chóng tiện lợi an toàn khi đặt hàng !</span>
                      </div>
                      <form id="formdathang" action="./dathang.php" method="post">
                          <div class="row">
                            <div class="col-lg-6">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Nhập họ tên" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Nhập số điện thoại" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="address" rows="6" id="address" placeholder="Nhập địa chỉ giao hàng" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <strong style="font-size:20px"><span class="price">Tổng số tiền: <?=$total?> VNĐ</span></strong>
                                <button type="submit" id="form-submit" class="main-dark-button">Đặt hàng ngay <i class="fa fa-paper-plane"></i></button>
                            </div>
                          </div>
                        </form>
                </div>
                <!-- đây -->
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
    <script src="assets/js/quantity.js"></script> 

    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script src="./assets/js/DigitPrice.js"></script>
    <script src="./assets/js/AddToCart.js"></script>

    <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>


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
