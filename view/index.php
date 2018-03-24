<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta name="author" content="Daniel G. Silva & Lucas Alves Teixeira">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="../assets/img/fr_ic.jpg" />
      <title>Classificados - Folha da Região</title>
      <!-- Bootstrap core CSS -->
      <link href="../assets/css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="../assets/css/style.css" rel="stylesheet">
      <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
      <!-- Just for debugging purposes. Don't actually copy this line! -->
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      
   </head>
   <body>

      <!-- Inicio do Menu (topo) -->
      <?php include("fragmentos/menu.php"); ?>
      <!-- Fim do Menu -->

      <!-- Main -->
      <div id="main">
      <!-- Banner topo-->
      
         <div class="inner">
            <section class="tiles">
               <article class="style1">
                  <span class="image">
                  <img src="../assets/img/veiculos.jpg" alt="" />
                  </span>
                  <a href="veiculos">
                     <h2>Veículos</h2>
                     <div class="content">
                        <p class="desc_categoria">Encontre o veículo que esta procurando clicando aqui.</p>
                     </div>
                  </a>
               </article>
               <article class="style2">
                  <span class="image">
                  <img src="../assets/img/motos.jpg" alt="" />
                  </span>
                  <a href="motos.php?id=24&sub=Motos Agrale">
                     <h2>Motos</h2>
                     <div class="content">
                        <p class="desc_categoria">Encontre a moto que está procurando clicando aqui.</p>
                     </div>
                  </a>
               </article>
               <article class="style3">
                  <span class="image">
                  <img src="../assets/img/imoveis.jpg" alt="" />
                  </span>
                  <a href="imoveis.php?id=91&sub=Apartamentos%20alugam-se">
                     <h2>Imóveis</h2>
                     <div class="content">
                        <p class="desc_categoria">Encontre o imovél que esta procurando clicando aqui.</p>
                     </div>
                  </a>
               </article>
               <article class="style4">
                  <span class="image">
                  <img src="../assets/img/negocios.jpg" alt="" />
                  </span>
                  <a href="#">
                     <h2>Negócios e Oportunidades</h2>
                     <div class="content">
                        <p class="desc_categoria">Oportunidades de fechar grandes negócios clicando aqui.</p>
                     </div>
                  </a>
               </article>
               <article class="style5">
                  <span class="image">
                  <img src="../assets/img/empregos.jpg" alt="" />
                  </span>
                  <a href="#">
                     <h2>Empregos</h2>
                     <div class="content">
                        <p class="desc_categoria">Esta a procura de emprego? Clique aqui e você poderá achar.</p>
                     </div>
                  </a>
               </article>
               <article class="style5">
                  <span class="image">
                  <img src="../assets/img/diversos.jpg" alt="" />
                  </span>
                  <a href="#">
                     <h2>Diversos</h2>
                     <div class="content">
                        <p class="desc_categoria">Ache o que está procurando clicando aqui.</p>
                     </div>
                  </a>
               </article>
            </section>
         </div>
      </div>
      
      <!-- Inicio do footer -->
      <?php include("fragmentos/footer.php"); ?>
      <!-- Fim do footer -->

      <!-- Bootstrap core JavaScript -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/retina-1.1.0.js"></script>
      <script src="../assets/js/jquery.hoverdir.js"></script>
      <script src="../assets/js/jquery.hoverex.min.js"></script>
      <script src="../assets/js/jquery.prettyPhoto.js"></script>
      <script src="../assets/js/jquery.isotope.min.js"></script>
      <script src="../assets/js/custom.js"></script>
      <script>
         // Portfolio
         (function($) {
            "use strict";
            var $container = $('.portfolio'),
               $items = $container.find('.portfolio-item'),
               portfolioLayout = 'fitRows';
               
               if( $container.hasClass('portfolio-centered') ) {
                  portfolioLayout = 'masonry';
               }
                     
               $container.isotope({
                  filter: '*',
                  animationEngine: 'best-available',
                  layoutMode: portfolioLayout,
                  animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
               },
               masonry: {
               }
               }, refreshWaypoints());
               
               function refreshWaypoints() {
                  setTimeout(function() {
                  }, 1000);   
               }
                     
               $('nav.portfolio-filter ul a').on('click', function() {
                     var selector = $(this).attr('data-filter');
                     $container.isotope({ filter: selector }, refreshWaypoints());
                     $('nav.portfolio-filter ul a').removeClass('active');
                     $(this).addClass('active');
                     return false;
               });
               
               function getColumnNumber() { 
                  var winWidth = $(window).width(), 
                  columnNumber = 1;
               
                  if (winWidth > 1200) {
                     columnNumber = 5;
                  } else if (winWidth > 950) {
                     columnNumber = 4;
                  } else if (winWidth > 600) {
                     columnNumber = 3;
                  } else if (winWidth > 400) {
                     columnNumber = 2;
                  } else if (winWidth > 250) {
                     columnNumber = 1;
                  }
                     return columnNumber;
                  }       
                  
                  function setColumns() {
                     var winWidth = $(window).width(), 
                     columnNumber = getColumnNumber(), 
                     itemWidth = Math.floor(winWidth / columnNumber);
                     
                     $container.find('.portfolio-item').each(function() { 
                        $(this).css( { 
                        width : itemWidth + 'px' 
                     });
                  });
               } 
               function setPortfolio() { 
                  setColumns();
                  $container.isotope('reLayout');
               }
                  
               $container.imagesLoaded(function () { 
                  setPortfolio();
               });
               
               $(window).on('resize', function () { 
               setPortfolio();          
            });
         })(jQuery);
      </script>
   </body>
</html>