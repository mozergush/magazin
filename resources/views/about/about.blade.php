<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>SprintService - О нас</title>
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
	<link rel="stylesheet" href="{!! asset('css/about/main.css') !!}" />
	<link rel="stylesheet" href="{!! asset('css/about/media.css') !!}" />
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
<script src="{!! asset('js/about/common.js') !!}"></script>
<script src="{!! asset("js/shop/function-buy.js") !!}"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

@include ('layouts.header')

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
						<div class="content-razdelitel-block">Кто мы?</div>
					</div>

					<div class="col-xs-12 content-onas">
						Компания «Спринт Сервис» работает с 2005 года. Мы занимаемся оптовой и розничной продажей расходных материалов к печатающим устройствам, комплектующих для оргтехники, компьютеров, принтеров. Осуществляем сервисное обслуживание и ремонт компьютеров, принтеров, печатающих устройств, ноутбуков, мониторов, фотоаппаратов, сканеров и электроники любой сложности. Филиал - Компания "FLEX", работает с 2005 г.
					</div>

					<div class="col-xs-12 content-razdelitel">
						<hr>
						<div class="content-razdelitel-block">Наши услуги</div>
					</div>

					<div class="content-news col-xs-12">
						@foreach($services as $service)
							<div class="col-xs-12 content-news-item">
								<div class="content-news-item-block">
									{{$service->price}}
								</div>
								<div class="content-news-item-side border col-xs-12">
									<div class="row">
										<div class="content-news-item-side-picture col-md-4 col-xs-12">
											<img src="{{asset('images/services/')}}/{{$service->image}}" alt="">
										</div>
										<div class="content-news-item-side-text col-md-8 col-xs-12">
											<div class="content-news-item-side-text-nazv">
												{{$service->title}}
											</div>
											{{$service->content}}
										</div>
									</div>
								</div>
							</div>
						@endforeach

					</div>

					<div class="col-xs-12 content-razdelitel-fix content-razdelitel">
						<hr>
						<div class="content-razdelitel-block">Как с нами связаться?</div>
					</div>

					<div class="col-xs-12 content-obratnaya">
						Наш адрес:			<span class="content-onas-right">Украина, Донецкая область, Донецк, ул. Петровского, 101а, филиал "FLEX" пл. Победы - 20</span>
						<br>Наши телефоны:	<span class="content-onas-right">8-050-02-04-794 (МТС), 8-050-02-04-794 (МТС), 8-050-02-04-794 (МТС).</span>
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