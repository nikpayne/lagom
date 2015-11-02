<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Full Screen Dropdown</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/app.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Company</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Social</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Dog</a></li>
      </ul>
    </nav>
    <div class="button">
      <a href="#">
        <?php include("src/img/array.svg"); ?>
        <?php include("src/img/menu.svg"); ?>
        <?php include("src/img/close.svg"); ?>
      </a>
    </div>
  </header>
  <div class="overlay">
    <div class="wrap">
      <ul class="wrap-nav">

        <li><a href="#">Company</a>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Workplace</a></li>
          </ul>
        </li>

        <li><a href="#">Services</a>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Consultanct</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Centers</a></li>
          </ul>
        </li>

        <li><a href="#">Social</a>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Google Plus</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">WhatsApp</a></li>
          </ul>
        </li>

        <li><a href="#">Contact</a>
          <ul>
            <li><a href="#">Address</a></li>
            <li><a href="#">Phone</a></li>
            <li><a href="#">Email</a></li>
            <li><a href="#">Map</a></li>
          </ul>
        </li>

      </ul>
      <div class="social">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, recusandae, magnam, sapiente, iure deleniti repudiandae est tempora repellat fugiat aliquid nihil assumenda non placeat cum minus aut qui. Ipsa, aut.
      </div>
    </div>
  </div>

  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.btn-close').fadeOut(200);
    var open = false;
    $('.button a').on('click',function(){
      if(open == false){
        $('.overlay, .btn-close').fadeIn(200);
        $('nav ul li, .btn-open, .array').fadeOut(200);
        open = true;
      } else {
        $('.overlay, .btn-close').fadeOut(200)
        $('nav ul li, .btn-open, .array').fadeIn(200);
        open = false;
      }
    });
    $('.overlay').on('mouseup', function(){
      $('.overlay, .btn-close').fadeOut(200);
      $('nav ul li, .btn-open, .array').fadeIn(200);
      open = false;
    });
    $('.wrap').on('mouseup', function(){
      return false;
    });
  })
  </script>
</body>
</html>
