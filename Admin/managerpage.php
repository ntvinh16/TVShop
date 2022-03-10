<!-- Import Connection Database -->
<?php
include_once('../ConnectionDatabase/Connection.php');

if (!empty($_POST)) {
    $username = $_POST['username'];
    setcookie("username", $username);
    $pswd = $_POST['pswd'];
    $position = $_POST['position'];

    //CHECK VALUE
    $query = "SELECT * FROM NhanVien WHERE msnv ='" . $username . "' AND PASSWORD ='" . $pswd . "' AND chucvu ='" . $position . "';";
    $result = executeResutl($query);


    if ($result != null) {
        echo '
          <script>
          alert("Đăng Nhập Thành Công");
            </script>
          ';
    } else {
        echo '
          <script>
          alert("Đăng Nhập Không Thành Công");
        </script>';
        header('Location: login.php');
    }
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
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="../assets/css/owl-carousel.css">

    <link rel="stylesheet" href="../assets/css/lightbox.css">
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
    include_once('header_admin.php');
    ?>

    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>About Our Company</h2>
                        <span>Awesome, clean &amp; creative HTML5 Template</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4>Đang Chờ Duyệt</h4>
                    <?php
                    $sql_order_detel = 'SELECT dathang.SoDonDH, khachhang.HoTenKH, khachhang.SoDienThoai, diachikh.DiaChi,dathang.NgayDH, dathang.TrangThaiDH
                        FROM dathang, khachhang, diachikh
                        WHERE dathang.SoDonDH = diachikh.MaDC
                        AND dathang.MSKH = khachhang.MSKH
                        AND dathang.TrangThaiDH LIKE "Đang chờ duyệt" ORDER BY SoDonDH DESC;';
                    $sql_order_detel_result = executeResutl($sql_order_detel);
                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle" style="text-align: center;">MSDH</th>
                                <th >Thông Tin Đặt Hàng</th>
                                <th style="text-align: center;">Ngày Đặt Hàng</th>
                                <th style="text-align: center;">Ngày Giao Hàng</th>
                                <th style="text-align: center;">Trạng Thái ĐH</th>
                                <th style="text-align: center;">Cập Nhật</th>
                            </tr>
                        
                        </thead>
                        <tbody>
                            <?php
                                foreach ($sql_order_detel_result as $order) {
                                    echo '
                                    <tr>
                                        <td>'.$order['SoDonDH'].'</td>
                                        <td>'.$order['HoTenKH'].' <br> '.$order['SoDienThoai'].'</td>
                                        <td>'.$order['NgayDH'].'</td>
                                        <td></td>
                                        <td>'.$order['TrangThaiDH'].'</td>
                                        <td>
                                        <select id="trangthaidonhang_'.$order['SoDonDH'].'"  class="form-select">
                                        <option value="Đang Chờ Duyệt">Đang Chờ Duyệt</option>
                                        <option value="Đã Duyệt Đơn">Đã Duyệt Đơn</option>
                                        
                                        </select>
                                        </td>
                                       
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                <h4>Đã Duyệt Đơn</h4>
                    <?php
                    $sql_order_detel = 'SELECT dathang.SoDonDH, khachhang.HoTenKH, khachhang.SoDienThoai, diachikh.DiaChi,dathang.NgayDH, dathang.TrangThaiDH
                        FROM dathang, khachhang, diachikh
                        WHERE dathang.SoDonDH = diachikh.MaDC
                        AND dathang.MSKH = khachhang.MSKH
                        AND dathang.TrangThaiDH LIKE "Đã Duyệt Đơn" ORDER BY SoDonDH DESC;';
                    $sql_order_detel_result = executeResutl($sql_order_detel);
                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle" style="text-align: center;">MSDH</th>
                                <th >Thông Tin Đặt Hàng</th>
                                <th style="text-align: center;">Ngày Đặt Hàng</th>
                                <th style="text-align: center;">Ngày Giao Hàng</th>
                                <th style="text-align: center;">Trạng Thái ĐH</th>
                                <th style="text-align: center;">Cập Nhật</th>
                            </tr>
                        
                        </thead>
                        <tbody>
                            <?php
                                foreach ($sql_order_detel_result as $order) {
                                    echo '
                                    <tr>
                                        <td>'.$order['SoDonDH'].'</td>
                                        <td>'.$order['HoTenKH'].' <br> '.$order['SoDienThoai'].'</td>
                                        <td>'.$order['NgayDH'].'</td>
                                        <td></td>
                                        <td>'.$order['TrangThaiDH'].'</td>
                                        <td>
                                        <select id="trangthaidonhang_'.$order['SoDonDH'].'"  class="form-select">
                                        <option value="Đang Chờ Duyệt">Đang Chờ Duyệt</option>
                                        <option value="Đã Duyệt Đơn">Đã Duyệt Đơn</option>
                                        
                                        </select>
                                        </td>
                                       
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->

    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->

    <!-- ***** Services Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->

    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <?php
    include_once('../footer.php');
    ?>


    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>