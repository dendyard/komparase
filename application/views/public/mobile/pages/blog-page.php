
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <div class="pd-10">
    <h1 class="banner-h1 fs-22">
        
    
    </h1>
    </div>
    
    
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/320x50.gif">
    </div>
    <div class="v-separator-30"></div>
    <!-- Produk Pilihan -->
    
    <div id='blog-container'>
        <div class="artikel-tittle">
            <h1 class="fs-25"><?=$blog['blogtittle']?> </h1>  
        </div>
        <div class="fs-10 pd-left-10"><?=indonesian_date($blog['intime'])?></div>
        
        <div class="tags pd-left-10">
                    <ul>
                        <?php 
                        
                            $tags = explode(',',$blog['tags']);
                           foreach($tags as $tag){
                            
                        ?>
                        <li><?=$tag?></li>
                        <?php }
                        ?>
                    </ul>
                </div>
        <div>
            <img src="<?=$blog['imagehero']?>" class="image-hero wd-100">
        </div>
        <div class="artikel-body">
        <?=$blog['blogcontent']?> 
        </div>
        
        
    </div>
<!-- End of Produk Pilihan   -->
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/300x250.gif">
    </div>
    
   <!--  Artikel -->
    <div id='product-populer-section'>
      Artikel Terkait
    </div>
    
    <div id='produk-populer-slide-container'>
        <?php 
        foreach ($artikelPilihan as $pl) {
        ?>
        <div class="card-komparase-artikel">
            <a href="<?=base_url() . 'artikel/read/' . $pl['slug']?>" class="artikel-link">
            <div class="card-img-komparase-artikel"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-date-komparase-artikel pd-5 fs-10"><?=indonesian_date($pl['intime'])?></div>
            <div class="card-excerpt-komparase-artikel pd-5 fs-14"><?=$pl['blogtittle']?></div>
            
            <div class="card-footer-komparase-artikel fs-10"><img src="<?=base_url();?>assets/images/comment.png"> <div class="comment-number">4</div></div>
            </a>
        </div>
        
        <?php } ?>
    </div>
<!-- End of Artikel   -->
</div>