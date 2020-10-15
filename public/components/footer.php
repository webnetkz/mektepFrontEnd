<style>
	footer {
		background: url('public/img/footer-bg.png');
		height: 45vh;
		position: absolute;
		border-top: 2px solid rgb(242, 242, 242);
        width: 100%;
        top: 500vh;
        left: 0;
        padding: 30px 10%;
		z-index: 3;
		transition-duration: 500ms;
	}
	footer > div > div {
		margin-right: 50px;
		color: rgb(66, 191, 207);
		font-size: 0.8rem;
		max-width: 200px;
	}
	footer > div > div > a {
		margin-bottom: 1rem;
	}
	footer > div > div > h2 {
		margin-bottom: 1.5rem;
		font-weight: 100;
		color: white;
		font-size: 1rem;
	}
	.copy {
		width: 100%;
		padding-top: 20px;
		border-top: 2px solid rgba(66, 191, 207, 0.1);
		position: absolute;
		bottom: 1rem;
		left: 4rem;
		color: white;
	}
</style>
<footer class="flex col">
	<div class="flex row">
		<img src="public/img/logoW.png" alt="mektep" style="height: 250px; margin-right: 100px;">
		<div class="flex col">
			<h2>Авторам</h2>
					  <a href="#">Издание учебников и учебных пособий</a>
					  <a href="#">Издание монографий</a>
					  <a href="#">Публикация статей</a>
					  <a href="#">Заказные издания</a>
			<a href="#">Наукометрия</a>
					  <a href="#">Научный поиск mektep.kz</a>
			<a href="#">Заказные издания</a>
					  <a href="#">Показать еще</a>
		</div>
		<div class="flex col">
			<h2>Образовательным организациям</h2>
			<a href="#">Комплектование печатными изданиями</a>
					  <a href="#">Наукометрия</a>
			<a href="#">Подписка на opiq.kz</a>
					  <a href="#">Совместные серии</a>
			<a href="#">Книги, включенные в Примерные основные образовательные программы (ПООП)</a>
		</div>
				<div class="flex col">
					<h2>Издателям</h2>
			<a href="#">Размещение контента в opiq.kz</a>
					  <a href="#">Научный поиск mektep.kz</a>
			<a href="#">Совместные серии</a>
					  
		</div>
	</div>
	<div class="copy">
		©2020. Издательство «Mektep»
		<a href="tel:+77273944234" class="phoneLink" style="margin-left: 50px;">+7 (727) 394 42 34</a>
	</div>
</footer>
<script>
          // Проверка браузера на поддержку service worker
        //  if('serviceWorker' in navigator) {
        //      // Подключаем sw
        //      navigator.serviceWorker.register('/sw.js').then(function() {
        //          console.log("Service Worker Registered");
        //      });
        //  }
      </script>
      <script src="public/js/main.js"></script>
    </body>
</html>