<div class = "container">
    <div class="row">         
        <div class="fs20 cl_green text-uppercase f-monte fbold mb20 pt-5"><?= $category->name?></div>
        <?php
            foreach($data_post as $item1){
                if($item1->id_cate == $category->id_cate){
                ?>
            <div class="story">
                <div class="story__thumb">
                    <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item1->id_post?>">                        
                    <img src="Assets/images/<?= $item1->image?>  " alt="">
                    </a>
                </div>
                <h4 class="story__heading pt-2"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item1->id_post?>" title="<?= $item1->title?>" target="_blank"><?= $item1->title?></a></h4> 
                <p class =""><?=$item1->intro?></p>  
                
            </div>    
            <div class="story__meta">
                        <a class="source" href=""> 
                            3T_eam
                        </a>             
                        <a class="relate" href=""><?=$item1->created_at?></a>                       
                    </div>    
                    
        <?php
            }}
        ?>
    </div>
</div>