
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Add New Product Komparase.com</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin/js/inputmask.css" rel="stylesheet">
    
    <script src="<?=base_url()?>assets/admin/js/TweenMax.min.js"></script>
      
      
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/admin/css/form-validation.css" rel="stylesheet">
      
      <style>
          .collape-btn {
              width: 400px;
          }
          .greycolor {
              background-color: #f0f0f0;
          }
      </style>
  </head>
<?php 

//    $str = 'NDggTVAsIGYvMS43LCAyNW1tICh3aWRlKSwgMS8xLjQzIiwgMS4xMrVtLCBvbW5pZGlyZWN0aW9uYWwgUERBRiwgTGFzZXIgQUYsIE9JUzxicj4xMyBNUCwgZi8zLjAsIDEyOW1tIChwZXJpc2NvcGUgdGVsZXBob3RvKSwgMS8zLjQiLCAxLjC1bSwgNXggb3B0aWNhbCB6b29tLCBQREFGLCBPSVM8YnI+NDggTVAsIGYvMi4yLCAxN21tICh1bHRyYXdpZGUpLCAxLzIuMCIsIDAuOLVtLCBBRg==';
//    
//    
//    echo '<br>---------------<br>';
//    $decoded = base64_decode($str);
//    echo iconv("ISO-8859-1", "UTF-8", base64_decode($str));

