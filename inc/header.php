<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $header['title'] ?></title>
        <meta name="description" content="<?php echo $header['description'] ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/jquery-1.9.1.min.js"></script>
        <link rel="icon" href="img/logo.png">

        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

        <link rel="dns-prefetch" href="http://fonts.googleapis.com/css" />

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
        function fullheader(){
            $('header').removeClass('add-bg') ;
            $('header .company-mission').remove() ;
            $('header').addClass('full-header') ;
        }

        $(document).ready(function(){

            $('.left').hide();

            $('.right').on('click', function(e){
                e.preventDefault();
                var mythis = $(this) ;
                $('.slider').animate({ marginLeft: '-=538px' }, 500 , function(){
                    $('.left').show();
                    mythis.hide();
                });
            });

            $('.left').on('click', function(e){
                e.preventDefault();
                var mythis = $(this) ;
                $('.slider').animate({ marginLeft: '0px' }, 500 , function(){
                    $('.right').show();
                    mythis.hide();
                });
            });

        });
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">

        <header class="add-bg">

        <div class="my-header">
        <a href="./home" class="brand"></a>       

        <ul class="nav">
        <li><a class="home" href="./home">home</a></li>
        <li><a class="about" href="./about-us">about us</a></li>
        <li><a class="projects" href="./projects">projects</a></li>
        <li><a class="contact" href="./contact">contact</a></li>            
        </ul>

         </div>

         <div class="company-mission">
         <h2>our mission statement</h2>
           <p>
             At Cornfield Transnational, we follow a simple business philosophy "which is treating every client as an individual not a number". Our actions and decision demonstrate these values. We have a strong believe that putting our values into practice helps us serve our customers better and help develop a long lasting relationship.
           </p>
             
         </div>

        </header>

        <script type="text/javascript">

$(document).ready(function(){
    // Choose an active window
    $('.nav').find('.<?php echo $header['page'] ?>').addClass('active');
});

</script>