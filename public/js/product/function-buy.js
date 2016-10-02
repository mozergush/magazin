$(document).ready(function() {

	count_order();//запускаем функцию при загрузке страницы

	//отображение количества заказов
	function count_order()
	{
		order=$.cookie('basket'); //получаем куки
		order ? order=JSON.parse(order): order=[]; //если заказ есть, то куки переделываем в массив с объектами
		count=0; // количество товаров
		if(order.length>0)
		{
			for(var i=0; i<order.length; i++)
			{
				count=count+parseInt(order[i].amount);
			}
		}
		$('.count_order').html(count);// отображаем количество товаров корзине.
	}


	$(".buy-button").click(function()
	{

		if($("#productid").data('reg')==false){document.location.href = '../login';}
		else {

			//alert($.cookie("basket"));
			alert("Товар добавлен");
			item_id = parseInt($('#productid').data('id')); //получаем id товара
			price = parseInt($('#productid').data('price')); //получаем цену товара и преобразуем значение в число parseInt
			img = $("#productid").data('image'); //получаем ссылку на изображение, что бы отразить в корзине
			title = $('#productid').data('name'); //название товара
			amountnow = parseInt($('#amountnow').val());
			//теперь нужно узнать есть ли в куках уже такой товар
			order = $.cookie('basket'); //получаем куки с именем basket
			!order ? order = [] : order = JSON.parse(order);
			if (order.length == 0) {
				order.push({'item_id': item_id, 'price': price, 'amount': amountnow, 'img': img, 'title': title});//добавляем объект к пустому массиву
			}
			else {
				flag = false; //флаг, который указывает, что такого товара в корзине нет
				for (var i = 0; i < order.length; i++) //перебираем массив в поисках наличия товара в корзине
				{
					if (order[i].item_id == item_id) {
						order[i].amount = order[i].amount + amountnow; //если товар уже в корзине, то добавляем +1 к количеству (amount)
						flag = true; //поднимаем флаг, что такой товар есть и с ним делать ничего не нужно
					}

				}

				if (!flag) //если флаг опущен, значит товара в корзине нет и его надо добавить.
				{
					order.push({'item_id': item_id, 'price': price, 'amount': amountnow, 'img': img, 'title': title}); //добавляем к существующему массиву новый объект
				}
			}
			$.cookie('basket', JSON.stringify(order), {expires: 7, path: '/'}); // переделываем массив с объектами в строку и сохраняем в куки
			count_order(); //запускаем функция для отображения количества заказов, текст функции напишу ниже.
		}
	});


	/* M A G A Z I K */

	$('.plus').click(function()
	{
		current_val=$('#amountnow').val();//получаем текущее значение количества товара
		$('#amountnow').val(+current_val+1); //добавляем к текущему значению единицу
		$('#amountnow').change(); //сообщаем, что значение изменилось
	})

	$('.minus').click(function()
	{
		current_val=$('#amountnow').val();
		new_val=+current_val-1;
		if(new_val<=0)
		{
			new_val=1;
		}
		$('#amountnow').val(new_val);
		$('#amountnow').change();
	})


	$('#amountnow').bind("change keyup", function()
	{
		value=parseInt($('#productid').data('price')); //получаем введенное значение

		amount=$('#amountnow').val();
		$('#totalprice').html(value*amount); //пересчитываем общую цену за товар
	})


	/* M A G A Z I K */

});