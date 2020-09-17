<div class="story" data-aid="36212372" data-track="|index1">
<?php
    foreach ($data_post as $item) {
        if($item->id_post >= 6 ){
?>
    <div class = "mb-3 row">
        <div class="story__thumb col-3">
            <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" target="_blank">
            <img src="Assets/images/<?= $item->image?>  " alt="">
            
            </a>
        </div>
        <h4 class="story__heading  col-8"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" title="<?= $item->title?>" target="_blank"><?= $item->title?></a></h4>
    </div>
    <div class="story__meta mb-2">
        <a class="source" href=""> 
             3T_eam
        </a>             
        <a class="relate" href=""><?=$item->created_at?></a>                       
    </div>       
    <?php
            }}
            ?>  
</div>