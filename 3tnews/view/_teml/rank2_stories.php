
<div class="rank2-stories">
<?php
            foreach ($data_post as $item) {
                if($item->id_post> 1 && $item->id_post <=4){
        ?>
    <div class="story is-first pr-2" data-aid="36211354" data-track="|index1">
        <div class="story__thumb">
       
            <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" target="_blank">
            <img src="Assets/images/<?= $item->image?>  " alt="">                   
            </a>
        </div>
        <h4 class="story__heading pt-2"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" title="<?= $item->title?>" target="_blank"><?= $item->title?></a></h4> 
        <div class="story__meta">
        <a class="source" href=""> 
             3T_eam
        </a>             
        <a class="relate" href=""><?=$item->created_at?></a>                       
    </div>            
    </div> 
    
    <?php
        }}
    ?>      
</div>  
             
        