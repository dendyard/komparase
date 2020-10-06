<div class='main-bg-banner-1'></div>

    
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
<!--
    <div class="tab tab-blur" id='tab-auto'>Automotive</div>
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
                
                <input type="text" onfocus="searchOnBlur('stable-1')" onkeyup="searchOnList('searchPhone1', 'stable-1')" id='searchPhone1' value="<?=(sizeOf($prod1) > 0 ? $prod1['productname']:'')?>">
            </div>
            <img src="assets/images/loop-<?=(sizeOf($prod1)  > 0 ? 'white':'brown')?>.png" class="col-kom-search-icon" />
            <div class="col-kom-info">
                <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
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
            </div>
            <?php 
                if (sizeOf($prod1)  > 0) {    
            ?>
            <div class="price-kom">
                <?='IDR ' . number_format($prod1['price'], '0',',','.')?>
            </div>
            <?php } ?>
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
                <input type="text" onfocus="searchOnBlur('stable-2')" onkeyup="searchOnList('searchPhone2', 'stable-2')" id='searchPhone2' value="<?=(sizeOf($prod2) > 0 ? $prod2['productname']:'')?>">
            </div>
            <img src="assets/images/loop-<?=(sizeOf($prod1) > 0? 'white':'brown')?>.png" class="col-kom-search-icon" />
            <div class="col-kom-info">
            <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
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
                
            </div>
        
            <?php 
                if (sizeOf($prod2) > 0) {    
            ?>
            <div class="price-kom">
                <?='IDR ' . number_format($prod2['price'], '0',',','.')?>
            </div>
            <?php } ?>
        </div>
        <div class="col-tab">
        <div class="col-kom-tittle">Bandingkan dengan :</div>
            <?php 
                if (sizeOf($prod3) > 0) {
                    echo '<div class="col-kom-search-box active-search-box">';
                }else{
                    echo '<div class="col-kom-search-box">';
                }
            ?>
            
            <input type="text" onfocus="searchOnBlur('stable-3')"  onkeyup="searchOnList('searchPhone3', 'stable-3')" value="<?=(sizeOf($prod3) > 0 ? $prod3['productname']:'')?>" id='searchPhone3' >
            </div>
            
            <img src="assets/images/loop-<?=(sizeOf($prod3) > 0 ? 'white':'brown')?>.png" class="col-kom-search-icon" />
            <div class="col-kom-info">
            <span class="info">i</span> Masukkan Merk/Model Smartphone
            </div>
            <div class="col-content">
                <?php
                if (sizeOf($prod3) > 0) {
                    echo '<a href=' . base_url().'produk/read/'.$prod3['slug'] . '>';    
                }
            
                ?>
                <img id='iconPhoneSelect-3' src="<?=(sizeOf($prod3) > 0 ? $prod3['imagefeature']:'assets/images/blank-kom.png')?>" class="blank-kom-img">
                <?php
                if (sizeOf($prod3) > 0) {
                    echo '</a>';
                }
                ?>
            </div>
            <?php 
                if (sizeOf($prod3) > 0) {    
            ?>
            <div class="price-kom">
                <?='IDR ' . number_format($prod3['price'], '0',',','.')?>
            </div>
            <?php } ?>
        </div>
        <button class="rekomp-button" id='rekomparasi' onclick='bandingkan_page()'>Komparasi Ulang</button>
    </div>



