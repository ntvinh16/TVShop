

<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="./index.php" class="active">Trang Chủ</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Xem Thêm</a>
                                <ul>
                                    <li><a href="about.php">Về Chúng Tôi</a></li>
                                    <li><a href="products.php">Sản Phẩm</a></li>
                            
                                    <li><a href="contact.php">Liên Hệ</a></li>
                                    
                                </ul>
                            </li>
                            <li class="submenu">
                                <?php
                                    $cart = [];
                                    if (isset($_COOKIE['cart'])) {
                                    $json = $_COOKIE['cart'];
                                    $cart = json_decode($json, true);
                                    $count = 0;
                                    foreach ($cart as $item) {
                                        $count += $item['num'];
                                    }
                                    } else {
                                    $count = '';
                                    }

                                ?>
                                <a href="javascript:;">Giỏ hàng:<i class="fa fa-shopping-cart"></i>  <?= $count ?> </a>
                                
                                <ul style="background-color: #fff;">
                                <?php
                                    $mshhList = [];
                                    foreach ($cart as $item) {
                                        $mshhList[] = "'" . $item['mshh'] . "'";
                                    }
                                    if (count($mshhList) > 0) {
                                        $mshhList = implode(',', $mshhList);
                                        $sql = 'select * from hanghoa where MSHH in (' . $mshhList . ');';
                                        $cartList = executeResutl($sql);
                                    } else {
                                        $cartList = [];
                                    }

                                ?>


                                <!--test  -->
                                <table class="table">
                    <thead>
                      
                      
                    </thead>
                    <tbody>
                    <?php
                        $STT = 0;
                        $slsp = 0;
                        

                        foreach ($cartList as $item) {                       
                          $num = 0;

                          foreach ($cart as $value) {
                            if ($value['mshh'] == $item['MSHH']) {
                              $num = $value['num'];
                              $slsp++;
                              break;
                            }
                          }
                          echo '
                              <tr>
                            
                                <td class="align-middle" style="font-size:12px ">' . $item['TenHH'] . '</td>
                                <td class="align-middle"><img src="./assets/images/'.$item['MaLoaiHang'].'/'.$item['MSHH'].'.jpg" alt="" width="50px"></td>                    
                              </tr>
                        ';
                          if($slsp > 4){
                            
                            $temp = count($cartList) - 5;
                            echo '
                              <tr>
                            
                                <td class="align-middle" style="font-size: 12px">Và '.$temp.' sản phẩm khác</td>               
                                
                              </tr>
                        ';
                            break;
                          }
                        }
                      ?>
                    </tbody>
                  </table>
                  <?php
                        if($slsp == 0){
                            echo '<h5 style="text-align: center">Bạn chưa có sản phẩm nào !!!</h5>';
                        }
                        ?>
                                <!--test  -->
                                <?php
              if($slsp == 0){
                echo ' <li style = "margin-bottom: 15px"><a  href="./index.php"><button >Mua Sắm Ngay</button></a></li>';
              }else{
                echo '<li style = "margin-bottom: 15px"><a href="./cart.php"><button >Chi Tiết Giỏ Hàng</button></a></li>';
              }
            ?>
                                </ul>
                            </li>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>