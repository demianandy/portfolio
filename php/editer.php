<div class="edit" id="editer">
    
    <div class="rewievs-top"><h4>Редактирование отзывов</h4></div> 

    <div class="fields">
    <div class="edit-right">
            <h5 class="zaglavie2"><?=$zaglavie2;?></h5>
                    <form id="sendwords" method="post" action="#editer">
                        <textarea tabindex="0" rows="7" cols="50" type="text" id="otziv" autocomplete="off" name="otziv" class="otziv" autocomplete="off" placeholder="Текст отзыва"><?= isset($_GET['red2']) ? $art2['rewiev'] : ''; ?></textarea>
                        <input tabindex="0" type="text" value="<?= isset($_GET['red2']) ? $art2['name'] : ''; ?>" placeholder="Имя автора" id="name" name="name" autocomplete="off" class="name">
                        <div class="buttons">
                            <a class='sozdatel' href="?add=new">Режим создания</a>
                            <input tabindex="0" class="sohr" type="submit" id="redact" name="save2" value="Сохранить">
                        </div>
                    </form>
        </div>
        <div class="edit-left">

            <? foreach ($rewievs as $items): ?>
            <div class="art">
                <h3><?=$items['rewiev'];?></h3>
                <div class="buttons">
                    <? echo "<a href='?del2={$items['id']}'>Удалить</a>"?> 
                    <? echo "<a class='redactor' href='?red2={$items['id']}'>Редактировать</a>"?> 
                </div>
            </div>
            <? endforeach; ?>

        </div>
    </div>

</body>
</html>