<!-- Komparasi Pilihan -->
    <input type="hidden" id='idphone1' value="<?=(sizeOf($prod1) > 0 ? $prod1['id'] : '')?>">
    <input type="hidden" id='idphone2' value="<?=(sizeOf($prod2) > 0 ? $prod2['id'] : '')?>">
    <input type="hidden" id='idphone3' value="<?=(sizeOf($prod3) > 0 ? $prod3['id'] : '')?>">

    <?php 
    
        if ($prod1['excerptproduct'] == '' && 
            $prod2['excerptproduct'] == '' && 
            $prod3['excerptproduct'] == '') {
    
        }else{
    ?>
    
    <div id='ringkasan-produk-section'>
      Ringkasan Produk
    </div>
    
    <div id='ringkasan-produk-content' class="pd-b-20">
        
        <?php 
               
           if (sizeOf($prod1) > 0) {    
                if ($prod1['excerptproduct'] <> ''){
                    echo '<span class="ringkasan-produk">' . $prod1['productname'] . '</span>';
                    echo '<p class="fs-14">' . $prod1['excerptproduct'] . '</p>';    
                }
                
           }
        ?>
        <?php 
           if (sizeOf($prod2) > 0) {
               if ($prod2['excerptproduct'] <> ''){
                    echo '<span class="ringkasan-produk">' . $prod2['productname'] . '</span>';
                    echo '<p class="fs-14">' . $prod2['excerptproduct'] . '</p>';
               }
           }
        ?>
        <?php 
           if (sizeOf($prod3) > 0) {
               if ($prod3['excerptproduct'] <> ''){
                    echo '<span class="ringkasan-produk">' . $prod3['productname'] . '</span>';
                    echo '<p class="fs-14">' . $prod3['excerptproduct'] . '</p>';
               }
           }
        ?>
        
    </div>
    <?php } ?>
<!-- End of Komparasi Pilihan   -->

