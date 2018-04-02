<!doctype html>
<html>
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
            <title>GR</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href=".js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css"> -->
        <link rel="stylesheet" href="./css/main.css">
    </head>

<!-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -->

    <body>
        <div class="bg">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3 col-md-3 main-logo">
                    <a href="index.php?page=index">
                        <img src="http://allpicts.in/wp-content/uploads/2017/08/cool-under-armour-wallpapers-09-of-40-500x375.png">
                    </a>
                    </div>
                    <div class="col-xs-9 col-md-9">
                        <ul class="main-menu">
                            <li class="main-menu-item {{ $page == 'index' ? 'active' : '' }}">
                                <a href="/">Main</a>
                            <li class="main-menu-item {{ $page == 'mystuff' ? 'active' : '' }}">
                                <a href="/mystuff">My Stuff</a>
                            <li class="main-menu-item {{ $page == 'chat' ? 'active' : '' }}">
                                <a href="/chat">Communication</a>
                            <li class="main-menu-item {{ $page == 'registration' ? 'active' : '' }}">
                                <a href="/registration">Registration</a>
                            <li class="main-menu-item {{ $page == 'about' ? 'active' : '' }}">
                                <a href="/about">About Us</a>                                            
                            </li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </header>

        @yield('content')


        <footer>
            
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
            <script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
            <script src="./js/js.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUj_RWcRButkak51OpZIOIqY-5HlqadL4&callback=myMap"></script>
            <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            
            <div class="container-fluid">
                <div class="col-xs-12 footer-text">
                    <p>
                        Made by Gunārs Radziņš
                    </p>
                </div>
            </div>
        </footer>
    </div>
    </body>
</html>