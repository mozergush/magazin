<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SprintService - Вход</title>
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
    <link rel="stylesheet" href="css/auth/main.css" />
    <link rel="stylesheet" href="css/auth/media.css" />
    <link href='https://fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
</head>
<body>
    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->
    <script src="libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="libs/fancybox/jquery.fancybox.pack.js"></script>
    <script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
    <script src="libs/scrollto/jquery.scrollTo.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script src="libs/countdown/jquery.plugin.js"></script>
    <script src="libs/countdown/jquery.countdown.min.js"></script>
    <script src="libs/countdown/jquery.countdown-ru.js"></script>
    <script src="libs/landing-nav/navigation.js"></script>
    <script src="js/auth/common.js"></script>
    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->
    <?php $activemenu ='login'; ?>
    @include('layouts.header')

    <!--C O N T E N T-->

    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="row">

                        <div class="col-xs-12 content-razdelitel">
                            <hr>
                            <div class="content-razdelitel-block">Выполните вход</div>
                        </div>

                        <div class="col-xs-12">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}

                                <div class="row">
                                    <div class="content-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="col-sm-6 col-xs-12 content-label">Введите ваш E-mail<span class="hidden-xs">&nbsp:</span></label>
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

                                <div class="row">
                                    <div class="content-input content form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="col-xs-12 col-sm-6 content-label">Введите ваш пароль<span class="hidden-xs">&nbsp:</span></label>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="password" class="border" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="content-checkbox col-sm-6 col-sm-offset-6">
                                            <div class="checkbox-fix">
                                                <input class="checkbox" id="checkbox" type="checkbox" name="remember"> <label class="content-checkbox-label" for="checkbox">Запомнить меня</label>
                                            </div>
                                    </div>
                                </div>

                                <div class="rov content-button-all-anal">
                                    <div class="content-button-left col-sm-6">
                                        <button class="buttons content-button " type="submit" class="btn btn-primary">
                                            Вход
                                        </button>
                                    </div>

                                    <div class="content-button-right col-sm-6 content-button-xs-fix">
                                        <a class="content-button  content-button-a btn btn-link col-xs-12" href="{{ url('/password/reset') }}">Забыли пароль?</a>
                                    </div>

                                </div>

                                <div class="row content-button-all content-button-all-fix content-button-center">
                                    <div class="content-button-center col-xs-12 col-sm-6 col-sm-offset-3 content-button-xs-fix content-button-a-fix content-button-hover">
                                        <a class="content-button-a content-button-center  btn btn-link col-xs-12" href="{{ url('/register') }}">Регистрация</a>
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
                        <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='images/social/TwitterStandart.png'" onmouseover="querySelector('img').src='images/social/TwitterHover.png'"><img src="images/social/TwitterStandart.png"></div></a>
                        <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='images/social/FacebookStandart.png'" onmouseover="querySelector('img').src='images/social/FacebookHover.png'"><img src="images/social/FacebookStandart.png"></div></a>
                        <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='images/social/VkontakteStandart.png'" onmouseover="querySelector('img').src='images/social/VkontakteHover.png'"><img src="images/social/VkontakteStandart.png"></div></a>
                        <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='images/social/InstagramStandart.png'" onmouseover="querySelector('img').src='images/social/InstagramHover.png'"><img src="images/social/InstagramStandart.png"></div></a>
                        <a href="#"><div class="soc-button" onmouseout="querySelector('img').src='images/social/GoogleStandart.png'" onmouseover="querySelector('img').src='images/social/GoogleHover.png'"><img src="images/social/GoogleStandart.png"></div></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</body>
</html>




