<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sao 507 - Garantía sin Pelos</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
<!-- del whatsapp ico -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--STYLE-->
<style>
img {
  width: 100%;
}
</style>
<!-- Imports-->
</head>

<body>

  <?php include("conf/verificar.php");
        include("conf/conexion.php");

        $query="SELECT * FROM pedidos";
        	$result=mysqli_query($conn, $query);
      ?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="img/core-img/preload-3.png" alt="">
        </div>
    </div>


    <!-- ***** Barra de Iconos  ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="home.PHP">Sao 507</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php"> Home <span class="sr-only"></span></a>
                                </li>


                                  <li class="nav-item">
                                    <a class="nav-link"  href="administrador.php"> Usuario:<?php echo" $nombreuser"; ?> </a>
                                  </li>

                                <li class="nav-item"> <a class="nav-link" href="conf/cerrar.php"> Cerrar Sesion</a> </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="https://es-la.facebook.com/Sao507/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/sao.507/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/sao_507"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://wa.me/50765175795" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
        </div>
        <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-11 col-md-6 col-lg-4">
                        <div class="hero-content">
                            <h2>Sao 507</h2>
                            <p>Garantia sin pelos</p>
                                <a href="#DescargarPedidos" class="btn caviar-btn"><span></span> Descargar Pedidos</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Nav -->
        </div>
    </section>
    <section class="caviar-dish-menu" id="DescargarPedidos">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Pedidos</h2>
                    </div>
                    <!-- btn -->
                    <a href="datos.php" class="btn caviar-btn"><span></span>Descargar Pedidos en Excel</a>
                </div>
            </div>
            <div class="row">
              <table border="1">
               <tr >
                 <th>Nombre</th>
                 <th>Telefono</th>
                 <th>Cedula</th>
                 <th>Retirar</th>
                 <th>Direccion</th>
                 <th>Pedido</th>
                 <th>Numero de Pedido</th>
                 <th>Total a Pagar</th>

               </tr>
               <?php
                 while ($row=mysqli_fetch_assoc($result)) {
                   ?>
                     <tr>
                       <td><?php echo $row['nombre']; ?></td>
                       <td><?php echo $row['telefono']; ?></td>
                       <td><?php echo $row['cedula']; ?></td>
                       <td><?php echo $row['retirar']; ?></td>
                       <td><?php echo $row['direccion']; ?></td>
                       <td><?php echo $row['pedido']; ?></td>
                       <td><?php echo $row['npedido']; ?></td>
                       <td><?php echo $row['cuenta']; ?></td>
                     </tr>

                   <?php
                 }
               ?>
              </table>
            </div>
        </div>
    </section>


        <!-- ****** Footer Area Start ****** -->
        <footer class="caviar-footer-area">
            <div class="container">
                <div class="row">
                  <p>Ricardo Dominguez  <a href="https://inusui.blogspot.com/" target="_blank">Blog</a></p>

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
        <!-- ****** Footer Area End ****** -->

        <!-- Jquery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap-4 js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/others/plugins.js"></script>
        <!-- Active JS -->
        <script src="js/active.js"></script>
    </body>
