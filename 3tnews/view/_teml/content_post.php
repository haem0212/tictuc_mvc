
<div class="row pt-4">
            <div class="col660  mb40 col-9">
            <?php
        ?> 
                <div class="fs16 text-uppercase">                   
                </div>
                <div class="title-detail">
                <p name="title" value=""><?=$data_post1->title?></p>
                </div>     
                <div class="sharemxh topshare">
                    <p class="dateandcat clearfix">
                    <span class="pdate fl" data-field="createddate"><?=$data_post1->created_at?></span> <span class="line-middle">| </span>
                    
                    </p>                         
                </div>
                <div class="sapo_detail"> 
                <?=$data_post1->intro?>  
                </div>
                <div class="content_detail_news">
                    <p name="description" value=""><?=$data_post1->content?></p>
                    <!-- <img src="Assets/images/<?=$data_post1->image?>" alt=""> -->
                </div>                    
                <?php          
        ?> 
            </div>
        </div>
        

