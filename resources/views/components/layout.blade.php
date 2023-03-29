 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>NewsPrk Dark Version</title>
     <!-- META -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!--::::: FABICON ICON :::::::-->
     <link rel="icon" href="/assets/img/icon/fabicon.png">
     <!--::::: ALL CSS FILES :::::::-->
     @vite('resources/css/app.css')
     <link rel="stylesheet" href="/assets/css/plugins/bootstrap.min.css">
     <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">
     <link rel="stylesheet" href="/assets/css/plugins/fontawesome.css">
     <link rel="stylesheet" href="/assets/css/plugins/modal-video.min.css">
     <link rel="stylesheet" href="/assets/css/plugins/owl.carousel.css">
     <link rel="stylesheet" href="/assets/css/plugins/slick.css">
     <link rel="stylesheet" href="/assets/css/plugins/stellarnav.css">
     <link rel="stylesheet" href="/assets/css/theme.css">
 </head>


 <body class="dark-theme primay_bg">

     <div class="preloader dark-p">
         <div>
             <div class="nb-spinner"></div>
         </div>
     </div>

     <x-header />

     {{ $slot }}

     <x-footer />


     <!--::::: ALL JS FILES :::::::-->
     <script src="/assets/js/plugins/jquery.2.1.0.min.js"></script>
     <script src="/assets/js/plugins/bootstrap.min.js"></script>
     <script src="/assets/js/plugins/jquery.nav.js"></script>
     <script src="/assets/js/plugins/jquery.waypoints.min.js"></script>
     <script src="/assets/js/plugins/jquery-modal-video.min.js"></script>
     <script src="/assets/js/plugins/owl.carousel.js"></script>
     <script src="/assets/js/plugins/popper.min.js"></script>
     <script src="/assets/js/plugins/circle-progress.js"></script>
     <script src="/assets/js/plugins/wow.min.js"></script>
     <script src="/assets/js/plugins/slick.min.js"></script>
     <script src="/assets/js/plugins/stellarnav.js"></script>
     <script src="/assets/js/main.js"></script>
 </body>

 </html>
