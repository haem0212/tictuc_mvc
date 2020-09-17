<div class="rank1-stories">
    <div class="story story--video" >
    <?php
            foreach ($data_post as $item) {
                if($item->id_post == 1){
        ?>
        <div class="story__thumb">
            <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" target="_blank" name="title">
            <img src="Assets/images/<?= $item->image?>   " alt="">   
            </a>
        </div>
        <h4 class="story__heading"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" title="<?= $item->title?>" target="_blank"><?= $item->title?></a></h4>
        
        <?php
        }}
    ?>                              
    </div>
</div>    