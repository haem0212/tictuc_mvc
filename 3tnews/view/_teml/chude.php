<!-- <div class="list-topic">
        <div class="loadmore row" data-track="|timeline">
        <?php
            foreach ($data_cate as $item) {
        ?>
            <div class="item style-3 col-6" data-zone="t_16803781">
                <div class="box-heading">
                    <a href="#" class="title"><?= $item->name?></a>   
                </div>
              
                <div class="box-content">    
                    <div class="story" data-aid="36252047" data-track="|index0">
                    <?php
                    foreach($data_post as $item1){
                        if($item1->id_cate == $item->id_cate){
                        ?>
                        <div class="story__thumb">

                            <a href="#" target="_blank">                  
                            <img src="Assets/images/<?= $item1->image?>" alt="">           
                            </a>
                            <h4 class="story__heading"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item1->id_post?>" title="<?= $item1->title?>" target="_blank"><?= $item1->title?></a></h4> 
                        </div>
                        <?php
                            }}
                        ?>   
                    </div>
                   
                </div>
                
            </div>
        <?php
            }
        ?>                               
        </div>
    </div>  -->

<div class = "container">
    <div class="row">
    <?php
            foreach ($data_cate as $item) {
        ?>
            <div class= "col-6">
          
        <div class="fs20 cl_green text-uppercase f-monte fbold mb20 pt-5"><?= $item->name?></div>
        <?php
            foreach($data_post as $item1){
                if($item1->id_cate == $item->id_cate){
                ?>
            <div class="story">
                <div class="story__thumb">
                    <a href="index.php?c=post_view&a=chitiet&id_post=<?=$item1->id_post?>">                        
                    <img src="Assets/images/<?= $item1->image?>  " alt="">
                    </a>
                </div>
                <h4 class="story__heading pt-2"><a href="index.php?c=post_view&a=chitiet&id_post=<?=$item1->id_post?>" title="<?= $item1->title?>" target="_blank"><?= $item1->title?></a></h4>   
                
            </div>  
                         
        <?php
            }}

        ?> 

            </div>
            <?php
    }
?> 
    </div>
</div>