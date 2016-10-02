<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SprintService - Поиск</title>
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
    <link rel="stylesheet" href="{!! asset('css/shop/search/main.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/shop/search/media.css') !!}" />
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
<script src="{!! asset('js/shop/common.js') !!}"></script>
<script src="{!! asset("js/shop/function-buy.js") !!}"></script>
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

                    {{--<div class="content-slider-container border">--}}
                        {{--<div class="next_button"><img src="{!! asset('images/icons/SliderNext.ico') !!}" alt=""></div>--}}
                        {{--<div class="prev_button"><img src="{!! asset('images/icons/SliderPrev.ico') !!}" alt=""></i></div>--}}
                        {{--<div class="owl-carousel">--}}
                            {{--<div class="slide-item owl-item"><img src="{!! asset('images/slider.jpg') !!}" alt=""></div>--}}
                            {{--<div class="slide-item owl-item"><img src="{!! asset('images/slider.jpg') !!}" alt=""></div>--}}
                            {{--<div class="slide-item owl-item"><img src="{!! asset('images/slider.jpg') !!}" alt=""></div>--}}
                            {{--<div class="slide-item owl-item"><img src="{!! asset('images/slider.jpg') !!}" alt=""></div>--}}
                            {{--<div class="slide-item owl-item"><img src="{!! asset('images/slider.jpg') !!}" alt=""></div>--}}
                            {{--<div class="slide-item owl-item"><img src="{!! asset('images/slider.jpg') !!}" alt=""></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div class="col-xs-12 content-razdelitel">
                        <hr>
                        <div class="content-razdelitel-block">Найденные товары</div>
                    </div>


                    <div class="content-allitems col-md-12">
                        <div class="row">

                            <div class="content-allitems-tovari col-md-12">

                                <?php $kol=0 ?>

                                <div class="row">
                                    <div class="tovar-firstitem-fix col-md-12">

                                        @foreach($products as $product)

                                            @if(($kol==3) or ($kol ==6))
                                                <div class="row">
                                                    <div class="tovar-firstitem-fix col-md-12">
                                                        @endif

                                                        <div @if (Auth::guest())data-reg="false"@endif id="{{$product->id}}"  data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-image="{{$product->image}}" class="content-allitems-tovari-tovar-parent col-md-4">
                                                            <div class="content-allitems-tovari-tovar border">
                                                                <a href="{{ URL::action('ProductController@index', $product->id) }}"><img class="content-allitems-tovari-tovar-image" src="{!! asset('images/products/') !!}/{{$product->image}}"></a>
                                                                <div class="content-allitems-tovari-tovar-side">
                                                                    <div class="content-allitems-tovari-tovar-opisaniye">
                                                                        <a href="{{ URL::action('ProductController@index', $product->id) }}">{{ str_limit($product->name, 50) }}</a>
                                                                    </div>
                                                                    <div class="content-allitems-tovari-tovar-cena">
                                                                        {{$product->price}} &nbsp руб
                                                                    </div>
                                                                    <button class="tovar-buy buy-button" ><span id="{{$product->id}}">Купить</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if(($kol==2)or ($kol==5))
                                                    </div>
                                                </div>
                                            @endif

                                            <?php $kol++ ?>

                                        @endforeach
                                        @if(($kol!=3) and ($kol!=6))
                                    </div>
                                </div>
                                @endif
                                @if(count($products)==null)
                                    <div class="tovarov-ne-naideno">
                                        Товаров не найдено
                                    </div>
                                @endif
                            </div>
                            {{--@if(count($products))--}}
                            {{--<div class="content-allitems-pagination col-md-12">--}}

                                {{--<div class="content-pagination">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="pagination-fix">--}}
                                            {{--<div class="pagination-buttons   col-sm-6 ">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="border pagination-fix2 col-xs-12">--}}
                                                        {{--<a class="col-xs-4 pagination-buttons-elem" href="{{$products->previousPageUrl()}}" onmouseout="querySelector('img').src='{!! asset('images/icons/pgLeftStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/pgLeftHover.ico') !!}'"><img src="{!! asset('images/icons/pgLeftStandart.ico') !!}" alt=""></a>--}}
                                                        {{--<div class="col-xs-4 pagination-buttons-elem-fix">{{$products->currentPage()}}</div>--}}
                                                        {{--<a class="col-xs-4 pagination-buttons-elem" href="{{$products->nextPageUrl()}}" onmouseout="querySelector('img').src='{!! asset('images/icons/pgRightStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/pgRightHover.ico') !!}'"><img src="{!! asset('images/icons/pgRightStandart.ico') !!}" alt=""></a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="pagination-allform col-sm-6">--}}
                                            {{--<form class="pagination-form border" onmouseout="querySelector('img').src='{!! asset('images/icons/ActionStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/ActionHover.ico') !!}'">--}}
                                                {{--<input type="text" name="page" placeholder="Перейти на страницу" />--}}
                                                {{--<button type="submit"><img src="{!! asset('images/icons/ActionStandart.ico') !!}" alt=""></button>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--@endif--}}
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>

<!--C O N T E N T-->

@include('layouts.footer')

</body>
</html>