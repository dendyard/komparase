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
    <div class="tab tab-blur" id='tab-auto'>Automotive</div>
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
    
    <div class="komparasi-tabs">
        <div class="col-tab">
            <div class="col-kom-tittle">Bandingkan dengan :</div>
            
            <?php 
                if (sizeOf($prod1)  > 0) {
                    echo '<div class="col-kom-search-box active-search-box">';
                }else{
                    echo '<div class="col-kom-search-box">';
                }
            ?>    
                <input type="text" onkeyup="searchOnList('searchPhone1', 'stable-1')" id='searchPhone1' value="<?=(sizeOf($prod1) > 0 ? $prod1['productname']:'')?>">
            </div>
            
            <div class="col-kom-info">
                <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
           <div class="col-content-result">
                <?php
                if (sizeOf($prod1) > 0) {
                    echo '<a href=' . base_url().'produk/read/'.$prod1['slug'] . '>';    
                }
            
                ?>
                <img id='iconPhoneSelect-1' src="<?=(sizeOf($prod1)  > 0 ? $prod1['imagefeature']:'assets/images/blank-kom.png')?>" class="blank-kom-img">
                <?php
                if (sizeOf($prod1) > 0) {
                    echo '</a>';
                }
                ?>
               <div class="kom-result"><?='IDR ' . number_format($prod1['price'], '0',',','.')?></div>
            </div>
        </div>
        <div class="col-tab">
        <div class="col-kom-tittle">Bandingkan dengan :</div>
            
            <?php 
                if (sizeOf($prod2)  > 0) {
                    echo '<div class="col-kom-search-box active-search-box">';
                }else{
                    echo '<div class="col-kom-search-box">';
                }
            ?>
            
                <input type="text" onkeyup="searchOnList('searchPhone2', 'stable-2')" id='searchPhone2' value="<?=(sizeOf($prod2) > 0 ? $prod2['productname']:'')?>">
            </div>
        
            <div class="col-kom-info">
            <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content-result">
                <?php
                if (sizeOf($prod2) > 0) {
                    echo '<a href=' . base_url().'produk/read/'.$prod2['slug'] . '>';    
                }
                ?>
                
                <img id='iconPhoneSelect-2' src="<?=(sizeOf($prod2) > 0? $prod2['imagefeature']:'assets/images/blank-kom.png')?>" class="blank-kom-img">
                
                <?php
                if (sizeOf($prod2) > 0) {
                    echo '</a>';
                }
                ?>
                <?php 
                if (sizeOf($prod2) > 0) {    
            ?>
                
                <div class="kom-result"><?='IDR ' . number_format($prod2['price'], '0',',','.')?></div>
                <?php } ?>
            </div>
        </div>
        <button class="rekomp-button" id='rekomparasi' onclick='bandingkan_page()'>Komparasi Ulang</button>
    </div>
    
    <input type="hidden" id='idphone1' value="<?=(sizeOf($prod1) > 0 ? $prod1['id'] : '')?>">
    <input type="hidden" id='idphone2' value="<?=(sizeOf($prod2) > 0 ? $prod2['id'] : '')?>">
    <input type="hidden" id='idphone3' value="<?=(sizeOf($prod3) > 0 ? $prod3['id'] : '')?>">

    <!-- Komparasi Pilihan -->
    <div id='ringkasan-produk-section'>
      Ringkasan Produk
    </div>
    
    <div id='ringkasan-produk-content' class="pd-b-20">
        
        <?php 
           if (sizeOf($prod1) > 0) {    
                echo '<span class="ringkasan-produk ml-10">' . $prod1['productname'] . '</span>';
                echo '<p class="fs-14 pd-10">' . $prod1['excerptproduct'] . '</p>';
           }
        ?>
        <?php 
           if (sizeOf($prod2) > 0) {    
                echo '<span class="ringkasan-produk ml-10">' . $prod2['productname'] . '</span>';
                echo '<p class="fs-14 pd-10">' . $prod2['excerptproduct'] . '</p>';
           }
        ?>
        
    </div>
<!-- End of Komparasi Pilihan   -->
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="assets/ads/300x250.gif">
    </div>
<!--Spec Tech-->
    <div id="spec-product-kom">
        <table class="spec-pr pd-10">
            <thead>
                <th class='cw-tbl-spec-0 t-align-left pd-5'>Spesifikasi Teknis</th>
                <th class='cw-tbl-spec-1 t-align-center'>
                    
                    <?php 
                        if (sizeOf($prod1)) {    
                            echo '<img src="' . $prod1['imagefeature'] . '" class="tab-icon">';
                            echo '<p>' . $prod1['productname'] . '</p>';
                       }
                    ?>
                    
                </th>
                <th class='cw-tbl-spec-1 t-align-center '>
                    <?php 
                        if (sizeOf($prod2)) {    
                            echo '<img src="' . $prod2['imagefeature'] . '" class="tab-icon">';
                            echo '<p>' . $prod2['productname'] . '</p>';
                       }
                    ?>
                </th>
                
                
            </thead>
            <tbody>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Network</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    <td class='t-align-left fs-14 pd-10'>GSM / HSPA / LTE</td>
                    

                </tr>
                
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Display</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>Super AMOLED capacitive touchscreen, 16M colors</td>
                    <td class='t-align-left fs-14 pd-10'>PLS TFT capacitive touchscreen, 16M colors</td>
                    
                    
                </tr>

                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10'>Screen Size</td>
                    <td class='table-pad t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    <td class='t-align-left fs-14 pd-10'>6.43 inches, 99.8 cm2</td>
                    
                    
                </tr>
                
                

            </tbody>
        </table>
    </div>
