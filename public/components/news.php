<style>
    .news {
        position: absolute;
		border-top: 2px solid rgb(242, 242, 242);
        width: 100%;
        height: 80vh;
        top: 430vh;
        left: 0;
        padding: 30px 10%;
        background-color: white;
		z-index: 3;
		transition-duration: 500ms;
    }
	.newsItem {
		padding: 40px;
	}
	.newsItem > div {
		position: relative;
		left: -80px;
		top: -100px;
		color: rgb(211, 217, 222);
	}
	.newsItem > div span {
		font-size: 3rem;
	}
	.newsItem > p {
		color: rgb(13, 125, 190);
		padding-top: 20px;
		font-size: 1.5em;
	}
</style>
<div class="news">
	<h1 class="TAcenter">Новости</h1>
	<div class="flex row beetwenJC">
		<div class="flex col newsItem">
			<img src="public/img/news/nobel.jpg" class="W75">
			<p>Нобелевская премия по литературе: кто и за что ее получит</p>
			<div>
				<span>01</span>
				<p>октября</p>
			</div>
		</div>
		<div class="flex col newsItem">
			<img src="public/img/news/nobel.jpg" class="W75">
			<p class="">Нобелевская премия по литературе: кто и за что ее получит</p>
			<div>
				<span>01</span>
				<p>октября</p>
			</div>
		</div>
		<div class="flex col newsItem">
			<img src="public/img/news/nobel.jpg" class="W75">
			<p class="">Нобелевская премия по литературе: кто и за что ее получит</p>
			<div>
				<span>01</span>
				<p>октября</p>
			</div>
		</div>
	</div>
</div>