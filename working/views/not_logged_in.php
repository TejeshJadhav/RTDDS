<?php
include('header.php');
?>
<body id="backgroundImage">
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
<div class="header" style="opacity: 1">
        <h3 class="main-head">Real Time Damage Detection System</h3>
        <div class="head-strip">
            <div class="head-strip-left">
                <span class="joe"><img height="66px" width="66px" src="images/1.png" alt=""> </span>
                <div class="joe-text">
                    <h2>Welcome</h2>
                    <p>Please Login To Continue</p>
                </div>
            </div>
            <div class="head-strip-right">
                <ul class="strip-date">
                    <li><span class="cal"> </span>
                        <h4 id="dt"></h4>
                    </li>
                    <!--get date-->
                    <script type="text/javascript">
                        var d = new Date();
                        document.getElementById("dt").innerHTML = d.toLocaleDateString();

                    </script>
                    <li><span class="clock"> </span>
                        <h4 id="tm"></h4>
                    </li>
                    <!--get time-->
                    <script type="text/javascript">
                        var d = new Date();
                        document.getElementById("tm").innerHTML = d.toLocaleTimeString();

                    </script>
                </ul>
                <div class="settiing">
                    <div class="menu2">
                        <span class="menu-at-on"><img src="images/setter.png" alt=""> </span>
                        <ul>
                            <li><a href="Profile.php">Profile</a></li>
                            <li><a href="Login.php">Login</a></li>
                            <li><a href="Logout.php">Log Out</a></li>
                        </ul>
                        <script>
                            $("span.menu-at-on").addEventListener("click:,function() {
                                $(".menu2 ul").slideToggle(500, function() {});
                            });

                        </script>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>


        <!--login start here-->
        <div class="login">
            <h4> LOGIN </h4>
            <form method="post" action="index.php" name="loginform">
                <div class="login-name">
                    <span class="login-user"> </span>
                    <input id="login_input_username" type="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" name="user_name" required />
                </div>
                <div class="login-password">
                    <span class="login-key"> </span>
                    <input id="login_input_password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="user_password" autocomplete="off" required />
                </div>
                <div class="remember">
                    <span class="checkbox1">
                        <label class="checkbox"><input type="checkbox" checked=""><i> </i>Remember me</label>
                    </span>
                    <br>
                    <br>
                    <div class="send">
                        <input type="submit" name="login" value="LOGIN">
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="send">
                        <p>New User? </p>
                        <a href="register.php">
                            <input type="button" value="REGISTER">
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--            </form>-->
        </div>
        <!--login end here-->


        <!--banner start here-->
        <div class="banner">
            <div class="bann-left">
                <span class="bann-part"> </span>
                <div class="bann-text">
                    <h1>Know More About Real Time Damage Detection System?</h1>
                    <div style="align-content: center">
                        <!--                        <img style="border-style: outset; align-content: center" height="350px" width="80%" src="images/rtdds.png" alt="">-->
                    </div>
                    <!--                    <p>remove image add column text here</p>-->
                </div>
            </div>
            <div class="bann-rit">
                <a href="Explore.php">EXPLORE</a>
            </div>
            <div class="clearfix"> </div>
        </div>

        <!--map start here-->
        <div class="map">
            <div class="login">
                <h3>Contact Us</h3>
                <ul>
                    <li>Email : <a>info@fcrit.ac.in</a></li>
                    <li>Website : <a>fcrit.ac.in</a></li>
                    <li>Call : 022-2345678</li>
                </ul>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7321043734355!2d72.98951561446793!3d19.075512687088153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6cae0d8c5ab%3A0xbbf4481d662ca2d8!2sFr.+C.+Rodrigues+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1538075639300" width="400" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="location">
            <div class="col-md-6 rids">
                <span class="localpointer"> </span>
                <div class="rid-text">
                    <h3>FCRIT</h3>
                    <p>Sector 9A,Vashi</p>
                    <p>India
                        <p>
                            <p></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <div class="clearfix"> </div>
    <div class="clearfix"> </div>
    <div class="copy-right">
        <p>© 2018 Developed by Tejesh Jadhav </p>
        <script type="text/javascript">
            document.addEventListener("ready",function() {
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            });

        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

    </div>
    <!--header bottom end here-->
    <!--header end here-->
    <?php
include('footer.php');
?>
