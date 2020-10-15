<style>
    .grids {
        position: absolute;
        width: 100%;
        height: 100vh;
        top: calc(100vh - 100px);
        left: 0;
        padding: 30px 10%;
        background-color: inherit;
    }
    .grids > div:nth-child(1) {
        margin-right: 3px;
    }
    .grids > div > div {
        margin-bottom: 3px;
    }
    .textForGrid {
        text-transform: uppercase;
        color: rgb(255, 255, 255);
        text-shadow: 0 0 20px rgb(0, 0, 0);
        position: relative;
        top: 30%;
        font-size: 1.8em;
    }
    .bgZoom:hover {
        filter: brightness(0.4);
    }
    .bgZoom:hover .textForGrid {
        text-shadow: 0 0 5px rgb(255, 255, 255);
    }
    .bg1{
        background-image: url('public/img/photo/freeBooks.jpg');
        background-size: 120%;
    }
    .bg2{
        background-image: url('public/img/photo/onlineLekcii.jpg');
        background-size: 140%;
    }
    .bg3{
        background-image: url('public/img/photo/sliderThree.jpg');
        background-size: 100%;
    }
    .bg4{
        background-image: url('public/img/photo/news.jpg');
        background-size: 100%;
    }
    .bg5{
        background-image: url('public/img/photo/mekt.jpg');
        background-size: 100%;
    }
    .bg0{
        background: linear-gradient(335deg, rgba(2,0,36,1) 0%, rgba(18,18,129,1) 0%, rgba(0,212,255,1) 100%);
    }
</style>

<div class="grids flex row TAcenter">
    <div class="W50  flex col">
        <div class="H66 bg0 bgZoom">
            <p class="textForGrid" style="font-size: 5em;">Opic</p>
        </div>
        <div class="H33 bg4 bgZoom">
            <p class="textForGrid" style="font-size: 2.8em;">Новости</p>
        </div>
    </div>
    <div class="W50 betweenJC flex col">
        <div class="H100 bg3 bgZoom">
            <p class="textForGrid" style="font-size: 2.8em;">Интернет магазин</p>
        </div>
        <div class="H100 flex row">
            <div class="W50 bg2 bgZoom">
                <p class="textForGrid">Онлайн лекции</p>
            </div>
            <div class="W50 ml3 bg1 bgZoom">
                <p class="textForGrid">Учебники в свободном доступе</p></div>
        </div>
        <div class="H100 bg5 bgZoom">
            <p class="textForGrid" style="font-size: 2.8em;">Mektep</p>
        </div>
    </div>
</div>

