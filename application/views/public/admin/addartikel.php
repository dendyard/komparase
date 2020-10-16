
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Add New Artikel Komparase.com</title>

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
   
  <body class="bg-light">
    
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://komparase.com/assets/images/mainlogo.png" height="72">
        <h2>Product Form</h2>
        <p class="lead">Form input Artikel komparase.com, setiap Artikel yang masuk harus melalui approval Editor</p>
      </div>

      <div class="row">
        
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Tambah Artikel Baru</h4>
          
            <div class="mb-3">
              <label for="address">Judul Artikel</label>
              <input type="text" class="form-control" id="productname" placeholder="" >
            </div>

            <div class="mb-3">
              <label for="address">Ringkasan Artikel</label>
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

            
            <div class="mb-3">
              <label for="address">Tags</label>
              <input type="text" class="form-control" id="tags" value='smartphone,android,' placeholder="use comma as separator" >
            </div>
            
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="art_choosen">
                <label class="form-check-label" for="exampleCheck1">Artikel Pilihan</label>
            </div>
            
            <div class="form-group my-4">
                <label for="exampleFormControlTextarea1">Full Artikel</label>
                <textarea class="form-control" id="blogproduct" rows="3"></textarea>
            </div>

            <button class="btn btn-primary btn-lg btn-block my-4" type="button" onclick='submit_data()'>Submit Data</button>
          
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
    <script src="<?=base_url()?>assets/admin/js/jquery.inputmask.min.js"></script> <script type="text/javascript" src="<?php echo base_url(); ?>plugin/tinymce/js/tinymce/tinymce.min.js"></script> 
    <script src="<?=base_url()?>assets/admin/js/jquery.inputmask.min.js"></script>  
    <script src="<?=base_url()?>assets/admin/default.js"></script>  
          
      
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
        
      tinymce.init({
		selector: '#blogproduct',
		height: 500,
		// menubar: false,
		plugins: [
			'advlist autolink lists link image charmap print preview anchor textcolor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code help wordcount'
		],
		toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
		content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//www.tinymce.com/css/codepen.min.css']
	});
        
        
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
        
      
      var statuswait = false;    
      
        
        
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
      
      
      function generate_slug(){
          
          var pdn = document.getElementById('productname').value;
          var slug_gen = string_to_slug(pdn);
          var validatedslug = '';
          
            $.ajax({
				type: 'POST',
				url: base_url + 'gerbang/checkslugblog',
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
        
      function submit_data_(){
          var post_choosen = document.getElementById('art_choosen').checked;
          post_choosen = post_choosen ? 1 : 0;
          
          alert(post_choosen);
          
      }    
      function submit_data(){
          
          
          var pdn = document.getElementById('productname').value;
          var slug_gen = string_to_slug(pdn);
          var validatedslug = '';
          var rilis_date_main = '';
          var res_date;
          
          var post_productname = document.getElementById('productname').value;
          
          var post_choosen = document.getElementById('art_choosen').checked;
          post_choosen = post_choosen ? 1 : 0;
          
          var post_imagefeature = document.getElementById('imagefeature').value;
          var post_rating = document.getElementById('rating').value;
          
          var post_excerptproduct = document.getElementById('excerptproduct').value;
          
          var post_tags = document.getElementById('tags').value;
          var post_blogproduct = tinymce.get('blogproduct').getContent();
          
          statuswait = true;
          showwait();
          
          $.ajax({
				type: 'POST',
				url: base_url + 'gerbang/checkslugblog',
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
                    url: base_url + 'gerbang/saveartikel/add',
                    dataType: 'json',
                    data: {
                        blogtittle: post_productname,
                        imagefeature: post_imagefeature,
                        rating: post_rating,
                        blogexcerpt: post_excerptproduct,
                        blogcontent: post_blogproduct,
                        choosenproduct : post_choosen,
                        tags: post_tags,
                        slug: validatedslug,
                    }
                }).done(function (result_save) {
                    console.log(result_save);
                    console.log(validatedslug);
                    console.log(post_blogproduct);
                    console.log(post_productname);
                    console.log(post_tags);
                    
                    statuswait = false;
                    showwait(false);
                    alert('Data Save =>' + result_save['status']);
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
