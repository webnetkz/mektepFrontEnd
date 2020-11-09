<style>
    .slider {
        position: absolute;
        width: 100vw;
        height: 105vh;
        top: 100px;
        left: 0;
        padding-top: 60vh;
        background-image: url('public/img/photo/sliderOne.jpg');
        background-size: contain;
        background-repeat: no-repeat;
        animation: slider 10s infinite;
    }
    @keyframes slider {
        5% {
            background-image: url('public/img/photo/sliderOne.jpg');
        }
        45% {
            background-image: url('public/img/photo/sliderOne.jpg');
        }
        55% {
            background-image: url('public/img/photo/sliderTwo.jpg');
        }
        95% {
            background-image: url('public/img/photo/sliderTwo.jpg');
        }
    }
    .slider h1, h2 {
        color: rgb(4, 57, 94);
        text-align: right;
        padding: 10px;
        padding-right: 100px;
        background: rgba(255, 255, 255, 0.2); 
    }
</style>
<div class="slider">
    <h1>Нужен текст для заполнения Нужен текст для заполнения</h1>
    <h2>Нужен текст для заполнения Нужен текст для заполнения</h2>
</div>