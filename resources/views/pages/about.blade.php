@extends('layout')

@section('content')

        <main>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row location">
                                <a href="index.html">Main</a>
                                <span class="seperator">- -</span>
                                <span class="current-page">About Us</span>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-12 col-xs-12">
                            <ul class="tabst">
                                <li><a data-toggle="tab" href="#home">Unknown</a></li>
                                <li><a data-toggle="tab" href="#menu1">Unknown 1</a></li>
                                <li><a data-toggle="tab" href="#menu2">Unknown 2</a></li>
                            </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="col-sm-4 hidden-xs tabpictu">
                                            <img src="https://yt3.ggpht.com/-uGYJvczbuow/AAAAAAAAAAI/AAAAAAAAAAA/VQbgt1FitYs/s900-c-k-no-mo-rj-c0xffffff/photo.jpg">
                                            </a>
                                        </div>
                                        <div class="col-xs-12 col-sm-7 main-title">
                                            <h3>
                                                <a href="pictures.html">
                                                    Title
                                                </a>
                                            </h3>
                                        <div class="row main-text">
                                            <p>
                                            Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    <div id="menu1" class="tab-pane fade">
                                            <div class="col-sm-4 hidden-xs tabpictu">
                                                    <img src="https://yt3.ggpht.com/-uGYJvczbuow/AAAAAAAAAAI/AAAAAAAAAAA/VQbgt1FitYs/s900-c-k-no-mo-rj-c0xffffff/photo.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-7 main-title">
                                                    <h3>
                                                        <a href="pictures.html">
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
                                    <div id="menu2" class="tab-pane fade">
                                            <div class="col-sm-4 hidden-xs tabpictu">
                                                    <img src="https://yt3.ggpht.com/-uGYJvczbuow/AAAAAAAAAAI/AAAAAAAAAAA/VQbgt1FitYs/s900-c-k-no-mo-rj-c0xffffff/photo.jpg">
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-7 main-title">
                                                    <h3>
                                                        <a href="pictures.html">
                                                            Title
                                                        </a>
                                                    </h3>
                                                <div class="row main-text">
                                                    <p>
                                                    Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum cum officia, ut quod veniam tempore? Nesciunt optio ducimus nemo perspiciatis, aspernatur maxime, laudantium quo atque non, saepe illo ratione?
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            <br>
                    </div>
                    <br>
                    <div class="row contrr">
                        <div class="col-md-1 xs-hidden"></div>
                        <div class="col-md-6 col-xs-12 mapss">
                                Location in map:
                                <div id="map" class="col-xs-12">
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="col-md-1 xs-hidden"></div>
                        <br>
                        <div class="col-md-3 col-ms-6 col-xs-12 cont">
                            Address:   
                            <div class="cont1">
                                <p>Country:</p>
                                <p>City:</p>
                                <p>Street:</p>
                                <p>Phone:</p>
                                <p>E-mail:</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
            </div> <!-- Container -->
            <br>
        </main>

 @endsection