<style>
    .grids {
        position: absolute;
        width: 100%;
        height: 100vh;
        top: 80vh;
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
    .grids > div > div {
        margin-bottom: 3px;
    }
    .bg1{
        background-image: url('public/img/photo/sliderOne.jpg');
    }
</style>

<div class="grids flex row TAcenter">
    <div class="W50  flex col">
        <div class="H66 bgGreen bg1 bgZoom">1</div>
        <div class="H33 bgRed bg1 bgZoom">2</div>
    </div>
    <div class="W50 betweenJC flex col">
        <div class="bgBlue H100 bg1 bgZoom">1</div>
        <div class="H100 flex row">
            <div class="W50 bgRed bg1 bgZoom">1</div>
            <div class="W50 bgBlue ml3 bg1 bgZoom">2</div>
        </div>
        <div class="bgBlue H100 bg1 bgZoom">3</div>
    </div>
</div>

