<div class="rewievs" id="rewievs">
    <div class="left-list"></div>
    <div class="container">

        <div class="rewievs-top"><h4>Доска почета</h4></div> 

        <div class="otziv">
            <div class="otziv-left">
                <div class="text"><p id="fortext1"><?=$rew1['rewiev'];?></p><span id="forname1"><?=$rew1['name'];?></span></div>
                <div class="text"><p id="fortext2"><?=$rew2['rewiev'];?></p><span id="forname2"><?=$rew2['name'];?></span></div>
                <div class="text"><p id="fortext3"><?=$rew3['rewiev'];?></p><span id="forname3"><?=$rew3['name'];?></span></div>
                <div class="text"><p id="fortext4"><?=$rew4['rewiev'];?></p><span id="forname4"><?=$rew4['name'];?></span></div>
            </div>
            <div class="otziv-right">
                <div class="text text2"><p id="fortext5"><?=$rew5['rewiev'];?></p><span id="forname5"><?=$rew5['name'];?></span></div>
                <div class="text text2"><p id="fortext6"><?=$rew6['rewiev'];?></p><span id="forname6"><?=$rew6['name'];?></span></div>
                <div class="text text2"><p id="fortext7"><?=$rew7['rewiev'];?></p><span id="forname7"><?=$rew7['name'];?></span></div>
                <div class="buttons"> 
                    <a class="write" id="write">Добавить</a> 
                    <a class="refresh" id="zapros">Сбросить</a> 
                </div>
            </div>
        </div>



        <div class="letter" >
            <h1>Похвалить автора</h1>
            <h2>количество отзывов в базе:</h2>
            <span id="col"><?=$i;?></span>


            <form id="form" method="post" >
                <textarea tabindex="1" name="message" id="message" class="massage" cols="30" rows="10" style="resize:none" id="message" maxlength="200" placeholder="Текст сообщения (от 50 до 200 символов)*" autocomplete="off"></textarea>
                
                <input tabindex="2" maxlength="30" type="text" name="nom" class="nom" id="nom" placeholder="Имя*" autocomplete="off" value=""/>

                <div id="error" class="error2">Имя введено некорректно</div>

                <div class="buttons">
                    <input type="submit" id="okay"  class="lettersend" name="enter" value="Написать"/>   
                    <input type="submit" class="letterclose" value="Закрыть"/>
                </div>
            </form>
       </div>



    </div>
</div>