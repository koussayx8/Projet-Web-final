<?php
require '../../Controller/VoitureC.php';
require_once '../../config.php';
$VoitureC = new VoitureC();
$listVoiture=$VoitureC->afficherNomMarque();


?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <style>
        input,
        textarea,
        button {
            height: 25px;
            margin: 0;
            padding: 10px;
            font-family: Raleway, sans-serif;
            font-weight: normal;
            font-size: 12pt;
            outline: none;
            border-radius: 0;
            background: none;
            border: 1px solid #282B33;
        }

        button,
        select {
            height: 45px;
            padding: 0 15px;
            cursor: pointer;
        }

        button {
            background: none;
            border: 1px solid black;
            margin: 25px 0;
        }

        button:hover {
            background-color: #282B33;
            color: white;
        }


        .tools {
            overflow: auto;
            zoom: 1;
        }

        .search-area {
            float: right;
            width: 10%;
        }

        .settings {
            display: none;
            float: right;
            width: 40%;
            text-align: right;
        }

        #view {
            display: none;
            width: auto;
            height: 47px;
        }

        #searchbutton {
            width: 60px;
            height: 47px;
        }

        input#search {
            width: 30%;
            width: calc(100% - 90px);
            padding: 10px;
            border: 1px solid #282B33;
        }

        @media screen and (max-width:400px) {
            .search-area {
                width: 100%;
            }
        }

        .products {
            width: 100%;
            font-family: Raleway;
        }

        .product {
            display: inline-block;
            width: calc(24% - 13px);
            margin: 10px 10px 30px 10px;
            vertical-align: top;
        }

        .product img {
            display: block;
            margin: 0 auto;
            width: auto;
            height: 200px;
            max-width: calc(100% - 20px);
            background-cover: fit;
            box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.8);
            border-radius: 2px;
        }

        .product-content {
            text-align: center;
        }

        .product h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 10px 0 0 0;
        }

        .product h3 small {
            display: block;
            font-size: 16px;
            font-weight: 400;
            font-style: italic;
            margin: 7px 0 0 0;
        }

        .product .product-text {
            margin: 7px 0 0 0;
            color: #777;
        }

        .product .price {
            font-family: sans-serif;
            font-size: 16px;
            font-weight: 700;
        }

        .product .genre {
            font-size: 14px;
        }


        @media screen and (max-width:1150px) {
            .product {
                width: calc(33% - 23px);
            }
        }

        @media screen and (max-width:700px) {
            .product {
                width: calc(50% - 43px);
            }
        }

        @media screen and (max-width:400px) {
            .product {
                width: 100%;
            }
        }

        /* TABLE VIEW */

        @media screen and (min-width:401px) {
            .settings {
                display: block;
            }
            #view {
                display: inline;
            }
            .products-table .product {
                display: block;
                width: auto;
                margin: 10px 10px 30px 10px;
            }
            .products-table .product .product-img {
                display: inline-block;
                margin: 0;
                width: 120px;
                height: 120px;
                vertical-align: middle;
            }
            .products-table .product img {
                width: auto;
                height: 120px;
                max-width: 120px;
            }
            .products-table .product-content {
                text-align: left;
                display: inline-block;
                margin-left: 20px;
                vertical-align: middle;
                width: calc(100% - 145px);
            }
            .products-table .product h3 {
                margin: 0;
            }
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="HTML5 Template" />
      <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
      <meta name="author" content="potenzaglobalsolutions.com" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <title>Concept Car Dealer - Free Website Template</title>
      <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="style.css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Boîte de Recherche Impressionante</title>
    <style>
      body {
        margin: 0;
        padding: 0;

      }
      .search-box {
        position: absolute;
        top: 48%;
    left: 46%;
        transform: translate(-50%, -50%);
        background: #666666;
        height: 40px;
        border-radius: 40px;
        padding: 10px;
      }
      .search-box:hover > .search-txt {
        width: 240px;
        padding: 0 6px;
      }
      .search-box:hover > .search-btn {
        background: white;
        color: black;
      }
      .search-btn {
        color: #eeeeee;
        float: right;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #2f3640;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.4s;
        color: white;
        cursor: pointer;
        text-decoration: none;
      }
      .search-btn > i {
        font-size: 20px;
      }
      .search-txt {
        border: none;
        background: none;
        outline: none;
        float: left;
        padding: 0;
        color: white;
        font-size: 16px;
        transition: 0.4s;
        line-height: 40px;
        width: 0px;
        font-weight: bold;
      }
    </style>
   </head>
   <body>
    


      <div id="loading">
         <div id="loading-center">
            <img src="images/loader.gif" alt="">
         </div>
      </div>
      <header id="header" class="defualt">
         <div class="menu">
            <nav id="menu" class="mega-menu">
               <section class="menu-list-items">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <ul class="menu-logo">
                              <li>
                                 <a href="index.html"><img id="logo_img" src="images/logo-light.png" alt="logo"> </a>
                              </li>
                           </ul>
                           <!--div class="search-box">
                                 <input type="text" name="" class="search-txt" placeholder="Tapez pour rechercher" />
                                 <a class="search-btn" href="#">
                                 <i class="fa fa-search" aria-hidden="true"></i>
                                 </a>
                           </div!-->
                           <ul class="menu-links">
                              <li class="active"><a href="index.html">Home</a></li>
                              <li><a href="cars.php" class="nav-link">VOITURES</a></li>
                              <li><a href="reclamation.html">Reclamation</a></li>
                              <li><a href="livraison.html">Livraison</a></li>
                              <li><a href="panier.html">Panier</a></li>
                              <li><a href="sign in.html">SIGN IN</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </nav>
         </div>
      </header>
      <section class="feature-car bg-4 bg-overlay-black-70 page-section-ptb">

         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="section-title">
                     <span class="text-white">venez découvrir nos nouveau voiture</span>
                     <h2 class="text-white">LES VOITURES NEUVES</h2>
                     <div class="separator">

              
             </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="owl-carousel-1">
                  <?php
         foreach ($listVoiture as $Voiture) {
            $Voiture['nom_marque'];
            $IdV= $Voiture['id_voiture'];
            $NomV = $Voiture['nom_voiture'];
            $DescV =$Voiture['description'];
            $PrixV =$Voiture['prix'];
            $ImageV =$Voiture['image'];
          
            $db1 = config::getConnexion();
            
         ?>
                     <div class="item">
                        <div class="car-item text-center">
                           <div class="car-image">
                              <img class="img-responsive" src="images/<?php echo $Voiture['image']?>" alt="" />
                              <div class="car-overlay-banner">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                   
                                 </ul>
                              </div>
                           </div>
                           <div class="car-list">
                              <ul class="list-inline">
                                 <li><i class="fa fa-registered"></i><span ><?php echo $Voiture['nom_marque']?></span></li>
                  
                              </ul>
                           </div>
                           <div class="car-content">

                              <a href="#"><?php echo $Voiture['nom_voiture']?></a>
                              <div class="separator"> <span ><?php echo $Voiture['description']?></span></div>
                              <div class="price">
                                 <span class="new-price"><?php echo $Voiture['prix']?> DT</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
        }					
       ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         
      </section>
        <script>
            $("#view").click(function () {
                $(".products").toggleClass("products-table");
            });
        </script>



      </body>

      <footer class="footer bg-2 bg-overlay-black-90">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="social">
                     <ul>
                        <li>
                           <a class="facebook" href="#">facebook
                           <i class="fa fa-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a class="twitter" href="#">twitter
                           <i class="fa fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a class="pinterest" href="#">pinterest
                           <i class="fa fa-pinterest-p"></i>
                           </a>
                        </li>
                        <li>
                           <a class="dribbble" href="#">dribbble
                           <i class="fa fa-dribbble"></i>
                           </a>
                        </li>
                        <li>
                           <a class="google-plus" href="#">google plus
                           <i class="fa fa-google-plus"></i>
                           </a>
                        </li>
                        <li>
                           <a class="behance" href="#">behance
                           <i class="fa fa-behance"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="about-content">
                     <a href="#">
                        <img class="img-responsive" src="images/logo-light.png" alt=""></a>
                        <p>We provide everything you need to build an amazing dealership website developed especially for car sellers dealers or auto motor retailers.</p>
                  </div>
                  <div class="address">
                  <ul>
                  <li>
                  <i class="fa fa-map-marker"></i>
                  <span>220E Front St. Burlington NC 27215</span>
                  </li>
                  <li>
                  <i class="fa fa-phone"></i>
                  <span>(007) 123 456 7890</span>
                  </li>
                  <li>
                  <i class="fa fa-envelope-o"></i>
                  <span>support@website.com</span>
                  </li>
                  </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6">
               <div class="usefull-link">
               <h6 class="text-white">Useful Links</h6>
               <ul>
               <li>
               <a href="#">
               <i class="fa fa-angle-double-right"></i> Change Oil and Filter</a>
               </li>
               <li>
               <a href="#">
               <i class="fa fa-angle-double-right"></i> Brake Pads Replacement</a>
               </li>
               <li>
               <a href="#">
               <i class="fa fa-angle-double-right"></i> Timing Belt Replacement</a>
               </li>
               <li>
               <a href="#">
               <i class="fa fa-angle-double-right"></i> Pre-purchase Car Inspection</a>
               </li>
               <li>
               <a href="#">
               <i class="fa fa-angle-double-right"></i> Starter Replacement</a>
               </li>
               </ul>
               </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="recent-post-block">
                     <h6 class="text-white">recent posts</h6>
                     <div class="recent-post">
                        <div class="recent-post-image">
                           <img class="img-responsive" src="images/car/01.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                           <a href="#">Time to change your
                           </a>
                           <span class="post-date">
                           <i class="fa fa-calendar"></i>JAN 10, 2018</span>
                        </div>
                     </div>
                     <div class="recent-post">
                        <div class="recent-post-image">
                           <img class="img-responsive" src="images/car/02.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                           <a href="#">The best time to
                           </a>
                           <span class="post-date">
                           <i class="fa fa-calendar"></i>JAN 10, 2018</span>
                        </div>
                     </div>
                     <div class="recent-post">
                        <div class="recent-post-image">
                           <img class="img-responsive" src="images/car/03.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                           <a href="#">Replacing a timing
                           </a>
                           <span class="post-date">
                           <i class="fa fa-calendar"></i>JAN 10, 2018</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6">
                  <div class="news-letter">
                     <h6 class="text-white">subscribe Our Newsletter</h6>
                     <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                     <form class="news-letter">
                        <input type="email" placeholder="Enter your Email" class="form-control placeholder">
                        <a class="button red" href="#">Subscribe</a>
                     </form>
                  </div>
               </div>
            </div>
            <hr/>
            <div class="copyright">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="text-left">
                        <p>©Copyright 2018 Concept Car Dealer Developed by
                           <a href="http://www.devdap.com/" target="_blank">devdap.com</a>
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <ul class="list-inline text-right">
                        <li>
                           <a href="#">privacy policy
                           </a> |
                        </li>
                        <li>
                           <a href="#">terms and conditions
                           </a> |
                        </li>
                        <li>
                           <a href="#">reclamation
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="car-top">
         <span><img src="images/car.png" alt=""></span>
      </div>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/mega_menu.js"></script>
      <script type="text/javascript" src="js/jquery.appear.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="vendor/jquery.tools.min.js"></script>
      <script type="text/javascript" src="vendor/jquery.revolution.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="vendor/extensions/revolution.extension.slideanims.min.js"></script>
      
      <script type="text/javascript" src="js/custom.js"></script>
      <script type="text/javascript">(function(b){var a=jQuery;var c;a(document).ready(function(){if(a("#rev_slider_2_1").revolution==undefined){revslider_showDoubleJqueryError("#rev_slider_2_1")}else{c=a("#rev_slider_2_1").show().revolution({sliderType:"standard",sliderLayout:"fullwidth",dottedOverlay:"none",delay:9000,navigation:{keyboardNavigation:"off",keyboard_direction:"horizontal",mouseScrollNavigation:"off",mouseScrollReverse:"default",onHoverStop:"off",bullets:{enable:true,hide_onmobile:false,style:"hermes",hide_onleave:false,direction:"horizontal",h_align:"center",v_align:"bottom",h_offset:0,v_offset:50,space:10,tmp:""}},visibilityLevels:[1240,1024,778,480],gridwidth:1570,gridheight:1000,lazyType:"none",shadow:0,spinner:"spinner3",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",disableProgressBar:"on",hideThumbsOnMobile:"off",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,debugMode:false,fallbacks:{simplifyAll:"off",nextSlideOnWindowFocus:"off",disableFocusListener:false,}})}})})(jQuery);</script>
   </body>
</html>