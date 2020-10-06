<div class='main-bg-banner-1'></div>
    
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <div>
    <h1 class="banner-h1">Discover more than 7 million comparisons</h1>
    </div>
    <div>
    <h2 class="banner-h2">Smartphone, Automotive, Cities, Books, Travels, Movies and many more...</h2>
    </div>
    <div class="tab" id='tab-smartphone'>Smartphone</div>
<!--    <div class="tab tab-blur" id='tab-auto'>Automotive</div>-->
<!--
    
    <div class="tab tab-blur" id='tab-laptop'>Laptop</div>
    
-->
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
                <input type="text"  onfocus="searchOnBlur('stable-1')" onkeyup="searchOnList('searchPhone1', 'stable-1')" id='searchPhone1'>
            </div>
            
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
                <input type="text" onfocus="searchOnBlur('stable-2')"  onkeyup="searchOnList('searchPhone2', 'stable-2')" id='searchPhone2'>
            </div>
        
            <div class="col-kom-info">
            <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
                <img id='iconPhoneSelect-2' src="assets/images/blank-kom.png" class="blank-kom-img">
            </div>
        </div>
        <div>
        <button class="komp-button" onclick='bandingkan_page()'>Lihat Komparasi</button>
            </div>
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
            <a href="<?=base_url() . 'artikel/read/' . $pl['slug']?>" class="artikel-link">
            <div class="card-img-komparase"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-date-komparase pd-5 fs-10"><?=indonesian_date($pl['intime'])?></div>
            <div class="card-excerpt-komparase pd-5 fs-14"><?=$pl['blogtittle']?></div>
            <div class="card-footer-komparase fs-10"><img src="assets/images/comment.png"> <div class="comment-number"><?=$pl['review']?></div></div>
            </a>
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
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="assets/ads/320x50.gif">
    </div>
    
<!--  Artikel -->
    <div id='product-populer-section'>
      Artikel Pilihan
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
            
            <div class="card-footer-komparase-artikel fs-10"><img src="assets/images/comment.png"> <div class="comment-number">4</div></div>
            </a>
        </div>
        
        <?php } ?>
    </div>
<!-- End of Artikel   -->
<!--    Top 10 Smartphone -->
    <div id='product-populer-section'>
      Top 10 Produk
    </div>
    
    <div class="top10pro-container">
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
</div>