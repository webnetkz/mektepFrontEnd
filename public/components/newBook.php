<style>
    .newBook {
        position: absolute;
        width: 100%;
        height: 80vh;
        top: calc(180vh + 20px);
        left: 0;
        padding: 30px 10%;
        background-color: rgb(237, 237, 237);
    }
    .newMidBook {

    }
    .newBookBG {
        display: block;
        width: 100%;
        box-shadow: 0 0 10px rgb(100, 100, 100);
    }
    .newBookBG:hover {
        box-shadow: 0 0 30px rgb(100, 100, 100);
    }
    .newMidBook > div {
        width: 100%;
    }
    .newBookInfo {
        padding: 0 40px;
    }
    .newBookInfo h4 {
        display: inline;
        color: rgb(40, 40, 40);
        padding: 6px;
        border-radius: 4px;
        background-color: rgb(134, 211, 65);
        width: 25%;
        font-weight: 400;
    }
    .newBookInfo h2 {
        margin: 30px 0;
        color: rgb(13, 125, 190);
        font-weight: 400;
    }
    .newBookInfo h2:hover {
        text-decoration: underline;
        cursor: pointer;
    }
    .addTab {
        color: rgb(13, 125, 190);
        margin-bottom: 60px;
    }
    .addTab:hover {
        color: rgb(43, 155, 220);
        cursor: pointer;
    }
    .showBookBtn {
        background-image: linear-gradient(to bottom, #2aa8f0, #0790df);
        border: none;
        padding: 10px;
        font-size: 1.4em;
        border-radius: 3px;
        color: rgb(255, 255, 255);
        box-shadow: 0 0 5px #0790df;
    }
    .showBookBtn:hover {
        background-image: linear-gradient(to top, #2aa8f0, #0790df);
    }
    .buyBtn {
        background: linear-gradient(180deg, rgb(159, 228, 61) 0%, rgb(120, 204, 51) 100%);
        border: none;
        padding: 10px;
        font-size: 1.4em;
        border-radius: 3px;
        color: rgb(255, 255, 255);
        box-shadow: 0 0 5px rgb(120, 204, 51);
    }
    .buyBtn:hover {
        background: linear-gradient(0deg, rgb(159, 228, 61) 0%, rgb(120, 204, 51) 100%);
    }
    hr.short {
        margin: 30px 0;
        width: 35%;
        border-color: ;
        border: 1px solid rgb(214, 214, 214);
    }
    .newBookOpis {
        font-weight: 300;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    .newBookDesc {
        color: rgb(13, 125, 190);
        border-bottom: 1px dashed rgb(13, 125, 190);
    }
    .newBookAll {
        border: 1px solid black;
    }
</style>
<div class="newBook flex row">
    <div class="newMidBook W25">
        <img src="public/img/books/fizika11.jpg" alt="fiz" class="newBookBG">
    </div>
    <div class="newBookInfo W50">
        <h4>Новинка</h4>
        <h2>Физика 11 класс</h2>
        <p class="addTab">
            <img src="public/img/icons/star.png" alt="start" class="VAmiddle" style="width: 1em; margin-right: 10px;">    
            Добавить в избранное
        </p>
        <p>Автор: Ельникова Галина Алексеевна, Лаамарти Юлия Александровна</p>
        <p>Артикул: 745707.01.01</p>
            <br>
            <br>
            <br>
            <br>
        <button class="showBookBtn">Ознакомиться</button>
        <button class="buyBtn">Онлайн доступ</button>
        <hr class="short">
        <p class="newBookOpis">В учебнике на современном уровне изложены фундаментальные вопросы школьной программы, представлены основные технические применения законов физики</p>
        <a href="#" class="newBookDesc">Полное описание</a>
    </div>
    <div class="newBookAll W25">2</div>
</div>