
 <!DOCTYPE html>
<!-- saved from url=(0034)http://www.melon.co.id/smartmusic/ -->
<html id="melonWebApp" ng-app="melonWebApp" lang="en" class="no-js ng-scope" style="overflow-x: hidden;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
        <!--<base href="/smartmusic/">--><base href=".">
 
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
   <link rel="stylesheet" href="styles.css">
   <script src="./js/jquery-2.0.3.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<!--    <link rel="shortcut icon" href="http://www.melon.co.id/gudang_musik/images/favicon.ico" type="image/x-icon">
 -->        <!--<link rel="stylesheet" type="text/css" media="screen" href="/album_purchase/css/bootstrap-combined-mod_v1.css" />-->
        <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./css/normalize.css">
        <link rel="stylesheet" type="text/css" href="./css/custom.css">
        <link rel="stylesheet" type="text/css" href="./css/custom2.css">
        <!-- Owl Carousel Assets -->
        <link href="./css/owl.carousel.css" rel="stylesheet">
        <link href="./css/owl.theme.css" rel="stylesheet">
        <style type="text/css">
            .gallery
{
    display: inline-block;
    margin-top: 20px;
}
.blur {
    -webkit-filter: blur(4px)
    
}

        </style>

        <script type="text/javascript">
            $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none",
        padding:0, margin:0,
        
        beforeShow: function () {
        $("body *:not(.fancybox-overlay, .fancybox-overlay *)").addClass("blur");
        },
        afterClose: function () {
            $("body *:not(.fancybox-overlay, .fancybox-overlay *)").removeClass("blur");
        }
        
    });
});

   
  
        </script>
     
   <title>Ro-li</title>
    
       
</head>
<body> 
  <nav class="navbar navbar-default" role="navigation">
  <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle col-md-1" ng-init="navCollapsed = true" ng-click="navCollapsed = !navCollapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>

                <div class="collapse navbar-collapse col-md-8 col-md-offset-7" ng-class="!navCollapsed && 'in'" ng-click="navCollapsed=true">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="menuHome"><a href="http://www.triasm.com/roli/wap" ng-class="{'activelink': loc == '/'}" ng-click="loc = '/'" class="activelink">Home</a></li>
                        <!-- <li id="menuPromo"><a ng-class="{'activelink': loc == '/promo'}" ng-click="loc = '/promo'" href="http://www.melon.co.id/smartmusic/promo" class="">Promo</a></li>
                        <li id="menuFaq"><a ng-class="{'activelink': loc == '/bantuan'}" ng-click="loc = '/bantuan'" href="http://www.melon.co.id/smartmusic/bantuan">Bantuan</a></li>
                        <li id="menuContact"><a ng-class="{'activelink': loc == '/kontak'}" ng-click="loc = '/kontak'" href="http://www.melon.co.id/smartmusic/kontak">Kontak</a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div></div>
    </nav>
<br>
<!-- <div class="row padrow">
        <div class="col-md-10 col-md-offset-1" style="padding:0;cursor:pointer;"><img style="width: 100%;" src="./images/banner.png" onclick="gotoUrl('https://play.google.com/store/apps/details?id=com.melon.smartfren');"></div>
        <div class="col-md-1">
             <img ng-src="/gudang_musik/images/banner-side.png" style="cursor:pointer;display: block;margin-left: auto;margin-right: auto;position: absolute" onclick="gotoUrl('https://play.google.com/store/apps/details?id=com.melon.smartfren');" src="./images/banner-side.png">  
        </div>
    </div>
 -->
<br>
    <div class="row padrow">
         
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="gallery-title">Roli</h2>
         
        </div>
    </div>

   
 <div class="container">
    <div class="row">
        <div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox"  href="./proc.php?art=1">
                 <!-- href="sms:99494?body=REG%20HIJAB"> -->
               
                
                
                    <img class="img-responsive" alt="" src="./src/img/trias1.jpeg" />
                </a>
            </div>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="./proc.php?art=2">
                <!-- href="sms:99494?body=REG%20AAGYM"> -->
                    <img class="img-responsive" alt="" src="./src/img/trias2-aa-gym.jpeg" />
                </a>
            </div> 
            <!-- <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="proc.php?art=3">
                    <img class="img-responsive" alt="" src="img.php?src=images/sibad.jpg&h=320&w=320&q=50&zc=1" />
                </a>
            </div> 
           <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="proc.php?art=4">
                    <img class="img-responsive" alt="" src="img.php?src=images/zeezee.jpg&h=320&w=320&q=50&zc=1" />
                </a>
            </div> 
           <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="proc.php?art=5">
                    <img class="img-responsive" alt="" src="img.php?src=images/chelsea.jpg&h=320&w=320&q=50&zc=1" />
                </a>
            </div>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="proc.php?art=6">
                    <img class="img-responsive" alt="" src="img.php?src=images/zaskiasungkar.jpg&h=320&w=320&q=50&zc=1" />
                </a>
            </div>   -->
            
        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->

 
 

 </html>