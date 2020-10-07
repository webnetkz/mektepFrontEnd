﻿<style>
    header {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100px;
        background-color: rgb(4, 57, 94);
        padding: 0 10%;
        color: rgb(255, 255, 255);
        z-index: 888;
    }
    a:hover {
        color: rgba(134, 211, 65, 1);
    }
    .logo {
        height: 80px;
    }
    header:nth-child(1) {
        position: fixed;
        left: 0;
    }
    .headMenu {
        width: 80%;
    }
    .headMenu > div {
        height: 50px;
        padding: 0 10px;
    }
    hr.line {
        border-color: rgb(169, 169, 169);
    }
    .secondMenuItem {
        margin: 0 20px;
    }
    .firstMenuItem {
        margin: 0 20px;
        font-size: 0.9em;
        color: rgb(63, 205, 233);
    }
    .searchInp {
        outline: none;
        border: none;
        font-size: 1.2em;
        background-color: rgb(4, 57, 94);
        color: rgb(255, 255, 255);
        padding-left: 5px;
    }
    .searchInp:focus {
        color: rgba(134, 211, 65, 1);
        background-color: rgb(255, 255, 255);
        border-radius: 5px;
        padding: 4px;
    }
    .searchInp:focus .searchIcon {
        background-color: rgb(255, 255, 255);
        border-radius: 5px;
        padding: 4px;
    }
    .searchIcon {
        height: 20px;
        margin-right: 5px;
    }
    .socialIcon {
        padding: 3px;
        vertical-align: middle;
    }
    .socialIcon:hover {
        transform: scale(1.1);
    }
    .marketIcon {
        vertical-align: middle;
        padding: 6px;
    }
    .marketIcon:hover {
        border-radius: 4px;
        background-color: rgb(255, 255, 255);
    }
</style>
<header class="flex centerAI betweenJC">
    <div class="headLogo">
        <img src="public/img/logoRu.webp" alt="mektep" class="logo">
    </div>
    <div class="headMenu flex col">
        <div class="headFirstMenu flex centerAI betweenJC">
            <div class="search flex">
                <img src="public/img/icons/searchGreen.png" alt="search" class="searchIcon">
                <input type="text" class="searchInp" placeholder="Поиск по сайту">
            </div>
            <div class="phone">
                <a href="tel:+77273944234" class="phoneLink">+7 (727) 394 42 34</a>
            </div>
            <div class="firstMenu">
                <menu class="firstMenu">
                    <a href="#" class="firstMenuItem">О нас</a>
                    <a href="#" class="firstMenuItem">Оплата</a>
                    <a href="#" class="firstMenuItem">Доставка</a>
                    <a href="#" class="firstMenuItem">Сайты-партнеры</a>
                    <div class="social inline">
                        <a href="https://www.instagram.com/">
                            <img src="public/img/icons/inst.png" alt="social icon" class="socialIcon">
                        </a>
                        <a href="https://www.facebook.com/">
                            <img src="public/img/icons/fb.png" alt="social icon" class="socialIcon">
                        </a>
                        <a href="https://www.whatsapp.com/">
                            <img src="public/img/icons/wp.png" alt="social icon" class="socialIcon">
                        </a>
                        <a href="https://www.instagram.com/">
                            <img src="public/img/icons/tm.png" alt="social icon" class="socialIcon">
                        </a>
                        <a href="https://www.instagram.com/">
                            <img src="public/img/icons/tr.png" alt="social icon" class="socialIcon">
                        </a>
                    </div>
                </menu>
            </div>
        </div>
            <hr class="line">
        <div class="headSecondMenu flex centerAI betweenJC">
            <div class="secondMenu">
                <menu class="second">
                    <a href="#" class="secondMenuItem">Интернет-магазин</a>
                    <a href="#" class="secondMenuItem">Цифровые учебники</a>
                    <a href="#" class="secondMenuItem">Вебинары</a>
                    <a href="#" class="secondMenuItem">Новости</a>
                </menu>
            </div>
            <div class="loginAndCart">
                <img src="public/img/icons/user.png" alt="icon" class="marketIcon">
                <img src="public/img/icons/cart.png" alt="icon" class="marketIcon">
            </div>
        </div>
    </div>
</header>