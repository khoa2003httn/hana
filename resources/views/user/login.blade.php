<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  
  }
  
 
  
  h1 {
    font-size: 32px;
  }
  
  main {
    padding: 20px;
    margin: 3rem 12rem 3rem 12rem;
  }
  
  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  
  .btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .btn:hover {
    background-color: #0056b3;
  }
  
  footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
  }
  </style>
</head>
<body>
  <header>
    <div class="container">
        <div class="left">
          <ul>
            <li><ion-icon name="call-outline"></ion-icon><a href="#">+123 456 789</a></li>
            <li><ion-icon name="mail-outline"></ion-icon><a href="#">kalles@example.com</a></li>
          </ul>
        </div>
        <div class="mid">Giảm giá bán hè 50%! <a href="#">Mua ngay</a></div>
        <div class="right">
          <ul>
            <li><ion-icon name="location-outline" size="50"></ion-icon><a href="#">location</a></li>
            <li><ion-icon name="card-outline"></ion-icon><a href="#">VND</a></li>
          </ul>
        </div>
      </div>
      <nav>
        <div class="nav-left"><a href="#"><img src="https://demo-kalles-4-1.myshopify.com/cdn/shop/files/kalles_babcb241-47cc-4352-a0ae-1458bbff9dcc.png?v=1652178358&width=95" alt=""></a></div>
        <div class="nav-mid">
          <div class="t4s-navigation t4s-text-center t4s-nav__hover_sideup t4s-nav-arrow__false">
            <ul class="t4s-nav__ul t4s-d-inline-flex t4s-flex-wrap t4s-align-items-center">
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Home</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Shop</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Product</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Sale</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Pages</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Lookbook</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Blog</a></li>
              <li class="t4s-type__mega menu-width__full t4s-menu-item has--children menu-has__offsets"><a href="#">Buy Theme</a></li>
            </ul>
          </div>
        </div>
        <div class="nav-right">
          <ul class="nav-right-1">
            <li class="hucshdr1"><a href="#"><ion-icon name="heart-outline" size="90px"></ion-icon></a></li>
            <li class="hucshdr1"><a href="#"><ion-icon name="person-outline"></ion-icon></a></li>
            
          </ul>
        </div>
      </nav>
  </header>
  <main>
    <form action="#">
      <div class="form-group">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
  </main>
  <footer>
    <p>&copy; 2024 - Trang web của bạn</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
