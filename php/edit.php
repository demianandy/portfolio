

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script src="js/edit.js"></script>
    <script src="js/lazy.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Административный вход</title>
</head>
<body>
    
<div class="edit" id="edit">

    <a class="main" href="index.php">На главную</a>
    
    <div class="edit-top"><h4 class="begin">Редактирование данных</h4></div> 

    <div class="fields">

        <div class="edit-left">
            <? foreach ($articles as $items): ?>
            <div class="art">
                <h3><?=$items['head'];?></h3>
                <div class="buttons">
                    <? echo "<a href='?del={$items['id']}'>Удалить</a>"?> 
                    <? echo "<a class='redactor' href='?red={$items['id']}'>Редактировать</a>"?> 
                </div>
            </div>
            <? endforeach; ?>
        </div>

        <div class="edit-right">
            <h5 class="zaglavie"><?=$zaglavie;?></h5>
                    <form id="sendwords" method="post">
                        <input tabindex="0" type="text" value="<?= isset($_GET['red']) ? $art['head'] : ''; ?>" placeholder="Название статьи" id="slogan" name="slogan" autocomplete="off" class="slogan"> 
                        <textarea tabindex="0" rows="7" cols="50" type="text" id="words" autocomplete="off" name="words" class="words" autocomplete="off" placeholder="Текст статьи"><?= isset($_GET['red']) ? $art['article'] : ''; ?></textarea>
                        <input tabindex="0" type="text" value="<?= isset($_GET['red']) ? $art['link'] : ''; ?>" placeholder="Ссылка на источник" id="silka" name="silka" autocomplete="off" class="silka">
                        <div class="buttons">
                            <a class='sozdatel' href="?add=new">Режим создания</a>
                            <input tabindex="0" class="sohr" type="submit" id="redact" name="redact" value="Сохранить">
                        </div>
                    </form>
        </div>


    </div>
</div>


