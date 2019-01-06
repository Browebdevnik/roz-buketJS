window.onload = function(){
	let cart = {};
	let goods = {};

	//делаем загрузку корзины из localstorage
	function loadCartFromStorage(){
			if ( localStorage.getItem('cart') != undefined){
					cart = JSON.parse( localStorage.getItem('cart'));
			}
			console.log(cart);
	}

	loadCartFromStorage();

	// послать запрос
	let getJSON = function(url, callback){
			let xhr = new XMLHttpRequest();
			xhr.open('GET', url, true);
			xhr.responseType = 'json';
			xhr.onload = function (){
					let status = xhr.status;
					if (status === 200) {
							callback(null, xhr.response)
					}
					else {
							callback(status, xhr.response);
					}
			};
			xhr.send();
	}
	
	getJSON('https://spreadsheets.google.com/feeds/list/1f8vdaZRfQIiwsdjh9qNhgyeTgd9ccmvRJBPpMmxtd3w/od6/public/values?alt=json', function(err, data){
			console.log(data);
			if (err !== null) {
					alert ('Error: '+err);
			}
			else {
					data = data['feed']['entry'];
					console.log(data);
					goods = arrayHelper(data);
					console.log(goods);
					document.querySelector('.goods').innerHTML = showGoods (data);
					showCart();
			}
	});

	function showGoods(data){
			let out = '';
			for(var i=0; i<data.length; i++){
					if (data[i]['gsx$show']['$t']!=0){
							out += `<div class="goods__box">`;
							out += `<p>${data[i]['gsx$name']['$t']}</p>`;
							out += `<img src="${data[i]['gsx$images']['$t']}" class="goods__img">`;
							out += `<div class="goods__description">${data[i]['gsx$decsription']['$t']}</div>`;
							out += `<div class="goods__price">${data[i]['gsx$cost']['$t']} </div>`;
							out += `<button class="number-basket__basket goods__button" name="add-to-cart" data="${data[i]['gsx$id']['$t']}">Добавить в корзину</button>`;	
							out += `</div>`;
					}
			}
			return out;
	}

	document.onclick = function(e){
			if (e.target.attributes.name != undefined){
					if (e.target.attributes.name.nodeValue == 'add-to-cart'){
							addToCart(e.target.attributes.data.nodeValue);
					}
					else if (e.target.attributes.name.nodeValue == 'delete-goods'){
							delete cart[e.target.attributes.data.nodeValue];
							showCart();
							localStorage.setItem('cart', JSON.stringify(cart));
							console.log(cart);
					}
					else if (e.target.attributes.name.nodeValue == 'plus-goods'){
							cart[e.target.attributes.data.nodeValue]++;
							showCart();
							localStorage.setItem('cart', JSON.stringify(cart));
							console.log(cart);
					}
					else if (e.target.attributes.name.nodeValue == 'minus-goods'){
							if (cart[e.target.attributes.data.nodeValue] - 1 == 0 ){
									delete cart[e.target.attributes.data.nodeValue];
							}
							else {
									cart[e.target.attributes.data.nodeValue]--;
							}
							showCart();
							localStorage.setItem('cart', JSON.stringify(cart));
							console.log(cart);
					}
					else if(e.target.attributes.name.nodeValue == 'buy'){
							var data = {
									name : document.getElementById('customer-name').value,
									email : document.getElementById('customer-email').value,
									phone : document.getElementById('customer-phone').value,
									cart : emailArray(),
							};

							fetch("php_mail/mail.php",
							{
									method: "POST",
									body: JSON.stringify(data)
							})
							.then(function(res){ 
									console.log(res);
									if (res){
											alert('Ваш заказ отправлен');
									}
									else {
											alert('Ошибка заказа');
									}
							 })
							
					}
			}
			return false;
	}

	function emailArray() {
		var emailArray = {};
		for (var key in cart){
			// key - это id товара cart[key] - количество 
			var temp = {};
			temp.name = goods[key]['name'];
			temp.cost = goods[key]['cost'];
			temp.count = cart[key];
			emailArray[key] = temp;
		}
		console.log(emailArray);
		return emailArray;
	}

	function addToCart(elem){
			if (cart[elem]!==undefined){
					cart[elem]++;
			}
			else {
					cart[elem]= 1;
			}
			console.log(cart);
			showCart();
			localStorage.setItem('cart', JSON.stringify(cart));
	}

	function arrayHelper(arr){
			let out = {};
			for (let i = 0; i< arr.length; i++){
					let temp = {};
					temp['articul'] = arr[i]['gsx$articul']['$t'];
					temp['name'] = arr[i]['gsx$name']['$t'];
					temp['category'] = arr[i]['gsx$category']['$t'];
					temp['cost'] = arr[i]['gsx$cost']['$t'];
					temp['images'] = arr[i]['gsx$images']['$t'];
					out[ arr[i]['gsx$id']['$t'] ] = temp;
			}
			return out;
	}

	function showCart(){
			let ul = document.querySelector('.cart');
			ul.innerHTML = '';
			let sum = 0;
			for (let key in cart){
					let li = '<li>';
					li += goods[key]['name'] + ' ';
					li +=` <button name="minus-goods" data="${key}">-</button> `;
					li += cart[key]+'шт ';
					li +=` <button name="plus-goods" data="${key}">+</button> `;
					li += goods[key]['cost']*cart[key]+'рублей';
					li +=` <button name="delete-goods" data="${key}">x</button>`;
					li +='</li>';
					sum += goods[key]['cost']*cart[key];
					ul.innerHTML += li;
			}
			ul.innerHTML += 'Итого: '+sum+ 'рублей';

	}
}