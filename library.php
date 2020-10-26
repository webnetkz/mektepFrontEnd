<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mektep</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(0, 0, 0)">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
        <link rel="apple-touch-icon" href="/public/img/logo.png">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/mobileStyle.css">
        <!-- <link rel="manifest" href="/public/json/manifest.json">  -->
        <style>
            footer {
                position: relative!important;
                top: 12vh!important;
            }
        </style>
      </head>
    
    <body>
<?php
    require_once "public/components/header.php";
?>
<style>
#library {
    overflow-Y: hidden;
    height: 200vh;
    position: relative;
    top: 110px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 10px 30px;
}
.book {
    width: 130px;
    height: 220px;
    margin: 10px;
    margin-bottom: 10px;
    color: rgb(12, 77, 162);
    transition-duration: 500ms;
}
.book:hover {
    cursor: pointer;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    transform: scale(1.05);
    border-radius: 10px;
}
.book:active {
    transform: scale(0.5);
}
.bookImg {
    width: 100%;
}
.bookDesc {
    font-size: 0.7em;
    text-align: center;
    max-height: 2.5em;
    padding: 2px 4px;
}
@media only screen and (max-width: 1000px) {

    .book {
        width: 130px;
        margin: 10px;
    } 

}
</style>
<section id="library">
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
    <div class="book">
        <img src="public/img/books/fizika11.jpg" alt="" class="bookImg">
    </div>
</section>
<script>
    function filter(elem) {
        let allBooks = document.getElementsByClassName('book');
        let selectBooks = document.getElementsByClassName(elem.value);

        for(let i = 0; i < allBooks.length; i++) {
            allBooks[i].style.display = 'none';
        }

        for(let i = 0; i < selectBooks.length; i++) {
            selectBooks[i].style.display = 'block';
        }
    }
</script>
<?php
    require_once "public/components/footer.php";
?>