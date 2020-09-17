<php>
<div class="row">
            <div class="col-1"></div>
            <div class="logo col-2"><span class="logo">3T</span>_eam</div>
            <div class="col-7"></div>
            <div class="col-2 timkiem">
                
            </div>             
        </div>
        <div class="nav-wrap-2020">
            <div class="nav">
                <div class="container">
                    <div class="nav__menu">
                        <a class="popular is-active" href="index.php?c=trangchu&a=show">
                            <span>Trang chủ</span>
                        </a>
                        <a class="latest" href="index.php?c=trangchu&a=tinmoi">
                            <span>Tin nóng</span>
                        
                        <!-- <a class="video" href="">
                            <span>Video</span>
                        </a> -->
                    </div>
                    <div class="nav__topic">
                        
                        <?php
            foreach ($data_cate as $item) {
        ?>                 
                        <a href="index.php?c=chude_view&a=chitietcd&id_cate=<?= $item->id_cate?>" class="sub"><?= $item->name?>  </a>                    
                        <?php
            }
        ?>              
                    </div>       
                </div>
            </div>
        </div>    
</div>
<?php    