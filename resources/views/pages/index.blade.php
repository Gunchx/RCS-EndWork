@extends('layout')

@section('content')

<main>
                <div class="container">
                    <div class="row">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                <img src="http://cdn.wonderfulengineering.com/wp-content/uploads/2016/01/Desktop-Wallpaper-1.jpg">
                                </div>
                                <div class="item">
                                <img src="https://www.pixelstalk.net/wp-content/uploads/2016/05/Free-Images-Fall-Desktop-Wallpapers.jpg">
                                </div>
                                <div class="item">
                                <img src="http://hddesktopwallpaper.org/wp-content/uploads/2016/10/desktop-wallpapers-free3.jpg">
                                </div>
                            </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 midle-text">
                            <div class="row">
                                Some Text:
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="row small-border">
                                <div class="col-sm-4 hidden-xs small-picture">
                                    <a href="/pictures">
                                        <img src="http://cdn.wonderfulengineering.com/wp-content/uploads/2016/01/Desktop-Wallpaper-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-8 main-title">
                                    <h3>
                                        <a href="/pictures">
                                            Title
                                        </a>
                                    </h3>
                                    <div class="row main-text">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="row small-border">
                                <div class="col-sm-4 hidden-xs small-picture">
                                    <a href="/pictures">
                                        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/05/Free-Images-Fall-Desktop-Wallpapers.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-8 main-title">
                                    <h3>
                                        <a href="/pictures">
                                            Title
                                        </a>
                                    </h3>
                                    <div class="row main-text">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="row small-border">
                                <div class="col-sm-4 hidden-xs small-picture">
                                    <a href="/pictures">
                                        <img src="http://hddesktopwallpaper.org/wp-content/uploads/2016/10/desktop-wallpapers-free3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-8 main-title">
                                    <h3>
                                        <a href="/pictures">
                                            Title
                                        </a>
                                    </h3>
                                    <div class="row main-text">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
        </main>

    @endsection