<!--Spec Tech-->
    <div id="spec-product-kom">
        <table class="spec-pr">
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
                <th class='cw-tbl-spec-1 t-align-center'>
                    <?php 
                        if (sizeOf($prod3)) {    
                            echo '<img src="' . $prod3['imagefeature'] . '" class="tab-icon">';
                            echo '<p>' . $prod3['productname'] . '</p>';
                       }
                    ?>
                </th>
                
            </thead>
            <tbody>
                <?php 
                if (sizeOf($prod1)) { $projsn1 = json_decode($prod1['spec']); }
                if (sizeOf($prod2)) { $projsn2 = json_decode($prod2['spec']); }
                if (sizeOf($prod3)) { $projsn3 = json_decode($prod3['spec']); }
                
                foreach ($template_spec as $ts) { 
                
                ?>
                <tr>
                    <td class='table-pad t-align-left fs-14 pd-10 v-align-top'><?=$ts['display_name']?></td>
                    <td class='t-align-left fs-14 pd-10 v-align-top'>
                        <?php 
                            if (sizeOf($prod1)) {
                            if ($projsn1 != '') {
                                
                                $node = $ts['spec_name'];
                                $first = true;

                                foreach($projsn1->$node->spec as $key=>$value){
                                    if ($first) {
                                        echo '<span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value ;
                                        $first = false;
                                    }else{
                                        echo '<hr class=hr-spec><span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value;
                                    }
                                }
                    
                            }
                            }
                        ?>
                    </td>
                    <td class='t-align-left fs-14 pd-10 v-align-top'>
                    <?php 
                        if (sizeOf($prod2)) {
                            if ($projsn2 != '') {
                                
                                $node = $ts['spec_name'];
                                $first = true;

                                foreach($projsn2->$node->spec as $key=>$value){
                                    if ($first) {
                                        echo '<span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value ;
                                        $first = false;
                                    }else{
                                        echo '<hr class=hr-spec><span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value;
                                    }
                                }
                    
                            }
                        }
                        ?>
                        
                    </td>
                    <td class='t-align-left fs-14 pd-10 v-align-top'>
                    <?php 
                        if (sizeOf($prod3)) {
                            if ($projsn3 != '') {
                                
                                $node = $ts['spec_name'];
                                $first = true;

                                foreach($projsn3->$node->spec as $key=>$value){
                                    if ($first) {
                                        echo '<span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value ;
                                        $first = false;
                                    }else{
                                        echo '<hr class=hr-spec><span class=specgroup>' . ucfirst($key) . ' : </span><br>' . $value;
                                    }
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
    <div id='pro-ahli-1' class='col-grid-3'>
        <?php if (sizeOf($prod1) > 0) { ?>
            <div class="pro-ico">
                <img src="<?=$prod1['imagefeature']?>" class="small-pro-icon">
                <span class="span-pro-ico"><?=$prod1['productname']?></span>
            </div>
        
        <?php 
            
            if (sizeOf($reviewahli1) > 0) {
                
                foreach ($reviewahli1 as $ahli) {
                ?>
                <div class="exp-review mt-10">
                    <div class="pro-pic display-inline-block">
                        <img src="<?=$ahli['photo']?>" />
                        <p class="margin-0 color-white">Skor</p>
                        <p class="margin-0 color-white">8.9</p>
                    </div>
                    <div class="pro-content display-inline-block fs-14">
                        <?=(strlen($ahli['reviewcontent']) > 250 ? substr($ahli['reviewcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['reviewcontent']);?>     
                    </div>
                </div>
                <?php 
                }
            }else{
            ?>
                <div class="exp-review mt-10">
                    <div class="pro-content display-inline-block fs-14">
                    Belum ada review dari Ahli kami
                    </div>
                </div>
            <?php
            }
            ?>
        <?php 
        
            }
        
        ?>
    </div>
    <div id='pro-ahli-2' class='col-grid-3'>
        <?php if (sizeOf($prod2) > 0) { ?>
            <div class="pro-ico">
                <img src="<?=$prod2['imagefeature']?>" class="small-pro-icon">
                <span class="span-pro-ico"><?=$prod2['productname']?></span>
            </div>
        
        <?php 
            
                                      
            if (sizeOf($reviewahli2) > 0) {
                
                foreach ($reviewahli2 as $ahli) {
                ?>
                <div class="exp-review mt-10">
                    <div class="pro-pic display-inline-block">
                        <img src="<?=$ahli['photo']?>" />
                        <p class="margin-0 color-white">Skor</p>
                        <p class="margin-0 color-white">8.9</p>
                    </div>
                    <div class="pro-content display-inline-block fs-14">
                        <?=(strlen($ahli['reviewcontent']) > 250 ? substr($ahli['reviewcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['reviewcontent']);?>     
                    </div>
                </div>
                <?php 
                }
            }else{
            ?>
                <div class="exp-review mt-10">
                    <div class="pro-content display-inline-block fs-14">
                    Belum ada review dari Ahli kami
                    </div>
                </div>
            <?php
            }
            ?>
        <?php 
        
            }
        
        ?>
    </div>
    <div id='pro-ahli-3' class='col-grid-3'>
          <?php if (sizeOf($prod3) > 0) { ?>
            <div class="pro-ico">
                <img src="<?=$prod3['imagefeature']?>" class="small-pro-icon">
                <span class="span-pro-ico"><?=$prod3['productname']?></span>
            </div>
        
        <?php 
            
            if (sizeOf($reviewahli3) > 0) {
                
                foreach ($reviewahli3 as $ahli) {
                ?>
                <div class="exp-review mt-10">
                    <div class="pro-pic display-inline-block">
                        <img src="<?=$ahli['photo']?>" />
                        <p class="margin-0 color-white">Skor</p>
                        <p class="margin-0 color-white">8.9</p>
                    </div>
                    <div class="pro-content display-inline-block fs-14">
                        <?=(strlen($ahli['reviewcontent']) > 250 ? substr($ahli['reviewcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['reviewcontent']);?>     
                    </div>
                </div>
                <?php 
                }
            }else{
            ?>
                <div class="exp-review mt-10">
                    <div class="pro-content display-inline-block fs-14">
                    Belum ada review dari Ahli kami
                    </div>
                </div>
            <?php
            }
            ?>
        <?php 
        
            }
        
        ?>
    </div>
    
<!--End of Review dari Ahli Section-->
    <div class="v-separator"></div> 



<!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="assets/ads/728x90.gif">
    </div>
<!--End of Ad Container 970x250 (Billboard)-->

    <div class="v-separator"></div>    
<!--Customer Review-->
    <div id="ahli-product-kom">
        <div class="header-blok">Opini Kustomer</div>
    </div>
    <div class="v-separator-30"></div>
<!---->
    <div class='comuser col-grid-3'>
        <?php if (sizeOf($prod1) > 0) { ?>
            <div class="pro-ico">
                <img src="<?=$prod1['imagefeature']?>" class="small-pro-icon">
                <span class="span-pro-ico"><?=$prod1['productname']?></span>
            </div>
        
        <?php 
            
            if (sizeOf($comment1) > 0) {
                
                foreach ($comment1 as $ahli) {
                ?>
                <div class="exp-review mt-10">
                    <div class="pro-pic display-inline-block">
                        <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                        <p class="margin-0 color-white">Skor</p>
                        <p class="margin-0 color-white">8.9</p>
                    </div>
                    <div class="pro-content display-inline-block fs-14">
                        <?=(strlen($ahli['commentcontent']) > 250 ? substr($ahli['commentcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['commentcontent']);?>     
                    </div>
                </div>
                <?php 
                }
            }else{
            ?>
                <div class="exp-review mt-10">
                    <div class="pro-content display-inline-block fs-14">
                    Belum ada opini dari kostumer
                    </div>
                </div>
            <?php
            }
            ?>
        <?php 
        
            }
        
        ?>
    </div>
<!---->
    <!---->
    <div class='comuser col-grid-3'>
        <?php if (sizeOf($prod2) > 0) { ?>
            <div class="pro-ico">
                <img src="<?=$prod2['imagefeature']?>" class="small-pro-icon">
                <span class="span-pro-ico"><?=$prod2['productname']?></span>
            </div>
        
        <?php 
            
            if (sizeOf($comment2) > 0) {
                
                foreach ($comment2 as $ahli) {
                ?>
                <div class="exp-review mt-10">
                    <div class="pro-pic display-inline-block">
                        <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                        <p class="margin-0 color-white">Skor</p>
                        <p class="margin-0 color-white">8.9</p>
                    </div>
                    <div class="pro-content display-inline-block fs-14">
                        <?=(strlen($ahli['commentcontent']) > 250 ? substr($ahli['commentcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['commentcontent']);?>     
                    </div>
                </div>
                <?php 
                }
            }else{
            ?>
                <div class="exp-review mt-10">
                    <div class="pro-content display-inline-block fs-14">
                    Belum ada opini dari kostumer
                    </div>
                </div>
            <?php
            }
            ?>
        <?php 
        
            }
        
        ?>
    </div>
<!---->
<!---->
    <div class='comuser col-grid-3'>
        <?php if (sizeOf($prod3) > 0) { ?>
            <div class="pro-ico">
                <img src="<?=$prod3['imagefeature']?>" class="small-pro-icon">
                <span class="span-pro-ico"><?=$prod3['productname']?></span>
            </div>
        
        <?php 
            
            if (sizeOf($comment3) > 0) {
                
                foreach ($comment3 as $ahli) {
                ?>
                <div class="exp-review mt-10">
                    <div class="pro-pic display-inline-block">
                        <img src="<?=($ahli['photo'] == '' ? 'assets/images/default-avatar.jpg': $ahli['photo'])?>" />
                        <p class="margin-0 color-white">Skor</p>
                        <p class="margin-0 color-white">8.9</p>
                    </div>
                    <div class="pro-content display-inline-block fs-14">
                        <?=(strlen($ahli['commentcontent']) > 250 ? substr($ahli['commentcontent'],0,250) . '... <br><a href="#" class="link-read-more">Baca selengkapnya</a>' : $ahli['commentcontent']);?>     
                    </div>
                </div>
                <?php 
                }
            }else{
            ?>
                <div class="exp-review mt-10">
                    <div class="pro-content display-inline-block fs-14">
                    Belum ada opini dari kostumer
                    </div>
                </div>
            <?php
            }
            ?>
        <?php 
        
            }
        
        ?>
    </div>
<!---->

    
<!--End of Customer Review -->
    <div class="v-separator"></div> 
<!--Ad Container 970x250 (Billboard)-->
    <div class="kom-ads-970x250">
        <img class="border-1-grey" src="assets/ads/970x250.jpg">
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
            <div class="card-article-img"><img src="<?=$pl['imagefeature']?>"></div>
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
