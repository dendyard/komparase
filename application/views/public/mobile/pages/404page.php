
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <div class="pd-10">
    <h1 class="banner-h1 fs-22">
        
    <h1 class="banner-h1">
        
       Upps... tidak menemukan yang anda cari? <br>
       
    </h1>
    </h1>
    </div>
    
    
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="assets/ads/320x50.gif">
    </div>
    <div class="v-separator-30"></div>
    <!-- Produk Pilihan -->
    
    <div id='search-container'>
        <?php 
            foreach($artikelPilihan as $pl) {
        ?>
        
        <div class="card-search border-1-brown">
            <div class="card-search-img"><img src="<?=($pl['imagefeature'] == '' ? base_url() . 'assets/artikel/default_thumb.jpg' : $pl['imagefeature'] )?>"></div>
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
        </div>
        
        <?php } ?>
        
        
    </div>
<!-- End of Produk Pilihan   -->
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="assets/ads/300x250.gif">
    </div>
    
    <!--  Komparasi Populer -->
    <div id='product-populer-section'>
      Komparasi Populer
    </div>
    
    
    
    <div id='produk-populer-slide-container'>
        <?php 
            foreach ($komparasiPilihan as $pl) {
                $idphs = '&idpro1=' . $pl['idkompro1'];
                if ($pl['idkompro2'] <> ''){
                    $idphs .= '&idpro2=' . $pl['idkompro2'];    
                }
                if ($pl['idkompro3'] <> ''){
                    $idphs .= '&idpro3=' . $pl['idkompro3'];    
                }
        ?>
        <div class="card-komparase pointer-cursor" onclick="bandingkan_artikel('smartphone', '<?=$idphs?>')">
            <div class="card-img-komparase"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-date-komparase pd-5 fs-10"><?=indonesian_date($pl['intime'])?></div>
            <div class="card-excerpt-komparase pd-5 fs-14"><?=$pl['blogtittle']?></div>
        </div>
        <?php } ?>
        
    </div>
<!-- End of Komparasi Populer   -->
<!-- End of Produk Serupa   -->
</div>