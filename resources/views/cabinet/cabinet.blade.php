<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>SprintService - Мой заказ</title>
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
	<link rel="stylesheet" href="css/cabinet/main.css" />
	<link rel="stylesheet" href="css/cabinet/media.css" />
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
						@if(count($orders)!=null)
							<div class="col-xs-12 content-razdelitel">
								<hr>
								<div class="content-razdelitel-block">Ваш заказ</div>
							</div>


							<div class="content-zakazi col-xs-12">
								<div class="row content-zakazi-all border hidden-sm hidden-xs">
									<div class="col-md-2 content-zakazi-nazvanie ">Изображение</div>
									<div class="col-md-4 content-zakazi-nazvanie border-left">Название товара</div>
									<div class="col-md-3 content-zakazi-nazvanie border-left">Количество</div>
									<div class="col-md-2 content-zakazi-nazvanie border-left">Цена</div>
									<div class="col-md-1 content-zakazi-nazvanie border-left">Отмена</div>
								</div>

								@foreach($orders as $order)

								<div class="row content-zakazi-item-all border">
									<div class="col-xs-12 col-md-2 content-zakazi-item-image">
										<img src="{!! asset('images/products/') !!}/{{$order->img}}" alt="">
									</div>
									<div class="col-xs-12  col-md-4 content-zakazi-item-title border-left">
											{{$order->title}}
									</div>
									<div class="col-xs-12  col-md-3 content-zakazi-item-amount border-left">
										<a href="">
											<div class="content-zakazi-item-amount-minus" onmouseout="querySelector('img').src='{!! asset('images/icons/LeftStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/SliderPrev.ico') !!}'">
												<img src="{!! asset("images/icons/LeftStandart.ico") !!}" alt="">
											</div>
										</a>
										<input class="item-id" type="hidden" value="{{$order->item_id}}"/>
										<input type="hidden" value="{{$order->price}}"/>
										<input class="total" type="text" value="{{$order->amount}}"/>

										<a href="">
											<div class="content-zakazi-item-amount-plus" onmouseout="querySelector('img').src='{!! asset('images/icons/RightStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/SliderNext.ico') !!}'">
												<img src="{!! asset("images/icons/RightStandart.ico") !!}" alt="">
											</div>
										</a>
									</div>
									<div class=" col-xs-12 col-md-2 content-zakazi-item-price border-left">
										<span class="hidden-md hidden-lg">Цена: &nbsp</span><span class="price_order">{{$order->price*$order->amount}}</span> &nbsp руб
									</div>
									<a class="del_order" href="">
										<div class=" col-xs-12 col-md-1 content-zakazi-item-cancel border-left" onmouseout="querySelector('img').src='{!! asset('images/icons/CancelStandart.ico') !!}'" onmouseover="querySelector('img').src='{!! asset('images/icons/CancelHover.ico') !!}'">
											<img src="{!! asset("images/icons/CancelStandart.ico") !!}" alt="">
										</div>
									</a>
								</div>
										{{--<div class="col-xs-12 content-zakazi-item">--}}

											{{--<div class="content-zakazi-item-side border col-xs-12">--}}
												{{--<div class="row">--}}

													{{--<div class="content-zakazi-item-side-text col-md-8 col-xs-12">--}}
														{{--<div class="content-zakazi-item-side-text-nazv">--}}
															{{--{{$order->title}}--}}
														{{--</div>--}}
															{{--{{$order->price}}--}}
														{{--{{$order->amount}}--}}
													{{--</div>--}}
												{{--</div>--}}
											{{--</div>--}}
										{{--</div>--}}
								@endforeach

								<div class="all-cost">
									Итого к оплате: &nbsp<span class="total_cost">0</span> &nbsp руб.
								</div>
							</div>

							<div class="col-xs-12 content-razdelitel content-razdelitel-fix">
								<hr>
								<div class="content-razdelitel-block">Ваши данные</div>
							</div>

							<div class="dannie col-xs-12">
								<form method="POST" action="{{ url('/checkout') }}">

									<div class="row">
										<div class="content-input">
											<label class="col-sm-6 col-xs-12 content-label">Ваше имя<span class="hidden-xs">&nbsp:</span></label>
											<div class="col-xs-12 col-sm-6 ">

												<input type="text" class="border" name="name">

											</div>
										</div>
									</div>

									<div class="row">
										<div class="content-input">
											<label class="col-sm-6 col-xs-12 content-label">Адрес доставки<span class="hidden-xs">&nbsp:</span></label>
											<div class="col-xs-12 col-sm-6 ">

												<input type="text" class="border" name="address">

											</div>
										</div>
									</div>

									<div class="row">
										<div class="content-input">
											<label class="col-sm-6 col-xs-12 content-label">Ваш номер телефона<span class="hidden-xs">&nbsp:</span></label>
											<div class="col-xs-12 col-sm-6 ">

												<input type="text" class="border" name="phone">

											</div>
										</div>
									</div>

									<div class="row content-button-all content-button-all-fix">
										<div class=" content-button-center col-sm-12">
											<input type="hidden" name="_token" value="{{csrf_token()}}"/>
											<button  type="submit" class="buttons content-button content-button-solo btn btn-primary">
												Заказать
											</button>
										</div>
									</div>
								</form>
							</div>

						@else
							<div class="content-tovarov-net">
								<div class="content-tovarov-net-img">
									<img src="{!! asset('images/cart.png') !!}" alt="">
								</div>
								<div class="col-xs-12">
									Ваша корзина пуста, но это никогда не поздно исправить!
								</div>

								<br>

								<div class="row content-button-gotoshop content-button-center">
									<div class="content-button-center col-xs-12 col-sm-6 col-sm-offset-3 content-button-xs-fix content-button-a-fix content-button-hover">
										<a class="content-button-a content-button-center  btn btn-link col-xs-12" href="{{ url('/shop') }}">Перейти в магазин</a>
									</div>
								</div>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--C O N T E N T-->

	@include('layouts.footer')

</body>
</html>