<!--End of Spec Tech-->
    
<!--Review dari Ahli Section-->
    <div id="ahli-product-kom">
        <div class="header-blok">Review dari Ahli</div>
    </div>
    <div class="v-separator-30"></div>
    <div class="review-container">
        <?php 
        if (sizeOf($reviewahli1) > 0) {
            foreach ($reviewahli1 as $ahli) {
         ?>
        <div class='review-grid'>
            <div class="review-grid-pro-photo">
                <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                <p class="margin-0 color-white">Skor</p>
                <p class="margin-0 color-white">8.9</p>
            </div>
            <div class="review-grid-pro-comment fs-14">
                <p class="ringkasan-produk"><?=$prod1['productname']?></p>
                <p>
                    <?=(strlen($ahli['reviewcontent']) > 250 ? substr($ahli['reviewcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['reviewcontent']);?> 
                </p>
            </div>
        </div>
        <?php 
            } 
        }else{
            ?>
            <div class="card-komparase-blank-fluid t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Belum ada review dari ahli kami untuk produk :&nbsp;<?=$prod1['productname']?></div>
            </div>
        
        <?php
            
        } ?>
        
        
        <?php 
        if (sizeOf($reviewahli2) > 0) {
            foreach ($reviewahli2 as $ahli) {
         ?>
        <div class='review-grid'>
            <div class="review-grid-pro-photo">
                <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                <p class="margin-0 color-white">Skor</p>
                <p class="margin-0 color-white">8.9</p>
            </div>
            <div class="review-grid-pro-comment fs-14">
                <p class="ringkasan-produk"><?=$prod2['productname']?></p>
                <p>
                    <?=(strlen($ahli['reviewcontent']) > 250 ? substr($ahli['reviewcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['reviewcontent']);?> 
                </p>
            </div>
        </div>
        <?php 
            } 
        }else{
            ?>
            <?php 
                if (sizeOf($prod2) > 0) {
            ?>
            <div class="card-komparase-blank-fluid t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Belum ada review dari ahli kami untuk produk :&nbsp;<?=$prod2['productname']?></div>
            </div>
            <?php } ?>
        <?php
        } ?>
        
    </div>
<!-- End of Review dari Ahli -->
 
<!--User Comment-->
    <div id="ahli-product-kom">
        <div class="header-blok">Opini Kostumer</div>
    </div>
    <div class="v-separator-30"></div>
    <div class="review-container">
        <?php 
        if (sizeOf($comment1) > 0) {
            foreach ($comment1 as $ahli) {
         ?>
        <div class='review-grid'>
            <div class="review-grid-pro-photo">
                <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                <p class="margin-0 color-white">Skor</p>
                <p class="margin-0 color-white">8.9</p>
            </div>
            <div class="review-grid-pro-comment fs-14">
                <p class="ringkasan-produk"><?=$prod1['productname']?></p>
                <p>
                    <?=(strlen($ahli['commentcontent']) > 250 ? substr($ahli['commentcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['commentcontent']);?> 
                </p>
            </div>
        </div>
        <?php 
            } 
        }else{
            ?>
            <div class="card-komparase-blank-fluid t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Belum ada opini dari kostumer untuk produk :&nbsp;<?=$prod1['productname']?></div>
            </div>
        <?php
        }
        
        ?>
        
        
        <?php 
        if (sizeOf($comment1) > 0) {
            foreach ($comment1 as $ahli) {
         ?>
        <div class='review-grid'>
            <div class="review-grid-pro-photo">
                <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                <p class="margin-0 color-white">Skor</p>
                <p class="margin-0 color-white">8.9</p>
            </div>
            <div class="review-grid-pro-comment fs-14">
                <p class="ringkasan-produk"><?=$prod2['productname']?></p>
                <p>
                    <?=(strlen($ahli['commentcontent']) > 250 ? substr($ahli['commentcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['commentcontent']);?> 
                </p>
            </div>
        </div>
        <?php 
            } 
        }else{
            
            ?>
        <?php 
                if (sizeOf($prod2) > 0) {
            ?>
            <div class="card-komparase-blank-fluid t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Belum ada opini dari kostumer untuk produk :&nbsp;<?=$prod2['productname']?></div>
            </div>
        
        <?php
                }
        }
        
        ?>
        
    </div>
<!-- End of Comment -->
    
    <!-- Produk Pilihan -->
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
            <div class="card-excerpt-komparase pd-5 fs-14"><?=$pl['productname']?></div>
            
        </div>
        </a>
        <?php 
            } 
        ?>
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