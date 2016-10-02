<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SprintService - Восстановление пароля</title>
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
    <link rel="stylesheet" href="{!! asset('css/auth/main.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/auth/media.css') !!}" />
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
<script src="{!! asset('libs/jquery-mousewheel/jquery.mousewheel.min.js') !!}"></script>
<script src="{!! asset('libs/fancybox/jquery.fancybox.pack.js') !!}"></script>
<script src="{!! asset('libs/waypoints/waypoints-1.6.2.min.js') !!}"></script>
<script src="{!! asset('libs/scrollto/jquery.scrollTo.min.js') !!}"></script>
<script src="{!! asset('libs/owlcarousel/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('libs/countdown/jquery.plugin.js') !!}"></script>
<script src="{!! asset('libs/countdown/jquery.countdown.min.js') !!}"></script>
<script src="{!! asset('libs/countdown/jquery.countdown-ru.js') !!}"></script>
<script src="{!! asset('libs/landing-nav/navigation.js') !!}"></script>
<script src="{!! asset('js/auth/common.js ') !!}"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
<?php $activemenu='login'; ?>
@include('layouts.header')

<!--C O N T E N T-->

<div class="content">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="row">

                    <div class="col-xs-12 content-razdelitel">
                        <hr>
                        <div class="content-razdelitel-block">Восстановление пароля</div>
                    </div>

                    <div class="col-xs-12">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {!! csrf_field() !!}

                            <div class="row">
                                <div class="content-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-sm-6 col-xs-12 content-label">Ваш E-mail<span class="hidden-xs">&nbsp:</span></label>
                                    <div class="col-xs-12 col-sm-6 ">

                                        <input type="email" class="border" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row content-button-all content-button-all-fix">
                                <div class="content-button-center col-sm-12">
                                    <button class="buttons content-button content-button-solo" type="submit" class="btn btn-primary">
                                        Отправить ссылку для восстановления
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

<!--C O N T E N T-->

<footer class="footer">
    <div class="footer-line"></div>

    <div class="footer-content">
        ФЛП Сидоренко Игорь<br>Магазин «Спринт Сервис»<br>Адрес: г.Донецк, ул.Петровского, 101а<br>Телефон: 8-050-02-04-794
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="footer-social">
                    <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='{!! asset('images/social/TwitterStandart.png') !!}'" onmouseover="querySelector('img').src='{!! asset('images/social/TwitterHover.png') !!}'"><img src="{!! asset('images/social/TwitterStandart.png') !!}"></div></a>
                    <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='{!! asset('images/social/FacebookStandart.png') !!}'" onmouseover="querySelector('img').src='{!! asset('images/social/FacebookHover.png') !!}'"><img src="{!! asset('images/social/FacebookStandart.png') !!}"></div></a>
                    <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='{!! asset('images/social/VkontakteStandart.png') !!}'" onmouseover="querySelector('img').src='{!! asset('images/social/VkontakteHover.png') !!}'"><img src="{!! asset('images/social/VkontakteStandart.png') !!}"></div></a>
                    <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='{!! asset('images/social/InstagramStandart.png') !!}'" onmouseover="querySelector('img').src='{!! asset('images/social/InstagramHover.png') !!}'"><img src="{!! asset('images/social/InstagramStandart.png') !!}"></div></a>
                    <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='{!! asset('images/social/GoogleStandart.png') !!}'" onmouseover="querySelector('img').src='{!! asset('images/social/GoogleHover.png') !!}'"><img src="{!! asset('images/social/GoogleStandart.png') !!}"></div></a>
                </div>
            </div>
        </div>
    </div>

</footer>

</body>
</html>




<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Восстановление пароля</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
