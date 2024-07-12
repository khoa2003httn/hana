<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
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

  <div class="wrap">
    @yield('main')
  </div>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

</body>
</html>
