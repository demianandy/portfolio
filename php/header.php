<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Качественные тексты, продающие и информационные статьи, наполнение лендингов и блогов, продвижение сайтов и многое другое.">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script src="js/lazy.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Сайт копирайтера</title>
</head>
<body>
    <div class="span">Меню</div>
    <div class="list">
        <div class="auto"><img data-src="img/auto.png" alt="autograph"></div>
        <ul>
            <li class="li">Содержание</li>
            <li><a class="flop" href="#header" class='link'>Авантитул</a></li>
            <li><a class="flop" href="#about" class='link'>Об авторе</a></li>
            <li><a class="flop" href="#uslugi" class='link'>Услуги</a></li>
            <li><a class="flop" href="#portfolio" class='link'>Портфолио</a></li>
            <li><a class="flop" href="#rewievs" class='link'>Отзывы</a></li>
            <li><a class="flop" href="#footer" class='link'>Контакты</a></li>
        </ul>
        <div class="img"><img data-src="img/blot.png" alt="blot"></div>
    </div>
    
    <header class="header" id="header"> 
        <div class="left-list"></div>
        <div class="container">
       <div class="top">
            <div class="date">
                <h4><a href="#" class="admin">Секретные материалы</a></h4>
                <h2><?=$date;?></h2>
            </div>
            <div class="name">
                    <h4>Персональный сайт</h4>
                    <span>Михаила Павленкова</span>
                    <h5>специалиста-копирайтера</h5>
            </div>
            <div class="dat">
                <h3>Издается с мая 2020 года</h3>
            </div>
       </div>

       <div class="content">

           <div class="content-1">
               <div class="portrait"><img data-src="img/portrait.jpg" alt="portrait"></div>
               <p class="text">Приветствую каждого из вас! Меня зовут Михаил Павленков, и это мой персональный сайт. Он адресован главным образом тем, кому нужны действительно качественные тексты. На страницах моего сайта вы найдете много интересной информации обо мне и моей профессиональной деятельности. Я буду рад каждому из вас.</p>
           </div>

           <div class="content-2">
              <p class="text"> <span>Я - профессиональный копирайтер</span><br><br>И я знаю, что вам нужно. Для продвижения в интернете сегодня недостаточно одних лишь текстов на сайте. Необходимы разные виды хорошего, годного контента. И все это могу предложить вам я.</p>
               <div class="portrait portrait2"><img data-src="img/portrait-2.jpg" alt="image"></div>
           </div>

       </div>

       <div class="polotno" >
            <h1>Административный вход</h1>


            <form method="POST" action="administrator" id="administrator">
                <input maxlength="30" type="text" name="named" class="adminname" id="imput" placeholder="Имя" autocomplete="off" value=""/>
                
                <input maxlength="30" type="password" name="passworded" id='ikput' class="adminpassword" placeholder="Пароль" autocomplete="off"  value=""/>

                <div id="error" class="error">Имя или пароль неверны</div>

                <div class="buttons">
                    <input type="submit" class="enter" name="send" id="enter" value="Войти" id="enter"/>   
                    <!-- <a href="administrator.php" class="enter" name="enter" id="enter" value="Войти" id="enter">Войти</a> -->
                    <input type="submit" class="close" value="Закрыть"/>
                </div> 
            </form>



       </div>
       </div>
    </header>