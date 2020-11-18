<style>
#searchBar {
    position: fixed;
    top: 101px;
    left: 0;
    width: 100vw;
    height: 90px;
    z-index: 999999999;
    background-color: rgb(4, 57, 94);
}
#searchForm {
    display: flex;
    width: 100%;
    height: 50%;
    align-items: center;
    justify-content: center;
}
.searchInp {
    margin: 8px;
    border: none;
    padding: 5px;
    border-radius: 30px;
    text-align: center;
    outline: none;
    background: white;
    transition-duration: 600ms;
    color: rgb(12, 77, 162);
    min-width: 120px;
}
.searchInp:hover {
    cursor: pointer;
}
.searchInp::placeholder {
    color: rgb(12, 77, 162);
}
.searchInp:focus {
    box-shadow: 0 0 10px rgb(227, 238, 255);
}
.searchInputFrom {
    width: 100vw;
}
.searchInput {
    outline: none;
    width: 30vw;
    margin-left: 35vw;
    margin-top: 5px;
    background-image: url("../img/icons/search.png");
    background-repeat: no-repeat;
    background-size: 18px;
    background-position: 3% 40%;
}
.searchBtn {
    position: relative;
    left: -60px;
    padding: 3px 7px;
    border-radius: 30px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    text-align: center;
    outline: none;
    transition-duration: 600ms;
    background: rgb(12, 77, 162);
    color: rgb(255, 255, 255);
    border: none;
}
.searchBtn:hover {
    padding-right: 50px;
    left: -103px;
}
@media only screen and (max-width: 1000px) {

    #searchBar {
        height: 150px;
        padding-top: 15px;
    }
    #searchForm {
        flex-wrap: wrap;
    }
    .searchInp {
        min-width: 42%;
    }
    .searchInput {
        width: 70vw;
        margin-left: 15vw;
        margin-top: 25px;
    }
}
</style>
<section id="searchBar">
    <form method="GET" id="searchForm">
        <select name="lavel" class="searchInp" onchange="filter(this)">
            <option selected disabled>Класс</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
        </select>
        <select name="subject" class="searchInp" onchange="filter(this)">
            <option selected disabled>Предмет</option>
            <option value="fiz">Физика</option>
            <option value="him">Химия</option>
        </select>
        <select name="lang" class="searchInp" onchange="filter(this)">
            <option selected disabled>Язык</option>
            <option value="kaz">Казахский</option>
            <option value="rus">Русский</option>
        </select>
        <select name="pack" class="searchInp" onchange="filter(this)">
            <option selected disabled>Пакет</option>
            <option value="t1">Для учителя</option>
            <option value="t2">Для ученика</option>
        </select>
    </form>
    <form id="searchInputFrom">
        <input type="text" class="searchInput searchInp" placeholder="Поиск" name="findInp">
    </form>
</section>