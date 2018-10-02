<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>sSync</title>
    <link rel="stylesheet" href="assets/css/bulma.min.css" />
    <title> Real Time Damage Detection System | Home</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Storage ui kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
                                       Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    
    <!-- //end-smoth-scrolling -->
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.countdown.js"></script>
    <script src="js/script.js"></script>
    <!--responsive tab script here-->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });

    </script>
    <!--//resposive tab-->
    <script>
        $(document).ready(function(c) {
            $('.cros').on('click', function(c) {
                $('.user-profile').fadeOut('slow', function(c) {
                    $('.user-profile').remove();
                });
            });
        });

    </script>
    <style>
        #backgroundImage {
            z-index: 1;
        }
        
        #backgroundImage:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-image: url(images/background.png);
            background-repeat: no-repeat;
            background-size: 100%;
            opacity: 0.4;
            filter: alpha(opacity=40);
            height: 100%;
            width: 100%;
        }

    </style>

</head>

<body id="backgroundImage">
