
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <div class="pd-10">
    <h1 class="banner-h1 fs-22">
        
    <h1 class="banner-h1">
        
       Artikel Populer
       
    </h1>
    </h1>
    </div>
    <div class="v-separator"></div>  
    
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="assets/ads/320x50.gif">
    </div>
    <div class="v-separator-30"></div>
    <!-- Produk Pilihan -->
    
    <div id='search-container'>
        <?php 
            foreach($result as $pl) {
        ?>
        
        <div class="card-search border-1-brown">
            <a href="<?=base_url() . 'artikel/read/' . $pl['slug']?>" class="artikel-link">
            <div class="card-search-img"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-search-content">
                <div class="card-search-tittle pd-b-20 fw-500 fs-22"><?=$pl['blogtittle']?></div>
                <div class="card-search-body fs-14">
                
                </div>
                <div class="tags">
                    <ul>
                        <?php 
                        
                            $tags = explode(',',$pl['tags']);
                           foreach($tags as $tag){
                            
                        ?>
                        <li><?=$tag?></li>
                        <?php }
                        ?>
                    </ul>
                </div>
                <div class="card-search-footer">
                <div class="card-search-komparase fs-10"><img src="assets/images/comment.png"> <div class="comment-number"><?=$pl['review']?></div></div>
                </div>
            </div>
            </a>
        </div>
        
        <?php } ?>
        
        
    </div>
<!-- End of Produk Pilihan   -->
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="assets/ads/300x250.gif">
    </div>
    
    
<!-- End of Produk Serupa   -->
</div>