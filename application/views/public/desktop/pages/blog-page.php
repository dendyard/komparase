

    
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    
    <div id='container-center'>
        
    <div id='container-left' class="sticky">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/160x600.jpg">
    </div>
    

    <div style="float:left;margin-right:20px;">  
    <div class="v-separator"></div> 
        
<!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/970x250.jpg">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->
<!--Artikel-->
    <div class="v-separator"></div> 
        
    <div id='artikel-container-left'>
        <div class="artikel-tittle">
            <h1><?=$blog['blogtittle']?> </h1>  
        </div>
        <div><?=indonesian_date($blog['intime'])?></div>
        
        <div class="tags">
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
            
            <img src="<?=($blog['imagehero'] == '' ? base_url() . 'assets/artikel/default_hero.jpg' : $blog['imagehero'] )?>" class="image-hero wd-100">
        </div>
        <div class="artikel-body">
        <?=$blog['blogcontent']?> 
        </div>
        
        
    <!--  Artikel Pilihan -->
    <div id='product-populer-section'>
      Artikel Terkait
    </div>
        <?php 
        foreach ($artikelPilihan as $pl) {
    ?>
        <div class="card-article border-1-brown">
            <a href="<?=base_url() . 'artikel/read/' . $pl['slug']?>" class="artikel-link">
            <div class="card-article-img"><img src="<?=($pl['imagefeature'] == '' ? base_url() . 'assets/artikel/default_thumb.jpg' : $pl['imagefeature'] )?>"></div>
            </a>
            <div class="card-article-content">
                <a href="<?=base_url() . 'artikel/read/' . $pl['slug']?>" class="artikel-link">
                <div class="card-article-tittle pd-b-20 fw-500 fs-22"><?=$pl['blogtittle']?></div>
                <div class="card-article-body fs-14 hg-75">
                <?=$pl['blogexcerpt']?>
                </div>
                </a>
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
                <div class="card-footer-komparase fs-10"><img src="<?=base_url()?>assets/images/comment.png"> <div class="comment-number"><?=$pl['review']?></div></div>
                </div>
                
                
            </div>
        </div>   
        
      <?php } ?>
        
        
        
        
    </div>
    
    <div id='artikel-container-right'>
        
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x600">
                <img class="border-1-grey" src="<?=base_url()?>assets/ads/300x600.jpg">
            </div>
        <!--End of Ad Container 300x600-->
        <div class="top-device">
            <div id='product-populer-section'>
              Top 10 Produk
            </div>
            
            <div class='grid-komp'>
                <table>
                    <thead>
                        <th class='t-align-left'></th>
                        <th class='t-align-left'>Produk</th>
                        <th class='t-align-right '>Favorit</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='table-pad t-align-right fs-14'>1.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>2.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>3.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>4.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>5.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>6.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>7.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>8.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>9.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        <tr>
                            <td class='table-pad t-align-right fs-14'>10.</td>
                            <td class='table-pad t-align-left fs-14'>Samsung Galaxy S20</td>
                            <td class='t-align-right fs-14 pd-right-10'>5.123</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!--End of Top 10 Produk-->
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x250 mt-40">
                <img class="border-1-grey" src="<?=base_url()?>assets/ads/SA_NewNormal_300x250.gif">
            </div>
        <!--End of Ad Container 300x600-->
    </div>
    
<!--End of Artikel-->
</div>
            <div id='container-right' class="sticky">
   <img class="border-1-grey" src="<?=base_url()?>assets/ads/160x600.jpg">
</div>
    </div>
    
</div>   