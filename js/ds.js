window.onload = function(){
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
	
	getJSON('https://spreadsheets.google.com/feeds/list/1JbzVFMfXjLCIS7ih9sWJMXrz_HAbHNsY4d3CiBapt1Q/od6/public/values?alt=json', function(err, data){
			console.log(data);
			if (err !== null) {
					alert ('Error: '+err);
			}
			else {
					data = data['feed']['entry'];
					console.log(data);
					document.querySelector('.twogoods').innerHTML = showGoods (data);
			}
	});

	function showGoods(data){
			let out = '';
			for(var i=0; i<data.length; i++){
					if (data[i]['gsx$show']['$t']!=0){
						out += `<div class="twogoods__box">`;
						out += `<p>${data[i]['gsx$name']['$t']}</p>`;
						out += `<img src="${data[i]['gsx$images']['$t']}" class="twogoods__img">`;
						out += `<div class="twogoods__description">${data[i]['gsx$decsription']['$t']}</div>`;
						out += `<div class="twogoods__price">${data[i]['gsx$cost']['$t']} </div>`;
						out += `<button class="number-basket__basket twogoods__button" name="add-to-cart" data="${data[i]['gsx$id']['$t']}">Добавить в корзину</button>`;	
 						out += `</div>`;
					}
			}
			return out;
		}	
	}



























// $(document).ready(function(){
// 	$.getJSON
// 	("https://spreadsheets.google.com/feeds/list/1JbzVFMfXjLCIS7ih9sWJMXrz_HAbHNsY4d3CiBapt1Q/od6/public/values?alt=json", function(data){
// 		data = data['feed']['entry'];
// 		console.log(data);
// 		showGoods(data);
// 	});

// function showGoods(data){
// 		let out = '';
// 		for(var i=0; i<data.length; i++){
// 			if (data[i]['gsx$show']['$t']!=0){
// 						out += `<div class="twogoods__box">`;
// 						out += `<p>${data[i]['gsx$name']['$t']}</p>`;
// 						out += `<img src="${data[i]['gsx$images']['$t']}" class="twogoods__img">`;
// 						out += `<div class="twogoods__description">${data[i]['gsx$decsription']['$t']}</div>`;
// 						out += `<div class="twogoods__price">${data[i]['gsx$cost']['$t']} </div>`;
// 						out += `<button class="number-basket__basket twogoods__button" name="add-to-cart" data="${data[i]['gsx$id']['$t']}">Добавить в корзину</button>`;	
// 						out += `</div>`;
// 				}
// 		}		
// 				$('.twogoods').html(out);
// 		}
// })
	
	