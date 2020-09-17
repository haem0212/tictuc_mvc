<div class="fs20 cl_green text-uppercase f-monte fbold mb20 pt-2 pb-2">Tin khác</div>
<?php
    foreach ($data_post as $item) {
        if($item->id_post >=1 && $item->type == 0 ){
?>
<div class="story">

    <div class="story__thumb">
        <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" target="_blank">                        
        <img src="Assets/images/<?= $item->image?>  " alt="">
        </a>
    </div>
    <div class ="des" style="
    width:px;
">
    <h4 class="story__heading pt-2"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" title="<?= $item->title?>" target="_blank"><?= $item->title?></a></h4>
    <p class =""><?=$item->intro?></p>
    </div>
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
