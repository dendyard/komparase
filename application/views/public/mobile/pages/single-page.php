<div class='main-bg-banner-1'></div>
    
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    <div>
    <h1 class="banner-h1">Discover more than 7 million comparisons</h1>
    </div>
    <div>
    <h2 class="banner-h2">Smartphone, Automotive, Cities, Books, Travels, Movies and many more...</h2>
    </div>
    <div class="kom-ads-300x100-leaderboard">
    <img class="border-1-grey" src="<?=base_url()?>assets/ads/SA_NewNormal_320x100.gif">
    </div>
    <div class="tab" id='tab-smartphone'>Smartphone</div>
    <div class="tab tab-blur" id='tab-auto' 
         onclick="bandingkan_single(<?=$mainData['id']?>)">Bandingkan</div>
<!--
    
    <div class="tab tab-blur" id='tab-laptop'>Laptop</div>
    
-->
    <div class="komparasi-tabs">
        <div class='product-single pd-top-30'>
            <div class="slide-image">
                <img src="<?=$mainData['imagefeature']?>" class="blank-kom-img">
                
            </div>
        </div>
        
            <p class="product-single-tittle color-blue fs-30 t-align-center">
                <?=$mainData['productname']?>
            </p>
            
        <?php $spcjsn = json_decode($mainData['spec']); 
            
        ?>
        <div class='main-info'>
            <div class="left-main-info">
                
            </div>
            <div class="review-grid-pro-comment fs-14 t-align-left font-poppins">
                <span class="fw-500 color-orange">Tanggal Release :</span>
                <span class="fw-300 fs-14"><br>
                        <?php
                         echo str_replace("<hr>","<br>",$spcjsn->rilis->spec->Tanggal);
                        ?>
                </span>
                <br>
                    <span class="fw-500 color-orange">Berat :</span>
                    <span class="fw-300 fs-14"><br>
                        <?php
                         echo str_replace("<hr>","<br>",$spcjsn->body->spec->Berat);
                        ?>
                    </span>
                <br>
                    <span class="fw-500 color-orange">OS :</span>
                    <span ><br>
                        <?php
                         echo str_replace("<hr>","<br>",$spcjsn->platform->spec->OS);
                        ?>
                    </span>
                <br>
                    <span class="fw-500 color-orange">RAM :</span>
                    <span class="fw-300 fs-14"><br>
                        <?php
                         echo str_replace("<hr>","<br>",$spcjsn->memory->spec->Internal);
                        ?>
                </span>
                <br>
                    <span class="fw-500 color-orange">Layar :</span>
                    <span class="fw-300 fs-14"><br>
                        
                        <?php
                         echo str_replace("<hr>","<br>",$spcjsn->layar->spec->Ukuran);
                        ?>
                    </span>
                
            </div>
        </div>
        
        <div class="produk-single-price font-poppins">
                <?='IDR ' . number_format($mainData['price'], '0',',','.')?>
        </div>
        


            <div class="rating-grid mt-30">
                <div class="produk-single-score font-poppins">
                
                    <p class='margin-0'>
                        <?php
                            if ($mainData['rating'] >= 0 && $mainData['rating'] < 2){
                                echo 'Poor';
                            }elseif ($mainData['rating'] >= 2 && $mainData['rating'] < 4){
                                echo 'Good';
                            }elseif ($mainData['rating'] >= 4 && $mainData['rating'] <= 5){
                                echo 'Excelent';
                            }
                        ?>
                    </p>
                    <p class='margin-0 fw-500 fs-50'><?=$mainData['rating']?></p>
                
                </div>
            
                <div class="produk-single-star">
                    <div class="rating-star">
                        <ul>
                            <?php
                                $dec = false;
                                $rtNonDec = substr($mainData['rating'],0,1);
                        
                                if (strpos($mainData['rating'],".")) {
                                    $dec = true;
                                }
                                for ($i = 0; $i < $rtNonDec; $i++) {
                            ?>
                                <li><img src="<?=base_url()?>assets/images/star-full.png"></li>
                            <?php 
                                } 
                                if ($dec) { 
                                    echo "<li><img src=" . base_url() . "assets/images/star-half.png></li>"; 
                                    for ($i = ($rtNonDec+1); $i < 5; $i++) {
                                        echo "<li><img src=" . base_url() . "assets/images/star-empty.png></li>"; 
                                    }
                                }else{
                                    for ($i = $rtNonDec; $i < 5; $i++) {
                                        echo "<li><img src=" . base_url() . "assets/images/star-empty.png></li>"; 
                                    }
                                }
                                
                            ?>
                        </ul>
                    </div>

                    <div class="rating-review t-align-left">
                        <p class="margin-0 font-poppins fs-14"><img src='<?=base_url()?>assets/images/comment.png' class='review-bubble'> <?=sizeof($reviewAhli)?>  Review</p>
                        <p class="margin-0 font-poppins fs-14"><img src='<?=base_url()?>assets/images/comment.png' class='review-bubble'> <?=sizeof($reviewUser)?> Komentar</p>
                    </div>


                </div>
            </div>
    </div>
    
    
    <!-- Komparasi Pilihan -->
    <?php 
        if ($mainData['blogproduct'] <> ''){
    ?>
    <div id='ringkasan-produk-section'>
      Tentang Produk
    </div>
    
    <div id='ringkasan-produk-content' class="pd-b-20">       
        <div class="fs-14 pd-10"><?=$mainData['blogproduct']?></div>
    </div>
    <?php } ?>
