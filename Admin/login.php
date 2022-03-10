<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
<div class="row form-login">
    <div class="col">
    <div class="register-form">
        <h2>Đăng Nhập</h2>
        <form action="managerpage.php" method="post">
        
          <div class="form-group">
            <label >Mã Số Nhân Viên:</label>
            <input required="" type="text" class="form-control" id="msnv" placeholder="Nhập mã số nhân viên" name="username">
          </div>
          <div class="form-group">
            <label >Mật Khẩu:</label>
            <input required="" type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pswd">
          </div>
          <div class="form-group">  
            <label >Chức vụ:</label>
            <select class="form-control" name="position">      
              <option>Quản Lý</option>
              <option>Nhân Viên</option>
            </select>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Lưu Tài Khoản
            </label>
          </div>
          <button class="btn btn-danger"><a href="../index.php" id="btn">Trở Về</a></button>
          <button type="submit" class="btn btn-primary btn-login" >Đăng Nhập</button>
          <!-- <button type="submit" class="btn btn-primary" ><a href="?username=nv247'">Đăng Nhập</a></button> -->
        </form>
      </div>
    </div>
  </div>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>