?>
    
   
  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://komparase.com/assets/images/mainlogo.png" height="72">
        <h2>Product Form</h2>
        <p class="lead">Form input Product komparase.com, setiap Product yang masuk harus melalui approval Editor</p>
      </div>

      <div class="row">
        
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Tambah Produk Baru</h4>
          
            <div class="mb-3">
              <label for="address">Nama Produk</label>
              <input type="text" onchange='prdname()' class="form-control" id="productname" placeholder="" >
            </div>

            <div class="mb-3">
              <label for="address">Ringkasan Produk</label>
              <input type="text" class="form-control" id="excerptproduct" placeholder="" >
            </div>

            <div class="mb-3">
              <label for="address">URL Image</label>
              <input type="text" class="form-control" id="imagefeature" placeholder="Masukkan URL image" >
            </div>

            <div class="mb-3">
              <label for="address">Rating</label>
              <input type="text" class="form-control" id="rating" placeholder="" value='0' >
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Full Artikel</label>
                <textarea class="form-control" id="blogproduct" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="address">Tags</label>
              <input type="text" class="form-control" id="tags" value='smartphone,android,' placeholder="use comma as separator" >
            </div>
              
            <div class="mb-3">
              <label for="address">Harga (Rp)</label>
              <input type="text" onchange='hrgprod()' class="form-control text-left"  id="price" placeholder="" name="price" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': '', 'placeholder': ''">
            </div>
            
            
            <h4 class="mb-3">Spec Produk</h4>
            
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Brand 
                  </a>
                </p>
              <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <form>
                  <div class="row">
                  <div class="col">
                      Name    
                  </div>  
                  </div>
                  <div class="row">
                    <div class="col">
                      <input id="sp_name" type="text" class="form-control" placeholder="Nama produk/type">
                    </div>
                  </div>
                </form>
              </div>    
              </div>
            </div>
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_harga" role="button" aria-expanded="false" aria-controls="s_harga">
                    Harga
                  </a>
                </p>
              <div class="collapse" id="s_harga">
              <div class="card card-body">
                <form>
                  <div class="row">
                  <div class="col">
                      Harga    
                  </div>  
                  </div>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="harga produk" id='sp_harga' name="price" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': '', 'placeholder': ''">
                    </div>
                  </div>
                </form>
              </div>    
              </div>
            </div>
            
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_jaringan" role="button" aria-expanded="false" aria-controls="s_jaringan">
                    Jaringan
                  </a>
                </p>
              <div class="collapse" id="s_jaringan">
              <div class="card card-body">
                <form>
                  <div class="row">
                      <div class="col-lg-2">
                      Technology  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" value="GSM / HSPA / LTE" placeholder="" id='sp_tech'>  
                    </div>
                  </div>
                  <div class="row greycolor">
                      <div class="col-lg-2">
                      2G Bands  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands1'>  
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands2'>  
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands3'>  
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands4'>  
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands5'>  
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands6'>  
                      <input type="text" class="form-control" placeholder="" id='sp_2gbands7'>  
                        
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      3G Bands  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands1'> 
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands2'> 
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands3'> 
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands4'> 
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands5'> 
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands6'> 
                      <input type="text" class="form-control" placeholder="" id='sp_3gbands7'> 
                        
                    </div>
                  </div>
                  <div class="row greycolor">
                      <div class="col-lg-2">
                      4G Bands  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands1'>
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands2'>
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands3'>
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands4'>
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands5'>
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands6'>
                      <input type="text" class="form-control" placeholder="" id='sp_4gbands7'>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      5G Bands  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands1'>
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands2'>
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands3'>
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands4'>
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands5'>
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands6'>
                      <input type="text" class="form-control" placeholder="" id='sp_5gbands7'>
                        
                    </div>
                  </div>
                  <div class="row greycolor">
                      <div class="col-lg-2">
                      Speed
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_speed'>  
                    </div>
                  </div>
                    
                </form>
              </div>    
              </div>
            </div>
            
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_rilis" role="button" aria-expanded="false" aria-controls="s_rilis">
                    Rilis
                  </a>
                </p>
              <div class="collapse" id="s_rilis">
              <div class="card card-body">
                <form>
                  <div class="row">
                      <div class="col-lg-2">
                      Tanggal  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" id='sp_rilisdate' name="date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-inputmask-placeholder="DD/MM/YYYY">  
                    </div>
                  </div>  
                </form>
              </div>    
              </div>
            </div>
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_body" role="button" aria-expanded="false" aria-controls="s_body">
                    Body
                  </a>
                </p>
              <div class="collapse" id="s_body">
              <div class="card card-body">
                
                  <div class="row">
                      <div class="col-lg-2">
                      Dimensi  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control"  id='sp_dimensi'>  
                    </div>
                  </div>  
                 <div class="row">
                      <div class="col-lg-2">
                      Berat  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control"  id='sp_berat'>  
                    </div>
                  </div>  
                <div class="row">
                      <div class="col-lg-2">
                      Bahan  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control"  id='sp_bahan'>  
                    </div>
                  </div>  
                <div class="row greycolor">
                      <div class="col-lg-2">
                      SIM  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control"  id='sp_sim1'> 
                      <input type="text" class="form-control"  id='sp_sim2'> 
                        
                    </div>
                  </div>  
                
              </div>    
              </div>
            </div>
            
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_layar" role="button" aria-expanded="false" aria-controls="s_layar">
                    Layar
                  </a>
                </p>
              <div class="collapse" id="s_layar">
              <div class="card card-body">
                
                  <div class="row">
                      <div class="col-lg-2">
                      Type  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_type'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Ukuran  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_ukuran'>  
                    </div>
                  </div>  
                <div class="row">
                      <div class="col-lg-2">
                      Resolusi  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_resolusi1'>
                      <input type="text" class="form-control" placeholder="" id='sp_resolusi2'>
                      <input type="text" class="form-control" placeholder="" id='sp_resolusi3'>
                      <input type="text" class="form-control" placeholder="" id='sp_resolusi4'>
                      <input type="text" class="form-control" placeholder="" id='sp_resolusi5'>
                    </div>
                  </div>  
                <div class="row greycolor">
                      <div class="col-lg-2">
                      Proteksi  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_proteksi1'>  
                      <input type="text" class="form-control" placeholder="" id='sp_proteksi2'>  
                      <input type="text" class="form-control" placeholder="" id='sp_proteksi3'>  
                      <input type="text" class="form-control" placeholder="" id='sp_proteksi4'>  
                        
                    </div>
                  </div>  
                
              </div>    
              </div>
            </div>
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_platform" role="button" aria-expanded="false" aria-controls="s_platform">
                    Platform
                  </a>
                </p>
              <div class="collapse" id="s_platform">
              <div class="card card-body">
                
                  <div class="row">
                      <div class="col-lg-2">
                      OS  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_os'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Chipset  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_chipset'>  
                    </div>
                  </div>  
                <div class="row">
                      <div class="col-lg-2">
                      CPU  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_cpu'>  
                    </div>
                  </div>  
                <div class="row">
                      <div class="col-lg-2">
                      GPU  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_gpu'>  
                    </div>
                  </div>  
                
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_memory" role="button" aria-expanded="false" aria-controls="s_memory">
                    Memory
                  </a>
                </p>
              <div class="collapse" id="s_memory">
              <div class="card card-body">
                
                  <div class="row">
                      <div class="col-lg-2">
                      Card Slot  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_cardslot'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Internal  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_internal1'> 
                      <input type="text" class="form-control" placeholder="" id='sp_internal2'> 
                        
                    </div>
                  </div>  
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_maincamera" role="button" aria-expanded="false" aria-controls="s_maincamera">
                    Kamera Utama
                  </a>
                </p>
              <div class="collapse" id="s_maincamera">
              <div class="card card-body">
                
                  <div class="row greycolor">
                      <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="" id='sp_cam_type' value="Triple">  
                       
                          
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_cam_value1'>
                      <input type="text" class="form-control" placeholder="" id='sp_cam_value2'>
                      <input type="text" class="form-control" placeholder="" id='sp_cam_value3'>
                      <input type="text" class="form-control" placeholder="" id='sp_cam_value4'>
                      <input type="text" class="form-control" placeholder="" id='sp_cam_value5'>
                      
                        
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Features  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_features'>  
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      Video  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_video'>  
                    </div>
                  </div>  
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_selfie" role="button" aria-expanded="false" aria-controls="s_selfie">
                    Selfie Kamera
                  </a>
                </p>
              <div class="collapse" id="s_selfie">
              <div class="card card-body">
                  <div class="row greycolor">
                      <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="" id='sp_selfie_type' value="Single"> 
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_selfie_value1'>  
                      <input type="text" class="form-control" placeholder="" id='sp_selfie_value2'>  
                      <input type="text" class="form-control" placeholder="" id='sp_selfie_value3'>  
                        
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Features  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_selfie_feature'>  
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      Video  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_selfie_video'>  
                    </div>
                  </div>  
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_sound" role="button" aria-expanded="false" aria-controls="s_sound">
                    Sound
                  </a>
                </p>
              <div class="collapse" id="s_sound">
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-2">
                      Loud Speaker
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_loud_speaker'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      3.5mm jack  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_35_jack1'>
                      <input type="text" class="form-control" placeholder="" id='sp_35_jack2'>
                        
                    </div>
                  </div>
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_komunikasi" role="button" aria-expanded="false" aria-controls="s_komunikasi">
                    Komunikasi
                  </a>
                </p>
              <div class="collapse" id="s_komunikasi">
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-2">
                      WLAN
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_wlan'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Bluethooth
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_bluetooth'>  
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      GPS
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_gps'>  
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      NFC
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_NFC'>  
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      Infrared Port
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_infra'>  
                    </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-lg-2">
                      Radio
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_radio'>  
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2">
                      USB
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_usb'>  
                    </div>
                  </div>
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_fitur" role="button" aria-expanded="false" aria-controls="s_fitur">
                    Fitur
                  </a>
                </p>
              <div class="collapse" id="s_fitur">
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-2">
                      Sensors
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_sensor'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="Nama Fitur Tambahan" id='sp_fitur_tambahan_1'> 
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_fitur_tambahan_a_1'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="Nama Fitur Tambahan" id='sp_fitur_tambahan_2'> 
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_fitur_tambahan_a_2'>  
                    </div>
                  </div>  
                  
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_baterai" role="button" aria-expanded="false" aria-controls="s_baterai">
                    Baterai
                  </a>
                </p>
              <div class="collapse" id="s_baterai">
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-2">
                      Type
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_bat_type'>
                        
                    </div>
                  </div>  
                  <div class="row greycolor">
                      <div class="col-lg-2">
                      Charging
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_charging1'> 
                      <input type="text" class="form-control" placeholder="" id='sp_charging2'> 
                      <input type="text" class="form-control" placeholder="" id='sp_charging3'> 
                      <input type="text" class="form-control" placeholder="" id='sp_charging4'> 
                      <input type="text" class="form-control" placeholder="" id='sp_charging5'> 
                        
                    </div>
                  </div>  
                  
              </div>    
              </div>
            </div>
            <!--End-->
            <!--Start-->
            <div class="mb-3">
                <p>
                  <a class="btn btn-primary collape-btn" data-toggle="collapse" href="#s_lain" role="button" aria-expanded="false" aria-controls="s_lain">
                    Lain-Lain
                  </a>
                </p>
              <div class="collapse" id="s_lain">
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-2">
                      Warna
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_warna'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      Model
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_model'>  
                    </div>
                  </div>  
                   
                  <div class="row">
                      <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="lain-lain tambahan" id='sp_misc_1'>  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_misc_a_1'>  
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-lg-2">
                      <input type="text" class="form-control" placeholder="lain-lain tambahan" id='sp_misc_2'>  
                      </div> 
                    <div class="col-lg-9">
                      <input type="text" class="form-control" placeholder="" id='sp_misc_a_2'>  
                    </div>
                  </div>  
                  
              </div>    
              </div>
            </div>
            <!--End-->
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="button" onclick='submit_data()'>Submit Data</button>
          
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Komparase.com</p>
        
      </footer>

      </div>

    
      <style>

  #dimmerxx {
      width: 100%;
      height: 100%;
      background-color: rgb(0,0,0,0.9);
      position: fixed;
      z-index: 10;
      top: 0;
      display: none;
  }   

  #animations{
      left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    position: absolute;
    width: 160px;
      height: 100px;
  }
    
    #bar1{
        width: 50px;
        height: 100px;
        background-color: #c7b198;
        left:0px;
        position: absolute;
    }
    
    #bar2{
        width: 50px;
        height: 100px;
        background-color: #2d4059;
        left:55px;
        position: absolute;
    }
    
    #bar3{
        width: 50px;
        height: 100px;
        background-color: #ea5455;
        left:110px;
        position: absolute;
    }
    
    
