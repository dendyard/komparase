<div class='main-bg-banner-1'></div>

    
<!--End of Ad Container 160x600 (Left & Right)-->
<div id='komparase-parent-body'>
    
    <div id='container-center'>
        
    <div id='container-left' class="sticky">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/160x600.jpg">
    </div>
    

    <div style="float:left;margin-right:20px;">  
    <h1 class="banner-h1">Discover more than 7 million comparisons</h1>
    <h2 class="banner-h2">Smartphone, Automotive, Cities, Books, Travels, Movies and many more...</h2>
    
    <div class="tab" id='tab-smartphone'>Smartphone</div>
    <div class="tab tab-blur" id='tab-auto' 
         onclick="bandingkan_single(<?=$mainData['id']?>)">Bandingkan</div>
    
    
    <div class="komparasi-tabs">
    
        <div class='product-single display-inline-block'>
            <div class="slide-image">
                <img src="<?=$mainData['imagefeature']?>" class="blank-kom-img">
                
            </div>
        </div>
        <div class='product-single-content display-inline-block'>
            <p class="product-single-tittle color-blue fs-30 pd-top-30">
                <?=$mainData['productname']?>
            </p>
            <?php $spcjsn = json_decode($mainData['spec']); ?>
            <p class="komparase-subtittle font-poppins">
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
                
            </p>
            <div class="produk-single-price font-poppins">
                <?='IDR ' . number_format($mainData['price'], '0',',','.')?>
            </div>
            
            <p class="komparase-subtittle font-poppins">
                
                    <span class="fw-500">Rating &amp; Review</span>
                    
                
            </p>
            <div class="rating-grid">
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

                    <div class="rating-review ">
                        <p class="margin-0 font-poppins fs-14"><img src='<?=base_url()?>assets/images/comment.png' class='review-bubble'> <?=sizeof($reviewAhli)?> Review</p>
                        <p class="margin-0 font-poppins fs-14"><img src='<?=base_url()?>assets/images/comment.png' class='review-bubble'> <?=sizeof($reviewUser)?> Komentar</p>
                    </div>


                </div>
            </div>
            
            
        </div>
        
    </div>

<div class="v-separator"></div>   

<!-- Komparasi Pilihan -->
    <?php
    if ($mainData['blogproduct'] != '') {
        
    ?>
    <div id='ringkasan-produk-section'>
      Tentang Produk
    </div>
    
    <div id='ringkasan-produk-content' class="pd-b-20">
        <span class="ringkasan-produk"><?=$mainData['productname']?></span>
        <p class="fs-14">
            <?=$mainData['blogproduct']?>
        </p>
        
        
    </div>
        <?php } ?>
<!-- End of Komparasi Pilihan   -->

<!--Spec Tech-->
    <div id="spec-product-kom">
        <table class="spec-pr table-spec-font">
            <thead>
                <th class='cw-tbl-spec-0 t-align-left pd-5 wd-200'>Spesifikasi Teknis</th>
                <th class='cw-tbl-spec-1 t-align-center'>
                    <img src="<?=$mainData['imagefeature']?>" class="tab-icon">
                    <p><?=$mainData['productname']?></p>
                </th>
                
            </thead>
            <tbody>
                <?php 
                    
                     
                      //echo $mainData['spec'];        
                
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
                                echo '<span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value ;
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
<div class="v-separator"></div>    
<!--Review dari Ahli Section-->
    <div id="ahli-product-kom">
        <div class="header-blok">Review dari Ahli</div>
    </div>
    <div class="v-separator-30"></div>
    
    <?php 
    if (sizeof($reviewAhli) > 0) {
    foreach ($reviewAhli as $ra) {
    ?>
    <div class='review-grid'>
        <div class="review-grid-pro-photo">
            <img src="<?=($ra['photo'] <> '' ? $ra['photo'] : base_url() . "assets/images/default-avatar.jpg")?>" />
            <p class="margin-0 color-white">Skor</p>
            <p class="margin-0 color-white"><?=$ra['skor']?></p>
        </div>
        <div class="review-grid-pro-comment fs-14">
            <?=(strlen($ra['reviewcontent']) > 350 ? substr($ra['reviewcontent'],0,350) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ra['reviewcontent']);?>       
        </div>
    </div>
    <?php 
    } 
    }else{
        ?>
        
        <div class='review-grid'>
            <div class="review-grid-pro-comment fs-14 ">
                Belum ada review dari Ahli kami
            </div>
        </div>
        
        <?php
    }    
        ?>
    
    
    
<!--End of Review dari Ahli Section-->
<div class="v-separator"></div> 

<!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/728x90.gif">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->

    <div class="v-separator"></div>    
<!--Customer Review-->
    <div id="ahli-product-kom">
        <div class="header-blok">Opini Kustomer</div>
    </div>
    <div class="v-separator-30"></div>
    <?php 
    if (sizeof($reviewUser) > 0) {
    foreach ($reviewUser as $ra) {
    ?>
    <div class='review-grid'>
        <div class="review-grid-pro-photo">
            <img src="<?=($ra['photo'] <> '' ? $ra['photo'] : base_url() . "assets/images/default-avatar.jpg")?>" />
            <p class="margin-0 color-white">Skor</p>
            <p class="margin-0 color-white"><?=$ra['skor']?></p>
        </div>
        <div class="review-grid-pro-comment fs-14">
            <?=(strlen($ra['commentcontent']) > 350 ? substr($ra['commentcontent'],0,350) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ra['commentcontent']);?>       
        </div>
    </div>
    <?php 
    } 
    }else{
        ?>
        
        <div class='review-grid'>
            <div class="review-grid-pro-comment fs-14 ">
                Belum ada opini dari kostumer
            </div>
        </div>
        
        <?php
    }    
        ?>
    
<!--End of Customer Review -->

<!-- Beri Penilaian -->
    <div id="ahli-product-kom">
        <div class="header-blok">Beri penilaian tentang produk ini</div>
    </div>
    <div class="v-separator-30"></div>
    
    <div class="smily-rating">
        <ul>
            <li><a href=#><img src='<?=base_url()?>assets/images/emoji/star1.svg' class="emoji"></a></li>
            <li><a href=#><img src='<?=base_url()?>assets/images/emoji/star2.svg' class="emoji"></a></li>
            <li><a href=#><img src='<?=base_url()?>assets/images/emoji/star3.svg' class="emoji"></a></li>
            <li><a href=#><img src='<?=base_url()?>assets/images/emoji/star4.svg' class="emoji"></a></li>
            <li><a href=#><img src='<?=base_url()?>assets/images/emoji/star5.svg' class="emoji"></a></li>
            
        </ul>
    </div>
    
    <div class="v-separator"></div> 
<!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="<?=base_url()?>assets/ads/970x250.jpg">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->
    
<!-- Produk Serupa -->
    <div id='product-populer-section'>
      Produk Serupa
    </div>
    
    <div id='produk-populer-slide-container'>
        <?php 
            foreach ($productSerupa as $pl) {
        ?>
        <div class="card-komparase border-none t-align-center">
            <a href="<?=base_url() . 'produk/read/' . $pl['slug']?>">
            <div class="card-img-komparase-product"><img src="<?=$pl['imagefeature']?>"></div>
            <div class="card-date-komparase pd-5 fs-10"></div>
            <div class="card-excerpt-komparase pd-5 fs-14"><?=$pl['productname']?></div>
            </a>                
        </div>
        <?php } ?>
        
    </div>
<!-- End of Produk Serupa   -->

    
    

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