<!-- End of Komparasi Pilihan   -->
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/300x250.gif">
    </div>
<!--Spec Tech-->
    <div id="spec-product-kom">
        <table class="spec-pr pd-10">
            <thead>
                <th class='cw-tbl-spec-0 t-align-left pd-5'>Spesifikasi Teknis</th>
                <th class='cw-tbl-spec-1 t-align-center'>
                    <img src="<?=$mainData['imagefeature']?>" class="tab-icon">
                    <p><?=$mainData['productname']?></p>
                </th>
                
                
                
            </thead>
            <tbody>
                <?php 
                    
                    
                    foreach ($template_spec as $ts) {
                ?>
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10 v-align-top'><?=$ts['display_name']?></td>
                    <td class='table-pad t-align-left fs-14 pd-10 v-align-top'>
                    <?php
                        
                        if ($spcjsn != '') {
                        
                        $node = $ts['spec_name'];
                        $first = true;
                        
                        foreach($spcjsn->$node->spec as $key=>$value){
                            if ($first) {
                                echo '<span class=specgroup>' . ucfirst($key) . ' : </span><br>' . ($key == 'harga' ? number_format($value, '0',',','.') : $value) ;
                                $first = false;
                            }else{
                                echo '<hr class=hr-spec><span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value;
                            }
                        }
                        }
                    ?>
                    </td>
                </tr>
                <?php } ?>
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
        if (sizeOf($reviewAhli) > 0) {
            foreach ($reviewAhli as $ahli) {
         ?>
        <div class='review-grid'>
            <div class="review-grid-pro-photo">
                <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                <p class="margin-0 color-white">Skor</p>
                <p class="margin-0 color-white">8.9</p>
            </div>
            <div class="review-grid-pro-comment fs-14">
                
                <p>
                    <?=(strlen($ahli['reviewcontent']) > 250 ? substr($ahli['reviewcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['reviewcontent']);?> 
                </p>
            </div>
        </div>
        <?php 
            } 
        }else{
            ?>
            <div class="card-komparase-blank t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Belum review dari ahli kami</div>
            </div>
        <?php
        } 
        
        ?>
        
    </div>
<!-- End of Review dari Ahli -->
 
<!--User Comment-->
    <div id="ahli-product-kom">
        <div class="header-blok">Opini Kostumer</div>
    </div>
    <div class="v-separator-30"></div>
    <div class="review-container">
        <?php 
        if (sizeOf($reviewUser) > 0) {
            foreach ($reviewUser as $ahli) {
         ?>
        <div class='review-grid'>
            <div class="review-grid-pro-photo">
                <img src="<?=($ahli['photo'] == '' ? base_url() . '/assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                <p class="margin-0 color-white">Skor</p>
                <p class="margin-0 color-white">8.9</p>
            </div>
            <div class="review-grid-pro-comment fs-14">
                <p>
                    <?=(strlen($ahli['commentcontent']) > 250 ? substr($ahli['commentcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['commentcontent']);?> 
                </p>
            </div>
        </div>
        <?php 
            } 
        }else{
            ?>
            <div class="card-komparase-blank t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Belum ada opini dari kostumer</div>
            </div>
        <?php
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
        if (sizeOf($productSerupa) > 0) {
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
        }else{
            ?>
            <div class="card-komparase border-none t-align-center">
                <div class="card-excerpt-komparase pd-5 fs-14">Tidak ada produk serupa</div>
            </div>
        <?php
        }
        ?>
    </div>
<!-- End of Produk Pilihan   -->
    
    <div class="kom-ads-300x250">
        <img class="border-1-grey" src="<?=base_url();?>assets/ads/300x250.gif">
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
        <img class="border-1-grey" src="<?=base_url();?>assets/ads/320x50.gif">
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
            <div class="card-img-komparase-artikel"><img src="<?=($pl['imagefeature'] == '' ? base_url() . 'assets/artikel/default_thumb.jpg' : $pl['imagefeature'] )?>"></div>
            <div class="card-date-komparase-artikel pd-5 fs-10"><?=indonesian_date($pl['intime'])?></div>
            <div class="card-excerpt-komparase-artikel pd-5 fs-14"><?=$pl['blogtittle']?></div>
            
            <div class="card-footer-komparase-artikel fs-10"><img src="<?=base_url();?>assets/images/comment.png"> <div class="comment-number">4</div></div>
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