</style>
<div id='dimmerxx'>
      <div id='animations'>
        <div id='bar1'></div>
        <div id='bar2'></div>
        <div id='bar3'></div>
          
      </div>
</div>
     
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="<?=base_url()?>assets/admin/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/holder.min.js"></script>
      
    <script src="<?=base_url()?>assets/admin/js/jquery-3.2.1.min.js"></script> 
    <script src="<?=base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script> 
    <script src="<?=base_url()?>assets/admin/js/material.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/jquery.inputmask.min.js"></script>  
    <script src="<?=base_url()?>assets/admin/js/jquery.inputmask.min.js"></script>  
    <script src="<?=base_url()?>assets/admin/default.js"></script>  
      
      
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
        
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
        
      $('input').inputmask();    
      var statuswait = false;    
      function prdname(){
        sp_name.value = productname.value;
      } 
        
      function hrgprod(){
        sp_harga.value = price.value;  
      }        
        
      function loop_textbox(idelm, totelm){
          var firstval = true;
          var loopres = '';
          var cleanstr = '';
          
          for (var i = 1; i <= totelm; i++){
              
              if (document.getElementById(idelm + i).value != ''){
                 if (firstval){
                    loopres = document.getElementById(idelm + i).value;
                    firstval = false;
                 }else{
                     loopres += "<hr>" + document.getElementById(idelm + i).value;
                 }
                     
              }
              
          }
          cleanstr = loopres.replaceAll('"','\\"');
          return cleanstr;
          
      }    
      function generate_spec(){
          
          var mform = '';
          var productname = '',excerptproduct = '',imagefeature = '',rating = '',blogproduct = '',tags = '',price = '';
          
          var specjson = '';
          var subjson = '';
          var sp_hrg = sp_harga.value;
          var g2bands = '';
          var g3bands = '';
          var g4bands = '';
          var g5bands = '';
          
          
          specjson = '"brand":{"spec":{"name":"' + document.getElementById('sp_name').value.replaceAll('"','\\"') + '"}}'; 
          specjson += ',"harga":{"spec":{"harga":"' + sp_hrg.replaceAll(',','')+ '"}}'; 
          
          subjson = '"Teknologi":"' + document.getElementById('sp_tech').value+ '",'; 
          
          g2bands = loop_textbox('sp_2gbands', 7);
          subjson += '"2G Bands":"' +  g2bands + '",';
          
          g3bands = loop_textbox('sp_3gbands', 7);
          subjson += '"3G Bands":"' + g3bands + '",';
          
          g4bands = loop_textbox('sp_4gbands', 7);
          subjson += '"4G Bands":"' + g4bands + '",';
          
          g5bands = loop_textbox('sp_5gbands', 7);
          subjson += '"5G Bands":"' + g5bands + '",';
          
          subjson += '"Speed":"' + document.getElementById('sp_speed').value+ '"';
          
          specjson += ',"jaringan":{"spec":{' + subjson + '}}'; 
          specjson += ',"rilis":{"spec":{"Tanggal":"' + document.getElementById('sp_rilisdate').value + '"}}'; 
          
          subjson = '';
          subjson = '"Dimensi":"' + document.getElementById('sp_dimensi').value+ '",'; 
          subjson += '"Berat":"' + document.getElementById('sp_berat').value+ '",';
          subjson += '"Bahan":"' + document.getElementById('sp_bahan').value+ '",';
          
          subjson += '"SIM":"' + loop_textbox('sp_sim', 2) + '"';
          
          specjson += ',"body":{"spec":{' + subjson + '}}'; 
   
          subjson = '';
          subjson = '"Type":"' + document.getElementById('sp_type').value+ '",'; 
          subjson += '"Ukuran":"' + document.getElementById('sp_ukuran').value+ '",';
          subjson += '"Resolusi":"' + loop_textbox('sp_resolusi', 5) + '",';
          subjson += '"Proteksi":"' + loop_textbox('sp_proteksi', 4) + '"';
          specjson += ',"layar":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson = '"OS":"' + document.getElementById('sp_os').value+ '",'; 
          subjson += '"Chipset":"' + document.getElementById('sp_chipset').value+ '",';
          subjson += '"CPU":"' + document.getElementById('sp_cpu').value+ '",';
          subjson += '"GPU":"' + document.getElementById('sp_gpu').value+ '"';
          specjson += ',"platform":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson += '"Card Slot":"' + document.getElementById('sp_cardslot').value+ '",';
          subjson += '"Internal":"' + loop_textbox('sp_internal', 2) + '"';
          specjson += ',"memory":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          if (sp_cam_type.value != ''){
            subjson += '"' + sp_cam_type.value+ '":"' + loop_textbox('sp_cam_value', 5) + '",';
          }
          
          subjson += '"Features":"' + document.getElementById('sp_features').value+ '",';
          subjson += '"Video":"' + document.getElementById('sp_video').value+ '"';
          specjson += ',"kamera-utama":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          if (sp_selfie_type.value != ''){
              subjson += '"' + document.getElementById('sp_selfie_type').value+ '":"' + loop_textbox('sp_selfie_value', 3) + '",';    
          }
          
          subjson += '"Features":"' + document.getElementById('sp_selfie_feature').value+ '",';
          subjson += '"Video":"' + document.getElementById('sp_selfie_video').value+ '"';
          specjson += ',"kamera-selfie":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson += '"Loud Speaker":"' + document.getElementById('sp_loud_speaker').value+ '",';
          subjson += '"3.5 mm Jack":"' + loop_textbox('sp_35_jack',2) + '"';
          specjson += ',"sound":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson += '"WLAN":"' + document.getElementById('sp_wlan').value+ '",';
          subjson += '"Bluetooth":"' + document.getElementById('sp_bluetooth').value+ '",';
          subjson += '"GPS":"' + document.getElementById('sp_gps').value+ '",';
          subjson += '"NFC":"' + document.getElementById('sp_NFC').value+ '",';
          subjson += '"Infrared Port":"' + document.getElementById('sp_infra').value+ '",';
          subjson += '"Radio":"' + document.getElementById('sp_radio').value+ '",';
          subjson += '"USB":"' + document.getElementById('sp_usb').value+ '"';
          specjson += ',"komunikasi":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson += '"Sensor":"' + document.getElementById('sp_sensor').value+ '"';
          if (sp_fitur_tambahan_1.value != ''){
             subjson += ',"' + sp_fitur_tambahan_1.value+ '":"' + document.getElementById('sp_fitur_tambahan_a_1').value+ '"';    
          }
          if (sp_fitur_tambahan_2.value != ''){
             subjson += ',"' + sp_fitur_tambahan_2.value + '":"' + document.getElementById('sp_fitur_tambahan_a_2').value+ '"';    
          }
          specjson += ',"fitur":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson += '"Type":"' + document.getElementById('sp_bat_type').value+ '",';
          subjson += '"Charging":"' + loop_textbox('sp_charging', 5) + '"';
          specjson += ',"baterai":{"spec":{' + subjson + '}}'; 
          
          subjson = '';
          subjson += '"Warna":"' + document.getElementById('sp_warna').value + '",';
          subjson += '"Model":"' + document.getElementById('sp_model').value + '"';
          if (sp_misc_1.value != ''){
             subjson += ',"' + sp_misc_1.value+ '":"' + document.getElementById('sp_misc_a_1').value + '"';    
          }
          if (sp_misc_2.value != ''){
             subjson += ',"' + sp_misc_2.value + '":"' + document.getElementById('sp_misc_a_2').value + '"';
          }
          specjson += ',"misc":{"spec":{' + subjson + '}}'; 
          
