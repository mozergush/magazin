<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SprintService - @foreach($products as $product){{$product->name}}@endforeach </title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../../public/favicon.ico" />
    <link rel="stylesheet" href="{!! asset('libs/bootstrap/bootstrap-grid-3.3.1.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('libs/font-awesome-4.2.0/css/font-awesome.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('libs/fancybox/jquery.fancybox.css') !!}" />
    <link rel="stylesheet" href="{!! asset('libs/owlcarousel/assets/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/countdown/jquery.countdown.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/fonts.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/product/main.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/product/media.css') !!}" />
    <link href='https://fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--[if lt IE 9]>
<script src="{!! asset('libs/html5shiv/es5-shim.min.js') !!}"></script>
<script src="{!! asset('libs/html5shiv/html5shiv.min.js') !!}"></script>
<script src="{!! asset('libs/html5shiv/html5shiv-printshiv.min.js') !!}"></script>
<script src="{!! asset('libs/respond/respond.min.js') !!}"></script>
<![endif]-->
<script src="{!! asset('libs/jquery/jquery-1.11.1.min.js') !!}"></script>
<script src="{!! asset("js/jquery-cookie-master/src/jquery.cookie.js") !!}"></script>
<script src="{!! asset('libs/jquery-mousewheel/jquery.mousewheel.min.js') !!}"></script>
<script src="{!! asset('libs/fancybox/jquery.fancybox.pack.js') !!}"></script>
<script src="{!! asset('libs/waypoints/waypoints-1.6.2.min.js') !!}"></script>
<script src="{!! asset('libs/scrollto/jquery.scrollTo.min.js') !!}"></script>
<script src="{!! asset('libs/owlcarousel/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('libs/countdown/jquery.plugin.js') !!}"></script>
<script src="{!! asset('libs/countdown/jquery.countdown.min.js') !!}"></script>
<script src="{!! asset('libs/countdown/jquery.countdown-ru.js') !!}"></script>
<script src="{!! asset('libs/landing-nav/navigation.js') !!}"></script>
<script src="{!! asset('js/product/common.js') !!}"></script>
<script src="{!! asset("js/product/function-buy.js") !!}"></script>
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

                    @foreach($products as $product)
                        <div class="col-sm-12 content-sliderandparams">
                            <div class=" col-sm-5 content-slider-container border">
                                <div class="owl-carousel">
                                    <div class="slide-item owl-item"><img src="{!! asset('images/products/') !!}/{{$product->image}}" alt=""></div>
                                    <div class="slide-item owl-item"><img src="{!! asset('images/products/') !!}/{{$product->image2}}" alt=""></div>
                                </div>
                            </div>

                            <div class="content-params col-sm-7">
                                <div class="content-params-name">
                                    {{$product->name}}
                                </div>

                                <div class="content-params-fix">
                                    <div class="content-params-kol col-sm-6">
                                        <button class="minus buttons" onmouseout="querySelector('img').src='{!! asset('images/icons/LeftStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/SliderPrev.ico') !!}'"><img src="{!! asset('images/icons/LeftStandart.ico') !!}"></button>
                                        <input id="amountnow" type="text" value="1" size="5"/>
                                        <button class="plus buttons" onmouseout="querySelector('img').src='{!! asset('images/icons/RightStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/SliderNext.ico') !!}'"><img src="{!! asset('images/icons/RightStandart.ico') !!}"></button>
                                    </div>
                                    <div class="content-params-cena col-sm-6">
                                        <output id="totalprice" name="cena">{{$product->price}}</output> руб
                                    </div>
                                </div>
                                <div class="content-params-submit" @if (Auth::guest())data-reg="false"@endif id="productid" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-image="{{$product->image}}">
                                    <button class="buttons buy-button">Добавить в корзину</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 content-razdelitel">
                            <hr>
                            <div class="content-razdelitel-block">Описание</div>
                        </div>

                        <div class="col-xs-12 content-description">
                            {{$product->description}}
                        </div>

                        <div class="col-xs-12 content-razdelitel">
                            <hr>
                            <div class="content-razdelitel-block">Характеристики</div>
                        </div>

                        <div class="content-characteristic col-xs-12">
                            {!! $product->characteristic !!}
                        </div>
                    </div>
                @endforeach

                @if(count($products)==null)
                    <div class="tovar-ne-naiden">
                        Товар не найден
                    </div>
                @endif

            </div>
        </div>
    </div>

</div>

<!--C O N T E N T-->


@include('layouts.footer')

</body>
</html>