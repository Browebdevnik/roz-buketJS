<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
	<title>Салон стильных букетов</title>
</head>
<body class="stopblock3">

	<!-- Меню навигации -->
	<nav class="navigation">
		<div class="navigation-box width">
		<div class="logo">
			<a class="clikblock3" href="#"><div class="logo__img"></div></a>
				<div class="logo__title">
						Букеты с доставкой по <br> Красноярску
					</div>
		</div>

		<div class="transition">
			<a class="transition__link clikblock" href="#catalogue">Перейти в католог</a>
			<a class="transition__link clikblock1" href="#delivery">Подробнее о Доставке</a>
			<a class="transition__link clikblock2" href="#contactss">Наши Контакты</a>
		</div>

		<div class="number-basket">
			<div class="number-basket__number">
				+7(391)-27-22-3-99
			</div>
			<button class="number-basket__basket">
				Перейти в корзину
			</button>
		</div>
		</div>
		<div class="">
      <hr>
      <h5 class="text-center">Корзина</h5>
      <ul class="cart"></ul>
      <hr>
     </div>
		 <div class="">
       <div>Name: <input type="text" id="customer-name"></div>
       <div>Email: <input type="text" id="customer-email"></div>
       <div>Phone: <input type="text" id="customer-phone"></div>
       <button id="buy" name="buy">Купить</button>
       <hr>
      </div>
	</nav>
	<!-- Конец Меню навигации -->

	<!-- Секция с главным фоном -->
	<section class="main-bacground">
			<div class="width main-bacground__title">
					<h1>
							Доставка стильных букетов в Красноярске
					</h1>
					<span>
						Бесплатная доставка до двери при заказе от 3 000р
					</span>
			</div>
	</section>
	<!-- Конец Секции с главным фоном -->

	<div class="width selling-title">
		<span>Почему наш букет вызывает восторг</span>
	</div>

	<!-- Блок с преймуществами магазина -->

	<div class="container advantages-box">
		<div class="advantages-box__element">
			<img src="img/advantages-box/shop.png" alt="Магазин">
			<h2>Свежайшие цветы</h2>
			<div class="line"></div>
			<p>
				Мы заботимся о своих клиентах,
				поэтому заказываем небольшую
				<span>партию свежих цветов не реже
				трех раз в неделю</span>
			</p>
		</div>

		<div class="advantages-box__element">
			<img src="img/advantages-box/paint-palette.png" alt="Магазин">
			<h2>Авторский дизайн</h2>
			<div class="line"></div>
			<p>
				Вы можете быть уверены - Ваш
				букет точно впишется в любой
				праздник. <span>Мы обращаем внимание
				от цвета бумаги до оттенка цветка</span>
			</p>
		</div>

		<div class="advantages-box__element">
			<img src="img/advantages-box/contract.png" alt="Магазин">
			<h2>Нестандартные букеты</h2>
			<div class="line"></div>
			<p>
				Наш опыт позволяет делать 
				чудесную композицию <span>от 1000р.</span> В
				Вашем выборе как готовые букеты
				так и авторские корзинки
		</div>
	</div>
	<!-- Конец Блока с преймуществами магазина -->

	<section class="product stopblock" >
		<div class="box-product">
			<div class="container product__title">
				<h2>
					Так выглядит стильный букет
				</h2>
				<div class="line-title"></div>
				<p>
					Нажми на кнопку и открой нужный раздел
				</p>
			</div>
		</div>
	</section>

			<!-- Блок с товарами №1-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Букеты из роз
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Неисчерпаемая фантазия наших флористов способная сотворить <br>
						самые невероятные букеты. В этом разделе собраны букеты с <br>
						розами всех цветов и разделов.
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-1" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-1">
					<div class="goods">
					<!--Секция с одним товаром -->
						<div class="goods__box">
							<p></p>
							<img src="" class="goods__img" alt="">
							<div class="goods__description"></div>
							<div class="goods__price"> руб.</div>
							<button class="number-basket__basket goods__button">Добавить в корзину</button>
						</div>
					<!--Конец  Секции с одним товаром -->
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №1-->

		<!-- Блок с товарами №2-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img2"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Букеты гиганты
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
							Знаменитые букеты от салона цветов «Розовый букет». <br>
							Букеты гиганты - огромные стильные букеты, которые удивят любую <br>
							девушку.
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-2" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-2">
					<div class="twogoods">
							<!--Секция с одним товаром -->
								<div class="twogoods__box">
									<p></p>
									<img src="" class="twogoods__img" alt="">
									<div class="twogoods__description"></div>
									<div class="twogoods__price"> руб.</div>
									<button class="number-basket__basket twogoods__button">Добавить в корзину</button>
								</div>
							<!--Конец  Секции с одним товаром -->
						</div>	
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №2-->
	
		<!-- Блок с товарами №3-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img3"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Букеты в коробочках
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
							Настоящий тренд этого года. Букеты в коробочках сохранят свою <br>
							красоту намного дольше простых букетов и совсем не требуют <br>
							ухода
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-3" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-3">
					
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №3-->
	
	<!-- Блок с товарами №4-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img4"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Коробочки со сладостями
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Популярные цветы в коробочках и вкусные сладости. По желанию, <br>
						вы можете украсить сладостями любой букет. В этом разделе <br>
						собраны возможные примеры оформления
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-4" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-4">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №4-->

		<!-- Блок с товарами №5-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img5"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Свадебные букеты
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Этот раздел собран для самого долгожданного дня. Свадебный <br>
						букет - самый важный букет в жизни любой девушки. Мы знаем это <br>
						как никто другой и с особым трепетом выбираем каждый цветочек
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-5" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-5">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №5-->

		<!-- Блок с товарами №6-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img6"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Букеты для подруг
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						В этом разделе собраны букеты для близких нам людей: для коллег <br>
						и просто друзей. Цветы - это отличная возможность передать <br>
						уважение или благодарность близкому нам человеку
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-6" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-6">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №6-->

		<!-- Блок с товарами №7-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img7"> 
				</div>
				<div class="bouquet-text">
					<h3>
							Букеты для мам
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Мама - это самый близкий человек в жизни! В этом разделе мы <br>
						собрали букеты которые способны передать вашу любовь и <br>
						теплоту к маме.
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-7" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-7">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №7-->

		<!-- Блок с товарами №8-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img8"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Букеты на свидание
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Букеты из этого раздела призваны творить самое тайное на планете <br>
						- объединять сердца. С этим букетом вы очаруете любую девушку! <br>
						Чтобы  открыть каталог кликните на кнопку ниже!
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-8" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-8">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №8-->

		<!-- Блок с товарами №9-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img9"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Гелиевые шары
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Тематические шары, для: свадьбы, дня рождения или рождения <br>
						ребенка, юбилея, корпоратива, 8 марта, 23 февраля, дня победы,<br>
						выпускного бала. Готовые наборы - можно заказать в один клик.
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-9" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-9">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №9-->

	<div class="upertitle">
		Нет нужного букета?
	</div>

		<!--Форма обратной связи-->
	<section class="container bouquet">
		<div class="bouquet-block bouquet-form">
			<div class="bouquet-block__form-text">
				<h3>
					Оставь заявку 
				</h3>
				<div class="line"></div>
				<p>
					мы соберем букет с авторским дизайном <br>
					специально для вас
				</p>
				<div class="line"></div>
			</div>
			<div class="bouquet-block__form">
				<form action="mailer/smart.php" method="POST" class="main-form">
					<div class="popup-form-header">
						<p>Форма для заполнения</p>
						<input  type="name" class="popup-form__input name" name="user_name" placeholder="Имя"  required>
						<input  type="tel" class="popup-form__input iphone" name="user_phone" placeholder="Телефон"  required>
						<button type="submit" class="button popup-form__btn">
							Связаться
						</button>	
						<div class="popup-form__note">
							*Заявки принимаются круглосуточно
						</div>
 					</div>
				</form>
			</div>
		</div>	
	</section>	
	<!--Конец Формы обратной связи-->

	<section class="product">
		<div class="box-product">
			<div class="container product__title">
				<h2>
					Понравились наши букеты?
				</h2>
				<div class="line-title"></div>
				<p>
					Рассчитай стоимость цветочного оформления
				</p>
			</div>
		</div>
	</section>
	
		<!-- Блок с товарами №10-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img10"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Оформление свадеб
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Мы оформляем свадьбы живыми цветами более 2 лет. Сделаем <br>
						оформление от рамки для регистрации до проведение праздника <br>
						под ключ. Жмите кнопку ниже, чтобы открыть портфолио
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-10" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-10">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №10-->

		<!-- Блок с товарами №11-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img11"> 
				</div>
				<div class="bouquet-text">
					<h3>
							Оформление фотозон
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						Неисчерпаемая фантазия наших флористов сотворит настоящее <br>
						чудо для шикарных фото на праздниках и выездных фотосессий. <br>
						Жмите кнопку ниже, чтобы открыть портфолио
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-11" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-11">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №11-->


	<section class="product">
			<div class="box-product">
				<div class="container product__title">
					<h2>
						История успешных подарков
					</h2>
					<div class="line-title"></div>
				</div>
			</div>
	</section>

		<!--Слайдер-->
	<div class="sl container">
		<div class="sl_slide">
			<img src="img/slider/slide1.jpg" alt="">
		</div>
		<div class="sl_slide">
			<img src="img/slider/slide2.jpg" alt="">
		</div>
		<div class="sl_slide">
			<img src="img/slider/slide3.jpg" alt="">
		</div>
		<div class="sl_slide">
			<img src="img/slider/slide4.jpg" alt="">
		</div>
	</div>
		<!--Конец Слайдера-->			

		<section class="product stopblock1">
			<div class="box-product">
				<div class="container product__title">
					<h2>
						Узнай стоимость доставки
					</h2>
				</div>
			</div>
	</section>

		<!-- Блок с товарами №12 Доставка-->
	<section class="container bouquet">
		<div class="bouquet-block">
			<div class="bouquet-content">
				<div class="bouquet-img bouquet-img12"> 
				</div>
				<div class="bouquet-text">
					<h3>
						Доставка букетов до двери
					</h3>
					<div class="line-title line-bouquet"></div>
					<p>
						<strong>Бесплатная доставка</strong> до двери при сумме заказа от 3000р. Если <br>
						ваш заказ менее 3000р <strong>нажмите на кнопке ниже</strong> и рассчитайте <br>
						стоимость доставки
					</p>
				</div>
			</div>
			<!-- Спойлер -->
			<div class="spoiler">
				<a href="#spoiler-12" data-toggle="collapse" class="open-spoiler collapsed">
					Нажмите что бы открыть католог с букетами
				</a>
				<div class="collapse" id="spoiler-12">
					<div class="">
						<p>Параграф с текстом</p>
					</div>
				</div>
			</div>
			<!-- Конец Спойлера -->
		</div>
	</section>	
	<!--Конец Блока с товарами №12 Доставка-->

	<section class="product">
		<div class="box-product">
			<div class="container product__title">
				<h2>
					Наши контакты:
				</h2>
			</div>
		</div>
	</section>	

	<!--Секция с контактами и картой-->

	<section class="contacts container stopblock2">
		<div class="contacts__communication">
			<div class="address">
				<p class="contacts-title">Наш адрес:</p>
				<p class="contacts-text">Улица Копылова дом 70</p>
			</div>
			<div class="work-time">
				<p class="contacts-title">Время работы:</p>
				<p class="contacts-text">С 09:00 до 20:00 без выходных</p>
			</div>
			<div class="vk">
				<span class="contacts-text">Мы Вконтакте:</span>
				<a href="https://vk.com/rozi24"><img src="img/massenger/vk.png" alt=""></a>
			</div>
			<div class="insta">
				<span class="contacts-text">Мы в Instagram:</span>
				<a href="https://www.instagram.com/roz_buket/"><img src="img/massenger/instagram.png" alt=""></a>
			</div>
			<div class="telephone_number">
				<p class="contacts-title">Телефон для связи:</p>
				<p class="contacts-text">8(391)-27-22-3-99 </p>
				<p class="contacts-text">8-962-067-00-89</p>
			</div>
			<div class="whatsApp">
				<span class="contacts-text">Чат в WhatsApp:</span>
				<a href="https://api.whatsapp.com/send?phone=89620670089"><img src="img/massenger/whatsapp.png" alt=""></a>				
			</div>
			<div class="viber">
				<span class="contacts-text">Чат в Viber:</span>
				<a href="viber://add?number=79620670089"><img src="img/massenger/viber.png" alt=""></a>
			</div>
			<button class="contacts__btn">Позвоните нам</button>
		</div>
		<div class="contacts__map">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9e4d58c7d21e22e540eacd6703283401d39482efd59785e563e14282b49e13b5&amp;width=744&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
		</div>
	</section>

	

	
	<footer>
		<div class="container">
				<p>Салон стильных цветов «Розовый букет»</p>
		</div>
		
	</footer>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/shop.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="slick/slick.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/scroll.js"></script>
	
</body>
</html>
