<style>
    .newBooks {
        position: absolute;
        width: 100%;
        height: 80vh;
        top: 270vh;
        left: 0;
        padding: 30px 10%;
        background-color: white;
		z-index: 3;
		transition-duration: 500ms;
    }
	.newBooksItem {
		padding: 40px;
	}
	.newBooksItem:hover img {
		transform: scale(1.1);
	}
	.newBooksItem > img {
		box-shadow: 0 0 10px rgb(100, 100, 100);
	}
	.newBooksItem > p {
		color: rgb(13, 125, 190);
		padding-top: 20px;
	}
	.newBooksItem > button {
		margin: 5px;
		font-size: 1rem;
	}
</style>
<div class="newBooks">
	<h1 class="TAcenter">Новинки</h1>
	<div class="flex row">
		<div class="flex col newBooksItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
		<div class="flex col newBooksItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
		<div class="flex col newBooksItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
		<div class="flex col newBooksItem">
			<img src="public/img/books/fizika11.jpg" class="W100">
			<p class="TAcenter">Физика 11 класс</p>
			        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
		</div>
	</div>
</div>