//          var signature = document.getElementById('productname').value);
//          var base64 = signature;
//          
          //document.getElementById('productname').value = "{" + specjson + "}";
          return "{" + specjson + "}";
          
      }    
      
      function generate_slug(){
          
          var pdn = document.getElementById('productname').value;
          var slug_gen = string_to_slug(pdn);
          var validatedslug = '';
          
            $.ajax({
				type: 'POST',
				url: base_url + 'gerbang/checkslug',
				dataType: 'json',
				data: {slug: slug_gen}
			}).done(function (result) {
			    if (result.status[0].slg > 0){
                    validatedslug = slug_gen + '-' + (Number(result.status[0].slg) + 1);
                }else{
                    validatedslug = slug_gen;
                }
                
			});
            return validatedslug;
          
      }
        
      
                    
      function string_to_slug(str) {
          str = str.replace(/^\s+|\s+$/g, ""); // trim
          str = str.toLowerCase();

          // remove accents, swap ñ for n, etc
          var from = "åàáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
          var to = "aaaaaaeeeeiiiioooouuuunc------";

          for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
          }

          str = str
            .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
            .replace(/\s+/g, "-") // collapse whitespace and replace by -
            .replace(/-+/g, "-") // collapse dashes
            .replace(/^-+/, "") // trim - from start of text
            .replace(/-+$/, ""); // trim - from end of text

          return str;
      }
        
      function submit_data(){
          
          var specvalid = generate_spec();
          
          var pdn = document.getElementById('productname').value;
          var slug_gen = string_to_slug(pdn);
          var validatedslug = '';
          var rilis_date_main = '';
          var res_date;
          
          var post_productname = document.getElementById('productname').value;
          var post_imagefeature = document.getElementById('imagefeature').value;
          var post_rating = document.getElementById('rating').value;
          var post_excerptproduct = document.getElementById('excerptproduct').value;
          var post_blogproduct = document.getElementById('blogproduct').value;
          var post_tags = document.getElementById('tags').value;
          var post_price = document.getElementById('price').value;
          
          rilis_date_main = document.getElementById('sp_rilisdate').value;
          res_date = rilis_date_main.split('/');
          //console.log(res_date[2] + '/' + res_date[1] + '/' + res_date[0]);
          //exit();
          statuswait = true;
          showwait();
          
          $.ajax({
				type: 'POST',
				url: base_url + 'gerbang/checkslug',
				dataType: 'json',
				data: {slug: slug_gen}
		  }).done(function (result) {
			    if (result.status[0].slg > 0){
                    validatedslug = slug_gen + '-' + (Number(result.status[0].slg) + 1);
                }else{
                    validatedslug = slug_gen;
                }
              
                $.ajax({
                    type: 'POST',
                    url: base_url + 'gerbang/savedata/add',
                    dataType: 'json',
                    data: {
                        productname: post_productname,
                        imagefeature: post_imagefeature,
                        rating: post_rating,
                        excerptproduct: post_excerptproduct,
                        blogproduct: post_blogproduct,
                        tags: post_tags,
                        price: post_price.replaceAll(',',''),
                        spec : specvalid,
                        slug: validatedslug,
                        rilisdate: res_date[2] + '/' + res_date[1] + '/' + res_date[0],
                    }
                }).done(function (result_save) {
                    statuswait = false;
                    showwait(false);
                    alert('Data Saved!');
                });
		  });
      }
        
      TweenLite.to(bar1, 0, {scaleY:0, ease: Sine.easeOut});
      TweenLite.to(bar2, 0, {scaleY:0, ease: Sine.easeOut});
      TweenLite.to(bar3, 0, {scaleY:0, ease: Sine.easeOut});  
        
      function showwait(sts=true){
          if (sts) {
              dimmerxx.style.display = 'block';
              TweenLite.to(bar1, 0, {scaleY:0, ease: Sine.easeOut});
              TweenLite.to(bar2, 0, {scaleY:0, ease: Sine.easeOut});
              TweenLite.to(bar3, 0, {scaleY:0, ease: Sine.easeOut});

              anim_raise();    
          }else{
              dimmerxx.style.display = 'none';
          }
      }
        
      function anim_raise(){
          if (statuswait) {
              TweenLite.to(bar1, 0.3, {scaleY:1, transformOrigin:"bottom", ease: Expo.easeOut, delay:0.1});
              TweenLite.to(bar2, 0.3, {scaleY:1, transformOrigin:"bottom", ease: Expo.easeOut, delay:0.2});
              TweenLite.to(bar3, 0.3, {scaleY:1, transformOrigin:"bottom", ease: Expo.easeOut, delay:0.3, onComplete:anim_fall});    
          }
      }
        
      function anim_fall(){
          if (statuswait) {
              TweenLite.to(bar1, 0.3, {scaleY:0, transformOrigin:"bottom", ease: Expo.easeIn, delay:0.1});
              TweenLite.to(bar2, 0.3, {scaleY:0, transformOrigin:"bottom", ease: Expo.easeIn, delay:0.2});
              TweenLite.to(bar3, 0.3, {scaleY:0, transformOrigin:"bottom", ease: Expo.easeIn, delay:0.3, onComplete:anim_raise});    
          }
      } 
      
    </script>

  </body>
</html>
