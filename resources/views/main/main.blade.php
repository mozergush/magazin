<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SprintService - Главная</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../../public/favicon.ico" />
    <link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="libs/owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/main/main.css" />
    <link rel="stylesheet" href="css/main/media.css" />
    <link href='https://fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<script src="{!! asset('libs/jquery/jquery-1.11.1.min.js') !!}"></script>
<script src="{!! asset("js/jquery-cookie-master/src/jquery.cookie.js") !!}"></script>
<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/owlcarousel/owl.carousel.min.js"></script>
<script src="libs/countdown/jquery.plugin.js"></script>
<script src="libs/countdown/jquery.countdown.min.js"></script>
<script src="libs/countdown/jquery.countdown-ru.js"></script>
<script src="libs/landing-nav/navigation.js"></script>
<script src="js/main/common.js"></script>
<script src="{!! asset("js/main/function-buy.js") !!}"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

@include('layouts.header')

<!--C O N T E N T-->

<div class="content">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <form class="find-form border"  method="GET" action="{{ url('/search') }}" onmouseout="querySelector('img').src='{!! asset('images/icons/FindStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/FindHover.ico') !!}'">
                            <input type="text" name="searchitem" placeholder="Введите товар для поиска!">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <button type="submit">Поиск<img class= "hidden-xs" src="{!! asset('images/icons/FindStandart.ico') !!}" alt=""></button>
                        </form>
                    </div>

                    <div class="col-xs-12 content-razdelitel">
                        <hr>
                        <div class="content-razdelitel-block">Новинки в магазине</div>
                    </div>

                    <div class="content-slider-container border">
                        <div class="next_button"><img src="images/icons/SliderNext.ico" alt=""></div>
                        <div class="prev_button"><img src="images/icons/SliderPrev.ico" alt=""></i></div>
                        <div class="owl-carousel">
                            @foreach($products as $product)

                                <div class="slide-item owl-item">
                                    <div @if (Auth::guest())data-reg="false"@endif id="{{$product->id}}"  data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-image="{{$product->image}}" class="content-allitems-tovari-tovar-parent ">
                                        <div class="content-allitems-tovari-tovar border">
                                            <a href="{{ URL::action('ProductController@index', $product->id) }}"><img class="content-allitems-tovari-tovar-image" src="{!! asset('images/products/') !!}/{{$product->image}}"></a>
                                            <div class="content-allitems-tovari-tovar-side">
                                                <div class="content-allitems-tovari-tovar-opisaniye">
                                                    <a href="{{ URL::action('ProductController@index', $product->id) }}">{{$product->name}}</a>
                                                </div>
                                                <div class="content-allitems-tovari-tovar-cena">
                                                    {{$product->price}} &nbsp руб
                                                </div>
                                                <button class="tovar-buy buy-button" ><span id="{{$product->id}}">Купить</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            {{--<div class="slide-item owl-item">--}}
                            {{--<div class="content-allitems-tovari-tovar-parent ">--}}
                            {{--<div class="content-allitems-tovari-tovar border">--}}
                            {{--<img class="content-allitems-tovari-tovar-image" src="images/test.jpg">--}}
                            {{--<div class="content-allitems-tovari-tovar-side">--}}
                            {{--<div class="content-allitems-tovari-tovar-opisaniye">--}}
                            {{--Видеокарта Asus PCI-Ex GeForce GTX 950 2048MB GDDR5 (128bit)--}}
                            {{--</div>--}}
                            {{--<div class="content-allitems-tovari-tovar-cena">--}}
                            {{--451 955 руб--}}
                            {{--</div>--}}
                            {{--<button class="tovar-buy">Купить </button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                        </div>
                    </div>

                    <div class="col-xs-12 content-razdelitel">
                        <hr>
                        <div class="content-razdelitel-block">Последние новости</div>
                    </div>

                    <div class="content-news col-xs-12">

                        @foreach($posts as $post)
                            <div class="col-xs-12 content-news-item">
                                <div class="content-news-item-block">
                                    <?php $post->published_at = date('d.m.Y', strtotime($post->published_at));?>
                                    {{$post->published_at}}
                                </div>
                                <div class="content-news-item-side border col-xs-12">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 content-news-item-side-picture  ">
                                            <img src="{!! asset("images/posts/") !!}/{{$post->image}}" alt="">
                                        </div>
                                        <div class="content-news-item-side-text col-md-8 col-xs-12">
                                            <div class="content-news-item-side-text-nazv">
                                                {{$post->title}}
                                            </div>
                                            {{$post->content}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>



                <br>
            </div>
        </div>
    </div>

</div>

<!--C O N T E N T-->

@include('layouts.footer')

</body>
</html>