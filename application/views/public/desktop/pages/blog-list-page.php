


    
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="<?=base_url();?>assets/ads/970x250.jpg">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->
    <h1 class="banner-h1">
        Artikel Populer
    </h1>
    <div class="v-separator"></div>  
    
   <div id='container-left' class="sticky">
        <img class="border-1-grey" src="<?=base_url();?>assets/ads/160x600.jpg">
    </div>
<!--Artikel-->
   
    <div id='artikel-container-left'>
        <input type="hidden" id='artpage' value='<?=$artikelPage?>'>
        <div id='art-cards'>
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
                <div class="card-footer-komparase fs-10"><img src="<?=base_url();?>assets/images/comment.png"> <div class="comment-number"><?=$pl['review']?></div></div>
                </div>
                
                
            </div>
                </a>
        </div>    
        
        <?php } ?>
        </div>
        
        <div>
            
                  <div id='animations'>
                    <div id='bar1'></div>
                    <div id='bar2'></div>
                    <div id='bar3'></div>
                  </div>
            
            <button class="more-view" id='btn_more_art' onclick="appendart()">Muat Artikel</button>
        </div>
    </div>
    
    <div id='artikel-container-right'>
        
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x600">
                <img class="border-1-grey" src="<?=base_url();?>assets/ads/300x600.jpg">
            </div>
        <!--End of Ad Container 300x600-->
        
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x250 mt-40">
                <img class="border-1-grey" src="<?=base_url();?>assets/ads/SA_NewNormal_300x250.gif">
            </div>
        <!--End of Ad Container 300x600-->
    </div>
    
