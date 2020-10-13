<style>
    .slider {
        position: absolute;
        width: 100vw;
        height: 100%;
        left: 0;
        background-image: url('public/img/photo/sliderOne.jpg');
        background-size: contain;
        background-position: 0 35%;
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
</style>
<div class="slider">

</div>