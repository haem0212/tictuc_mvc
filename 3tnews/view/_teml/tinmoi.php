
<div class="fs20 cl_green text-uppercase f-monte fbold mb20 pt-5">Tin Nóng</div>
<?php
    foreach ($data_post as $item) {
        if( $item->type == 1 ){
?>
<div class="main-container pt-3">
    <div class="container">
        <div class="main-col">
            <div class="timeline loadmore">
                <div class="story">
                    <div class="story__thumb">                  
                        <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>" target="_blank">                        
                            <img src="Assets/images/<?= $item->image?>  " alt="">
                        </a>          
                    </div>
                    
                    <div class ="des" style="
                        width: 1000px;
                    ">
                        <h4 class="story__heading"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item->id_post?>"  target="_blank"><?= $item->title?></a></h4>
                        <p class =""><?=$item->intro?></p>
                    </div>
                    <div class="story__meta">
                        <a class="source" href=""> 
                            3T_eam
                        </a>             
                        <a class="relate" href=""><?=$item->created_at?></a>                       
                    </div>       
                </div>    
            </div>            
        </div>
    </div>            
</div> 
<?php
    }}
?>
