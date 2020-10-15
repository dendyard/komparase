


    
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="assets/ads/970x250.jpg">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->
    <h1 class="banner-h1">
        
        <?php 
            if (sizeOf($result) <= 0){
                echo 'Tidak menemukan artikel/produk : ' . $q;    
            }else {
                echo 'Hasil pencarian : ' . $q;    
            }
        ?>
        
    </h1>
    
   <div id='container-left' class="sticky">
        <img class="border-1-grey" src="assets/ads/160x600.jpg">
    </div>
<!--Artikel-->
    <div id='product-populer-section'>
      Hasil Pencarian
    </div>
    
    <div id='artikel-container-left'>
        
        <?php 
            foreach($result as $pl) {
        ?>
            <div class="card-article border-1-brown">
            <a href="<?=base_url() . 'artikel/read/' . $pl['slug']?>" class="artikel-link">    
            <div class="card-article-img"><img src="<?=($pl['imagefeature'] == '' ? base_url() . 'assets/artikel/default_thumb.jpg' : $pl['imagefeature'] )?>"></div>
            <div class="card-article-content">
                <div class="card-article-tittle pd-b-20 fw-500 fs-22"><?=$pl['blogtittle']?></div>
                <div class="card-article-body fs-14 hg-75">
                <?=$pl['blogexcerpt']?>
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
                <div class="card-article-footer">
                <div class="card-footer-komparase fs-10"><img src="assets/images/comment.png"> <div class="comment-number"><?=$pl['review']?></div></div>
                </div>
                
                
            </div>
                </a>
        </div>    
        
        <?php } ?>
        
        
        
    </div>
    
    <div id='artikel-container-right'>
        
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x600">
                <img class="border-1-grey" src="assets/ads/300x600.jpg">
            </div>
        <!--End of Ad Container 300x600-->
        
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x250 mt-40">
                <img class="border-1-grey" src="assets/ads/SA_NewNormal_300x250.gif">
            </div>
        <!--End of Ad Container 300x600-->
    </div>
    
<!--End of Artikel-->
<div class="v-separator"></div> 

    
<!-- Produk Serupa -->
    <div id='product-populer-section'>
      Produk Serupa
    </div>
    
    <div id='produk-populer-slide-container'>
        <?php 
            foreach ($productSerupa as $pl) {
        ?>
        <a href="<?=base_url() . 'produk/read/' . $pl['slug']?>">
        <div class="card-komparase border-none t-align-center">
            <div class="card-img-komparase-product"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-date-komparase pd-5 fs-10"></div>
            <div class="card-excerpt-komparase pd-5 fs-14"><?=$pl['productname']?></div>
            
        </div>
        </a>
        <?php } ?>
        
    </div>
<!-- End of Produk Serupa   -->
</div>
