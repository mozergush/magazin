<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>SprintService - Заказ</title>
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
	<link rel="stylesheet" href="css/finish/main.css" />
	<link rel="stylesheet" href="css/finish/media.css" />
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
	<script src="{!! asset('js/cabinet/common.js') !!}"></script>
	<script src="{!! asset("js/cabinet/function-buy.js") !!}"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->

	@include('layouts.header')

	<!--C O N T E N T-->

	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">

						<div class="col-xs-12 content-razdelitel">
							<hr>
							<div class="content-razdelitel-block">Заказ оформлен</div>
						</div>
						@foreach($orders as $order)
							<div class="col-xs-12">

								<div class="row">
									<div class="content-input">
										<label class="col-sm-6 col-xs-12 content-label">Номер заказа<span class="hidden-xs">&nbsp:</span></label>
										<label class="col-sm-6 col-xs-12 content-label-left">{{$order->id}}</label>
									</div>
								</div>

								<div class="row">
									<div class="content-input">
										<label class="col-sm-6 col-xs-12 content-label">Дата заказа<span class="hidden-xs">&nbsp:</span></label>
										<label class="col-sm-6 col-xs-12 content-label-left">{{$order->date}}</label>
									</div>
								</div>

								<div class="row">
									<div class="content-input">
										<label class="col-sm-6 col-xs-12 content-label">Общая стоимость заказа<span class="hidden-xs">&nbsp:</span></label>
										<label class="col-sm-6 col-xs-12 content-label-left">{{$order->total_price}}</label>
									</div>
								</div>

								<div class="row">
									<div class="content-input">
										<label class="col-sm-6 col-xs-12 content-label">Адрес доставки<span class="hidden-xs">&nbsp:</span></label>
										<label class="col-sm-6 col-xs-12 content-label-left">{{$order->address}}</label>
									</div>
								</div>

								<div class="row">
									<div class="content-input">
										<label class="col-sm-6 col-xs-12 content-label">Ваш телефон<span class="hidden-xs">&nbsp:</span></label>
										<label class="col-sm-6 col-xs-12 content-label-left">{{$order->phone}}</label>
									</div>
								</div>

								<div class="row">
									<div class="finish-zakaz-na-rassmotrenii">
										Ваш заказ помещен на рассмотрение, в ближайшее время с вами свяжется наш сотрудник.
									</div>
								</div>

								<div class="row content-button-gotoshop content-button-center">
									<div class="content-button-center col-xs-12 col-sm-6 col-sm-offset-3 content-button-xs-fix content-button-a-fix content-button-hover">
										<a class="content-button-a content-button-center  btn btn-link col-xs-12" href="{{ url('/') }}">Вернуться на главную</a>
									</div>
								</div>
							</div>

						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>

	<!--C O N T E N T-->

	@include('layouts.footer')

</body>
</html>