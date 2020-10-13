<style>
    .bestseller {
        position: absolute;
        width: 100%;
        height: 80vh;
        top: 350vh;
        left: 0;
        padding: 30px 10%;
        background-color: white;
		z-index: 3;
		transition-duration: 500ms;
    }
	.bestsellerItem {
		padding: 40px;
	}
	.bestsellerItem:hover img {
		transform: scale(1.1);
	}
	.bestsellerItem > img {
		box-shadow: 0 0 10px rgb(100, 100, 100);
	}
	.bestsellerItem > p {
		color: rgb(13, 125, 190);
		padding-top: 20px;
	}
	.bestsellerItem > button {
		margin: 5px;
		font-size: 1rem;
	}
</style>
<div class="bestseller">
	<h1 class="TAcenter">Бестселлеры</h1>
	<div class="flex row">
		<div class="flex col bestsellerItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
		<div class="flex col bestsellerItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
		<div class="flex col bestsellerItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
		<div class="flex col bestsellerItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
	</div>
</div>