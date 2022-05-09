<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>@yield('title','Laravel 5')</title>
</head>
<body>
    
      <div class="site-navbar">
  
        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-11 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">LARAVEL</a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
  
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class="active"><a href="/list"><span>Products</span></a></li>
                  <li class=""><a href="/companies"><span>manufactures</span></a></li>
                </ul>
              </nav>
            </div>
  
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
  
            </div>
  
        </div>  
    <div class="container">
        @yield('content')
    </div>
        
    

  
  
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>
</html>