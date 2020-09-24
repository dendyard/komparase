
<div class='main-bg-banner-1'>

</div>

<!--Ad Container 160x600 (Left & Right)-->
<!--
    <div class="kom-ads-160x600-left">
        <img class="border-1-grey" src="assets/ads/160x600.jpg">
    </div>
    <div class="kom-ads-160x600-right">
        <img class="border-1-grey" src="assets/ads/160x600.jpg">
    </div>
-->

<!--
<div id='container-right' class="sticky">
   <img class="border-1-grey" src="assets/ads/160x600.jpg">
</div>
-->

<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    
    <div id='container-center'>
        
    <div id='container-left' class="sticky">
        <img class="border-1-grey" src="assets/ads/160x600.jpg">
    </div>
    

    <div style="float:left;margin-right:20px;">    
    <h1 class="banner-h1">Discover more than 7 million comparisons</h1>
    <h2 class="banner-h2">Smartphone, Automotive, Cities, Books, Travels, Movies and many more...</h2>
    
    <div class="tab" id='tab-smartphone'>Smartphone</div>

    <div class="tab tab-blur" id='tab-auto'>Automotive</div>
    <div class="tab tab-blur" id='tab-laptop'>Laptop</div>

    
    <div id='tbsrc1-container'>
        <table id="stable-1"></table>
    </div>
    <div id='tbsrc2-container'>
        <table id="stable-2"></table>
    </div>
    <div id='tbsrc3-container'>
        <table id="stable-3"></table>
    </div>
    <div class="komparasi-tabs komparasi-tab-shadows">
        <div class="col-tab">
            <div class="col-kom-tittle">Bandingkan dengan :</div>
            <div class="col-kom-search-box">
                <input type="text" onkeyup="searchOnList('searchPhone1', 'stable-1')" id='searchPhone1'></div>
            <img src="assets/images/loop-brown.png" class="col-kom-search-icon" />
            <div class="col-kom-info">
                <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
                <img id='iconPhoneSelect-1' src="assets/images/blank-kom.png" class="blank-kom-img">
            </div>
        </div>
        <div class="col-tab">
        <div class="col-kom-tittle">Bandingkan dengan :</div>
            <div class="col-kom-search-box">
                <input type="text" onkeyup="searchOnList('searchPhone2', 'stable-2')" id='searchPhone2'>
            </div>
            <img src="assets/images/loop-brown.png" class="col-kom-search-icon" />
            <div class="col-kom-info">
            <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
                <img id='iconPhoneSelect-2'  src="assets/images/blank-kom.png" class="blank-kom-img">
            </div>
        </div>
        <div class="col-tab">
        <div class="col-kom-tittle">Bandingkan dengan :</div>
            <div class="col-kom-search-box">    
                <input type="text" onkeyup="searchOnList('searchPhone3', 'stable-3')" id='searchPhone3'>
            </div>
            <img src="assets/images/loop-brown.png" class="col-kom-search-icon" />
            <div class="col-kom-info">
            <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
                <img id='iconPhoneSelect-3'  src="assets/images/blank-kom.png" class="blank-kom-img">
            </div>
        </div>
        <button class="komp-button" onclick='bandingkan_page()'>Lihat Komparasi</button>
    </div>
    
<!-- Produk Pilihan -->
    <div id='product-populer-section'>
      Produk Pilihan Terbaru
    </div>
    
    <div id='produk-populer-slide-container'>
        
        <?php 
            foreach ($productPilihan as $pl) {
        ?>
        <div class="card-komparase">
            <div class="card-img-komparase"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-date-komparase pd-5 fs-10"><?=indonesian_date($pl['intime'])?></div>
            <div class="card-excerpt-komparase pd-5 fs-14"><?=$pl['blogtittle']?></div>
            <div class="card-footer-komparase fs-10"><img src="assets/images/comment.png"> <div class="comment-number"><?=$pl['review']?></div></div>
        </div>
        <?php } ?>
    </div>
<!-- End of Produk Pilihan   -->
<!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="assets/ads/970x250.jpg">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->
    
    

<!-- Komparasi Pilihan -->
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
<!-- End of Komparasi Pilihan   -->
    
<!--Artikel-->
    <div id='product-populer-section'>
      Artikel Terbaru
    </div>
    
    
    <div id='artikel-container-left'>
        <?php 
        foreach ($artikelPilihan as $pl) {
    ?>
        <div class="card-article border-1-brown">
            <div class="card-article-img"><img src="<?=$pl['imagefeature']?>"></div>
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
        </div>   
        
      <?php } ?>
        
        
    </div>
    
    <div id='artikel-container-right'>
        
        <!--Ad Container 300x600-->
            <div class="kom-ads-300x600">
                <img class="border-1-grey" src="assets/ads/300x600.jpg">
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
                <img class="border-1-grey" src="assets/ads/SA_NewNormal_300x250.gif">
            </div>
        <!--End of Ad Container 300x600-->
    </div>
    
<!--End of Artikel-->
    </div>
            <div id='container-right' class="sticky">
   <img class="border-1-grey" src="assets/ads/160x600.jpg">
</div>
    </div>
    
</div>   

    