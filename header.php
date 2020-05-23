<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document Title -->
    <title>Car Dealer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
     <!--==== icomoon css file ====-->
    <link rel="stylesheet" href="assets/css/icomoon.css">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Slick-Slider css file -->
    <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
    
    <!-- Slick-Slider css file -->
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
 
    
    <!-- mCustomScrollbar css file -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    
    <!-- rangeSlider css file -->
    <link rel="stylesheet" href="assets/plugins/rangeSlider/css/ion.rangeSlider.css">
    
    <!--==== Style css file ====-->
    <link rel="stylesheet" href="assets/css/style.css">
    
  

    <style>
        .trans-primary-color-background {
            background-color: rgba(172, 31, 45, 0.83);
            color: #fff;
        }
        .primary-bg{
            background: #ac1f2d;
        }
        .primary-color{
            color: #ac1f2d;
        }
        .primaryBorderbtn:hover{
            background: #ac1f2d;
            color: #fff;
            -webkit-transition: .3s all linear;
            transition: .3s all linear;
        }
        .primaryBorderbtn{
            background: none;
            color: #ac1f2d;
        }
        .btn-primary-xs{
            padding: 5px 15px;
            font-size: 14px;
            font-family: 'ProximaNova_Semibold';
            border-radius: 3px;
        }
        .border-btn{
            font-size: 14px;
            letter-spacing: 0;
            line-height: 40px;
            height: 40px;
            border: 1px solid #ac1f2d;
            border-radius: 2px;
            width: 100%;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            padding: 0 5px;
            text-align: center;
            display: inline-block;
            width: 100%;
            -webkit-transition: .3s all linear;
            transition: .3s all linear;
        }

        .primary-black-btn, .primary-black-btn:hover{
            background: #000;
            color: #fff;
        }
        .black-btn{
            font-size: 16px;
            letter-spacing: 0;
            line-height: 36px;
            height: 38px;
            border: none;
            border-radius: 2px;
            width: 100%;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            padding: 10px 19px;
            text-align: center;
            -webkit-transition: .3s all linear;
            transition: .3s all linear;
        }
        .buttonHolder .border-btn{
            width: calc(100% - 55px);
        }
        .bg-black{
            background: #24272c;
        }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div class="preLoader">
        <div class="preload-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
    <!-- End Of Preloader -->
    
    
    <!-- Main header -->
    <header class="header">
        <!-- Start Header Navbar-->
        <div class="main-header">
            <div class="main-menu-wrap">
                <div class="HeaderTopbar">
                    <div class="container">
                        <div class="row ">
                            
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets/img/logo.png" data-rjs="2" alt="logo">
                                    </a>
                                </div>
                                <!-- End of Logo -->
                               
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-7">
                                <div class="searchArea">
                                    <form>
                                        <div class="ReactTypeahead">
                                            <input type="text" name="search" placeholder="Search Cars or Brands eg. Swift, or Maruti"/>
                                        </div>
                                        <button class="searchbtn" type="submit" value="search"><i></i></button>
                                    </form>
                                </div>
                            </div>
                            <div id="Mobile_nav" class="Mobile_nav">
                                <div class="navicon-line top"></div>
                                <div class="navicon-line center"></div>
                                <div class="navicon-line bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="HeaderMenu">
                    <div class="container">
                        <div class="row align-items-center">
                            <nav class="col-lg-12">
                                            <!-- Header-menu -->
                                            <div class="header-menu dosis">
                                                <ul>
                                                    <li class="active megamenu">
                                                        <a href="javascript:void(0);">New Inventory</a>
<ul class="megamenu-dropdown">
    <li>
        <div class="megamenu-wrapper">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mega-header">
                        <h3>Browse by Make </h3><span><a href="#">View All >></a></span>
                    </div>
                    <div class="browsebymake">
                        <div class="logo-brand">
                            <div class="border-gray">
                                <div class="brand-img">
                                    <img src="./assets/img/car-brand/make.jpg" alt=""/>
                                </div>
                                <div class="brand-text">
                                    <p>All Makes</p>
                                    <p class="stockincar"><b>771</b> in Stock</p>
                                </div>  
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/hyundai.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>  
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/honda.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>  
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/tata.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/mahindra.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/renault.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/ford.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/nissan.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/datsun.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/toyota.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/mg.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/kia.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/volkswagen.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/skoda.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/jeep.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/fiat.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/isuzu.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/audi.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/mercedes-benz.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/bmw.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/jaguar.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/volvo.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/lexus.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/land-rover.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/porsche.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/ferrari.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/rolls-royce.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/bentley.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/dc.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/bugatti.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/force.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                        <div class="logo-brand">
                            <div class="border-gray">
                            <div class="brand-img">
                                <img src="./assets/img/car-brand/mitsubishi.jpg" alt=""/>
                            </div>
                            <div class="brand-text">
                                <p>All Makes</p>
                                <p class="stockincar"><b>771</b> in Stock</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">  
                     <div class="mega-header">
                        <h3>Pre-Owned Inventory</h3>
                    </div>
                    <div class="pre-inventry">
                        <ul>
                            <li><a href="#">All Pre-Owned Vehicles</a></li>
                            <li><a href="#">One-Owner Vehicles</a></li>
                            <li><a href="#">Certified Vehicles</a></li>
                            <li><a href="#">Vehicles Under $10,000</a></li>
                            <li><a href="#"> Your Trade</a></li>
                            <li><a href="#">Sell Us Your Vehicle</a></li>
                            <li><a href="#">Schedule Test Drive</a></li>
                            <li><a href="#">Get a Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
                                                    </li>
                                                    <li><a href="listpage.php">Pre-Owned Inventory </a></li>
                                                    <li><a href="sellcarpage.php"> Sell Car</a></li>
                                                    <li><a href="#">Compare Cars</a></li>
                                                    <li><a href="#">News & reviews</a></li>
                                                    <li><a href="servicespage.php">Services</a></li>
                                                    <li><a href="#">Inventory</a></li>
                                                    <li><a href="#">More</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Home 1</a></li>
                                                            <li><a href="#">Home 2</a></li>
                                                            <li><a href="#">Home 1</a></li>
                                                            <li><a href="#">Home 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End of Header-menu -->
                                        </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Navbar-->
    </header>
    <!-- End of Main header -->
    