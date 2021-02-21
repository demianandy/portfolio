<? 
    $articles = get_articles($database); 
?>

<div class="portfolio" id="portfolio">
    <div class="left-list"></div>
    <div class="container">

        <div class="portfolio-top"><h4>Портфель работ</h4></div> 
        
        <div class="portfel">
            <? foreach ($articles as $items): ?>
            <div class="item">
                <div class="zagolovok"><h3><?=$items['head'];?></h3></div>
                <p class="paragrapf"><?=mb_substr($items['article'], 0, 600);?>...</p>
                <a href="<?=$items['link'];?>" class="root" target="_blank">Смотреть в источнике</a>
            </div>
            <? endforeach;?>
        </div>

    </div>
</div>