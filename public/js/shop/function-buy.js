$(document).ready(function() {

	count_order();//запускаем функцию при загрузке страницы
	//insert_cost();

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

		if($('#'+$(this).parent().parent().parent().attr('id')).data('reg')==false){document.location.href = '../login';}
		else {

			//alert($.cookie("basket"));
			alert("Товар добавлен");
			item_id = parseInt($('#' + $(this).parent().parent().parent().attr('id')).data('id')); //получаем id товара
			price = parseInt($('#' + $(this).parent().parent().parent().attr('id')).data('price')); //получаем цену товара и преобразуем значение в число parseInt
			img = $('#' + $(this).parent().parent().parent().attr('id')).data('image'); //получаем ссылку на изображение, что бы отразить в корзине
			title = $('#' + $(this).parent().parent().parent().attr('id')).data('name'); //название товара
			//теперь нужно узнать есть ли в куках уже такой товар
			order = $.cookie('basket'); //получаем куки с именем basket
			!order ? order = [] : order = JSON.parse(order);
			if (order.length == 0) {
				order.push({'item_id': item_id, 'price': price, 'amount': 1, 'img': img, 'title': title});//добавляем объект к пустому массиву
			}
			else {
				flag = false; //флаг, который указывает, что такого товара в корзине нет
				for (var i = 0; i < order.length; i++) //перебираем массив в поисках наличия товара в корзине
				{
					if (order[i].item_id == item_id) {
						order[i].amount = order[i].amount + 1; //если товар уже в корзине, то добавляем +1 к количеству (amount)
						flag = true; //поднимаем флаг, что такой товар есть и с ним делать ничего не нужно
					}

				}

				if (!flag) //если флаг опущен, значит товара в корзине нет и его надо добавить.
				{
					order.push({'item_id': item_id, 'price': price, 'amount': 1, 'img': img, 'title': title}); //добавляем к существующему массиву новый объект
				}
			}
			$.cookie('basket', JSON.stringify(order), {expires: 7, path: '/'}); // переделываем массив с объектами в строку и сохраняем в куки
			count_order(); //запускаем функция для отображения количества заказов, текст функции напишу ниже.
		}
	});


	/* M A G A Z I K */

	$('.total').bind("change keyup", function()
	{
		value=$(this).val(); //получаем введенное значение
		if(value.match(/[^0-9]/g) || value<=0)//проверяем, что введенно число, что оно не равно нулю и не отрицательное.
		{
			$(this).val('1'); //если условие выше не вополняется то значение равно 1
		}
		price=$(this).prev().val();//получаем цену товара
		$(this).parent().next().children().next().html(value*price); //пересчитываем общую цену за товар
		item_id=$(this).prev().prev().val(); //получаем id товара
		set_amount(item_id,value); //сохраняем новое количество товара в куки
		insert_cost();
	})

	function set_amount(item_id, amount)
	{
		order=JSON.parse($.cookie('basket')); //получаем куки и переделываем в массив с объектами
		for(var i=0;i<order.length; i++) //перебераем весь массив с объектами
		{
			if(order[i].item_id==item_id) //ищем нжный id
			{
				order[i].amount=amount; // устанавливаем количество товара
			}
		}
		$.cookie('basket',JSON.stringify(order),{ expires: 7, path: '/' }); // сохраняем все в куки
		count_order(); //не забываем обновлять количество товаров в корзине
	}

	$('.content-zakazi-item-amount-plus').click(function()
	{
		current_val=$(this).parent().prev().val();//получаем текущее значение количества товара
		$(this).parent().prev().val(+current_val+1); //добавляем к текущему значению единицу
		$(this).parent().prev().change(); //сообщаем, что значение изменилось
	})

	$('.content-zakazi-item-amount-minus').click(function()
	{
		current_val=$(this).parent().next().next().next().val();
		new_val=+current_val-1;
		if(new_val<=0)
		{
			new_val=1;
		}
		$(this).parent().next().next().next().val(new_val);
		$(this).parent().next().next().next().change();
	})

	$('.del_order').click(function()
	{
		string=$(this).parent();// выбираем всю строку в таблице
		item_id=$(this).prev().prev().children().next().val();//получаем id товара
		string.remove();// удаляем строку
		order=JSON.parse($.cookie('basket'));//получаем массив с объектами из куки
		for(var i=0;i<order.length; i++)
		{
			if(order[i].item_id==item_id)
			{
				order.splice(i,1); //удаляем из массива объект
			}
		}
		$.cookie('basket',JSON.stringify(order),{ expires: 7, path: '/' });//сохраняем объект в куки
		count_order(); //обновляем корзину
		all_order=$('.content-zakazi-item-all'); //получаем все строки таблицы
		if(all_order.length<=1) {location.reload()}; //если нет ни одного заказа, то перезагружаем страницу
	})

	function total_cost()
	{
		order=JSON.parse($.cookie('basket'));
		total=0;
		for(var i=0;i<order.length; i++)
		{
			total=total+(order[i].amount*order[i].price);
		}
		return total;
	}
    //
	//function insert_cost()
	//{
	//	$('.total_cost').html(total_cost());
	//};
	/* M A G A Z I K */

});