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
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home"> Home <span class="sr-only"></span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#menu"> Menu</a>
                                  </li>

                                  <li class="nav-item">
                                    <a class="nav-link"  href="administrador.php"> Usuario:<?php echo" $nombreuser"; ?> </a>
                                  </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#reservation"> Pedido</a>
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
        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Sao 507</h2>
                                <p>Garantia sin pelos</p>
                                    <a href="#reservation" class="btn caviar-btn"><span></span> Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/hero-2.jpg);"></div>
            </div>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Sin Preservantes</h2>
                                <p>100% Natural</p>
                                <a href="#reservation" class="btn caviar-btn"><span></span> Pedido</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/hero-1.jpg);"></div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ******  Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Menu</h2>
                    </div>
                    <!-- btn -->
                    <a href="menu.php" class="btn caviar-btn"><span></span> Ver Menu</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/menu-img/sao.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Sao</h6>
                            <p class="dish-price">B/. 2.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="img/menu-img/pescado2.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Pesca'o en Salsa Criolla</h6>
                            <p class="dish-price">B/. 5.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/menu-img/concha.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Concha con Patacon</h6>
                            <p class="dish-price">B./ 7.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Dish Menu Area End ****** -->


    <!-- ****** Reservation Area Start ******-->
    <section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Orden</h2>
                </div>
                <?php
                  $retirar = "Local";
                  $cedula = "Sin Andexar";
                echo"<form action=home.php#reservation method=post enctype=multipart/form-data>";
                echo" <div class=row>";
                  echo" <div class=col-12 col-lg-6>";
                      echo" <input type=text name=name  class=form-control placeholder=Nombre   required>";
                  echo"   </div>";
                  echo" <div class=col-12 col-lg-6>";
                      echo" <input type=number min=1000000 max=99999999 name=telefono class=form-control placeholder=Telefono  required>";
                  echo"   </div>";
                  echo" <div class=col-12 col-lg-6>";
                      echo" <input type=text  class=form-control name=cedula placeholder=Cedula >";
                  echo"   </div>";
                  echo" <div class=col-12 col-lg-6>";
                      echo" <input list=lista name=retirar class=form-control placeholder=Retirar >";
                      echo"<datalist id=lista>  <option value=ParaLlevar>  <option value=EnLocal></datalist>";
                  echo"   </div>";
                  echo" <div class=col-12>";
                      echo" <textarea name=direccion class=form-control id=Direccion cols=30 rows=10 placeholder=Direccion></textarea>";
                  echo" </div>";

                echo"   </div>";
                echo"  </div>";

          echo"  </div>";/*Otra Columna*/
            echo" <div class=row>";

            echo" <div class=col-15>";
                  echo"<tr><td><br><input type=checkbox name=Sao2></td> Sao <td><input type=number name=NSaopicante2 placeholder=Picante|B/.2.00></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td><input type=number name=NSaoSinPicante2 placeholder=SinPicante|B/2.00></td></tr>";
                  echo"<br>";
                  echo"<tr><td><br><input type=checkbox name=Sao3></td> Sao <td><input type=number name=NSaopicante3 placeholder=Picante|B/.3.00></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <td><input type=number name=NSaoSinPicante3 placeholder=SinPicante|B/3.00></td></tr>";
                  echo"<br>";
                  echo"<tr><td><br><input type=checkbox name=SopaCamarones></td> Sopa de Camarones <td><input type=number  name=NSopaCamarones placeholder=B/.3.00></td><br>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <td><input type=number  name=NSopaCamaronesA placeholder=ConArroz|B/.3.50></td></tr>";
                  echo "<br>";
                  echo"<tr><td><br><input type=checkbox name=Ceviche></td>Ceviche de Camarones<td><input type=number  name=NCeviche placeholder=B/.1.50 ></td></tr>";
                  echo "<br>";
                  echo"<tr><td><br><input type=checkbox name=Pescado></td> Pesca'o Con Patacones <td><input type=number  name=NPescado placeholder=B/.5.00 ></td></tr>";
                  echo "<br>";
                  echo"<tr><td><br><input type=checkbox name=Camarones></td> Camarones con Patacones <td><input type=number  name=NCamarones placeholder=B/.6.00 ></td></tr>";
                  echo "<br>";
                  echo"<tr><td><br><input type=checkbox name=Concha></td> Concha con Patacones <td><input type=number  name=NConcha placeholder=B/.7.00 ></td></tr>";
                  echo "<br>";
                  echo"<tr><td><br><input type=checkbox name=Cacolica></td> Cacolica con Patacones <td><input type=number  name=NCacolica placeholder=B/.7.00 ></td></tr>";


              echo" </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th aling=center rowspan=3> Bebidas </th>";
              echo" <div class=col-15>";
              echo "<br>";
                    echo"<tr><td><input type=checkbox name=CervesasN></td> Cervezas Nacionales <td><input type=number  name=Nacionales placeholder=B/.1.00></td></tr>";
                        echo "<br>";
                            echo"<tr><td><br><input list=cervezas name=NameCervesas placeholder=Marca?></td></tr>";
                                echo"<datalist id=cervezas> <option value=AtlasGolden>  <option value=Soberana> </datalist>";
                        echo "<br>";

                    echo"<tr><td><br><input type=checkbox name=Agua></td> Agua Embotellada <td><input type=number name=NAgua placeholder=B/.1.00></td></tr>";
                echo"<br>";
                echo"<tr><td><h6 class=dishname>Su Cuenta es de:</h6></td>";
                echo"<td><input type=text class=dish-price value ".@$cuenta."></td></tr>";
                    echo" </div>";

                echo" <div class=col-10>";
                   echo "<br>";
                    echo "<br>";
                        echo"   <button name=crear type=submit class=btn caviar-btn><span></span> Crear Orden</button>   <input class=btn caviar-btn type=reset>";
                echo"  </div>";

              echo" </div>";


          echo"   </form>";

          /*****************************************DataCode******************************/
                    if(isset($_POST["crear"])){
                        $Nombre = $_POST["name"];
                        $Telefono = $_POST["telefono"];
                        $Cedula = $_POST["cedula"];
                        $Retirar = $_POST["retirar"];
                        $Direccion = $_POST["direccion"];
                    //*Pedido Cantidad
                        $NSaoPicante2 = $_POST ["NSaopicante2"];
                        $NSaoSinPicante2 = $_POST["NSaoSinPicante2"];
                        $NSaoPicante3 = $_POST ["NSaopicante3"];
                        $NSaoSinPicante3 = $_POST["NSaoSinPicante3"];
                        $NSopa = $_POST["NSopaCamarones"];
                        $NsopaA = $_POST["NSopaCamaronesA"];
                        $NCeviche = $_POST["NCeviche"];
                        $NPescado = $_POST["NPescado"];
                        $NCamarones = $_POST["NCamarones"];
                        $NConcha = $_POST["NConcha"];
                        $NCacolica = $_POST["NCacolica"];
                        $NNacionales = $_POST["Nacionales"];
                        $TextNacionales = $_POST["NameCervesas"];
                        $NAgua = $_POST["NAgua"];
                        //Checket *
                        @$Sao2 = $_POST ["Sao2"];
                        @$Sao3 = $_POST ["Sao3"];
                        @$SopaCamarones = $_POST["SopaCamarones"];
                        @$Ceviche = $_POST["Ceviche"];
                        @$Pescado = $_Post["Pescado"];
                        @$Camarones = $_POST ["Camarones"];
                        @$Concha = $_POST["Concha"];
                        @$Cacolica = $_POST["Cacolica"];
                        @$Cerveza = $_Post["CervezasN"];
                        @$Agua = $_POST["Agua"];
                        //Validacion de si entra a una no entra al sql*
                        $val = false;
                        $pedido = null;
                        $cuenta = 0;

                        //*********************************Validacion
                        if( (isset($Sao2) && $NSaoPicante2>0) || (isset($Sao2) && $NSaoSinPicante2>0)
                            || (isset($Sao3) && $NSaoPicante3>0) || ( isset($Sao3) && $NSaoSinPicante3>0 )
                              || (isset($SopaCamarones) && $NSopa>0 ) || ( isset($SopaCamarones) && $NsopaA>0 )
                                || (isset($Ceviche) && $NCeviche>0)
                                  || (isset($Pescado) && $NPescado>0)
                                    ||(isset($Camarones) && $NCamarones>0)
                                      ||(isset($Concha) && $NConcha>0 )
                                        ||(isset($Cacolica) && $NCacolica>0)
                                          ||(isset($Cerveza) && $NNacionales>0 && isset($TextNacionales))
                                              ||(isset($Agua) && $NAgua>0)){
                                                $val=true;
                                                ?>
                                                <script>
                                                alert("Correcto");
                                                </script>
                                                <?php
                                              }
                                              else{
                                                $val = false;
                                                ?>
                                                <script>
                                                alert("Verifique si asigno un producto sin cantidad \n o una cantidad sin asignar producto");
                                                </script>
                                                <?php
                                              }

                        if(isset($Sao2) && $NSaoPicante2>0){
                          $pedido = $pedido ."\n". $NSaoPicante2 ." De Sao Picante de B/.2.00";
                            $cuenta = $cuenta + (2.00 * $NSaoPicante2);
                          }if(isset($Sao2) && $NSaoSinPicante2>0){
                            $pedido = $pedido ."\n". $NSaoSinPicante2 . " De Sao Sin Picante de  B/.2.00";
                              $cuenta = $cuenta + (2.00 * $NSaoSinPicante2);
                            }if(isset($Sao3) && $NSaoPicante3>0){
                              $pedido = $pedido ."\n". $NSaoPicante3 . " De Sao Picante de  B/.3.00";
                                $cuenta = $cuenta + (3.00 * $NSaoPicante3);
                              }if(isset($Sao3) && $NSaoSinPicante3>0){
                                $pedido = $pedido ."\n". $NSaoSinPicante3 . " De Sao Sin Picante de  B/.3.00";
                                  $cuenta = $cuenta + (3.00 * $NSaoSinPicante3);
                              }if(isset($SopaCamarones) && $NSopa>0){
                                  $pedido = $pedido ."\n". $NSopa . " De Sopa de Camarones";
                                    $cuenta = $cuenta + (3.00 * $NSopa);
                                }if(isset($SopaCamarones) && $NsopaA>0){
                                  $pedido = $pedido ."\n". $NsopaA . " De Sopa de Camarones con Arroz";
                                    $cuenta = $cuenta + (3.50 * $NsopaA);
                                }if(isset($Ceviche) && $NCeviche>0){
                                  $pedido = $pedido ."\n". $NCeviche . " De Ceviche de Camarones";
                                    $cuenta = $cuenta + (1.50 * $NCeviche);
                                }if(isset($Pescado) && $NPescado>0){
                                  $pedido = $pedido ."\n". $NPescado . " De Pesca'o Con Patacones";
                                    $cuenta = $cuenta + (5.00 * $NPescado);
                                }if(isset($Camarones) && $NCamarones>0){
                                  $pedido = $pedido ."\n". $NCamarones . " De Camarones Con Patacones";
                                    $cuenta = $cuenta + (6.00 * $NCamarones);
                                }if(isset($Concha) && $NConcha>0){
                                  $pedido = $pedido ."\n". $NConcha . " De Concha Con Patacones";
                                    $cuenta = $cuenta + (7.00 * $NConcha);
                                }if(isset($Cacolica) && $NCacolica>0){
                                  $pedido = $pedido ."\n". $NCacolica . " De Cacolica Con Patacones";
                                    $cuenta = $cuenta + (7.00 * $NCacolica);
                                }if(isset($Cerveza) && $NNacionales>0){
                                  $pedido = $pedido ."\n". $NNacionales . " de " .$TextNacionales;
                                    $cuenta = $cuenta + (1.00 * $NNacionales);
                                }if(isset($Agua) && $NAgua>0){
                                  $pedido = $pedido ."\n". $NAgua . " Botellas de Agua";
                                    $cuenta = $cuenta + (1.00 * $NAgua);
                                }
                        ///SQL
                          if($val == true && isset($pedido) && $cuenta > 0){
                          $sql ="INSERT INTO pedidos values ('$Nombre','$Telefono','$Cedula','$Retirar','$Direccion','$pedido',null,'$cuenta');";
                          $resp=mysqli_query($conn, $sql) or die (mysql_error());
                        }
                      }

            ?>

    </section>
    <!-- ****** Reservation Area End ****** -->

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
