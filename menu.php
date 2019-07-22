<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Caviar - Premium Restaurant Template | Menu</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="img/core-img/preload-3.png" alt="">
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="home.php">Sao 507</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php#reservation">Pedido</a>
                                </li>

                            </ul>
                          
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-2.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Menu</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Special</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Menu Area Start ***** -->
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2>Menu</h2>
                    </div>
                </div>

                <div class="col-10">
                    <div class="caviar-projects-menu">
                        <div class="text-center portfolio-menu">
                            <button class="active" data-filter="*">Todo</button>
                            <button data-filter=".breakfast">De la Casa`</button>
                            <button data-filter=".lunch">Mar</button>
                            <button data-filter=".dinner">Bebidas</button>
                        </div>
                    </div>

                    <div class="caviar-menu-slides owl-carousel clearfix">

                        <div class="caviar-portfolio clearfix">
                            <!-- De la Casa -->
                            <div class="single_menu_item breakfast wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="img/menu-img/sao.png" alt="" style="width:256px;height:256px;">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Sao</h3>
                                    </div>
                                    <div class="dish-value">
                                        <td>
                                        <h5> Grande </h5>
                                        <p>Con Picante y Sin Picante </p>
                                        <h3>B/. 3.00</h3>
                                      </td><td>
                                        <h5> Chico </h5>
                                        <p>Con Picante y Sin Picante </p>
                                        <h3>B/. 2.00</h3>
                                      </td>
                                    </div>
                                </div>
                            </div>
                            <!-- Mar -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="img/menu-img/camarones.png" alt="" style="width:256;height:256px;">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Camarones Con Patacones</h3>
                                    </div>
                                    <div class="dish-value">
                                        <h3>B./ 6.00<h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Bebidas -->
                            <div class="single_menu_item dinner wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="img/menu-img/golden.png" alt="" style="width:256;height:256px;">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Atlas Golden Light</h3>
                                    </div>
                                    <div class="dish-value">
                                        <h3>B./ 1.00</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

<!--***********
OTRA Columna 2
***************-->
<div class="caviar-menu-slides owl-carousel clearfix">

    <div class="caviar-portfolio clearfix">
        <!-- De la Casa -->
        <div class="single_menu_item breakfast wow fadeInUp">
            <div class="d-sm-flex align-items-center">
                <div class="dish-thumb">
                    <img src="img/menu-img/cacolica.png" alt="" style="width:256px;height:256px;">
                </div>
                <div class="dish-description">
                    <h3>Cacolica Con Patacones</h3>
                </div>
                <div class="dish-value">
                    <h3>B/. 7.00</h3>
                </div>
            </div>
        </div>
        <!-- Mar -->
        <div class="single_menu_item lunch wow fadeInUp">
            <div class="d-sm-flex align-items-center">
                <div class="dish-thumb">
                    <img src="img/menu-img/pescado2.png" alt="" style="width:256;height:256px;">
                </div>
                <div class="dish-description">
                    <h3>Pescado Con Patacones</h3>
                </div>
                <div class="dish-value">
                  <td>
                  <h5> Al Ajillo o</h5>
                </td><td>
                  <h5> Apanado </h5>
                  <h3>B./ 5.00</h3>

                </td>
                </div>
            </div>
        </div>
        <!--Bebidas-->
        <div class="single_menu_item dinner wow fadeInUp">
            <div class="d-sm-flex align-items-center">
                <div class="dish-thumb">
                    <img src="img/menu-img/soberana.png" alt="" style="width:256;height:256px;">
                </div>
                <div class="dish-description">
                    <h3>Soberana</h3>
                </div>
                <div class="dish-value">
                    <h3>B./ 1.00</h3>
                </div>
            </div>
        </div>
        <!-- Single Gallery Item -->

    </div>


                    </div>
                    <!--***********
                    OTRA Columna 3
                    ***************-->
                    <div class="caviar-menu-slides owl-carousel clearfix">

                        <div class="caviar-portfolio clearfix">
                            <!-- De la Casa -->
                            <div class="single_menu_item breakfast wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="img/menu-img/sopa.png" alt="" style="width:256px;height:256px;">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Sopa de Camarones</h3>
                                    </div>
                                    <div class="dish-value">
                                      <td>
                                      <h5>Sola</h5>
                                      <h3>B/. 3.00</h3>
                                    </td><td>
                                      <h5> Con Arroz </h5>
                                      <h3>B/. 3.50</h3>
                                    </td>
                                    </div>
                                </div>
                            </div>
                            <!-- Mar -->
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="img/menu-img/ceviche.png" alt="" style="width:256;height:256px;">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Ceviche de Camarones</h3>
                                    </div>
                                    <div class="dish-value">
                                        <h3>B./ 1.50</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="single_menu_item lunch wow fadeInUp">
                                <div class="d-sm-flex align-items-center">
                                    <div class="dish-thumb">
                                        <img src="img/menu-img/concha.png" alt="" style="width:256;height:256px;">
                                    </div>
                                    <div class="dish-description">
                                        <h3>Concha con Patacones</h3>
                                    </div>
                                    <div class="dish-value">
                                        <h3>B./ 7.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Menu Area End ***** -->

    <!-- ***** Special Menu Area Start ***** -->
    <section class="caviar-dish-menu clearfix" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/menu-img/sao.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Sao</h6>
                            <p class="dish-price">B/. 2.00 | 3.00/p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="img/menu-img/pescado.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Pescado con Patacones</h6>
                            <p class="dish-price">B/. 5.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/menu-img/concha.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Concha con Patacones</h6>
                            <p class="dish-price">B/. 7.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Menu Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">caviar</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
