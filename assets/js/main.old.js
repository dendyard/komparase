
var where = window.location.host;
var pathArray, mypage, home_artikel_offset = 5;
var statuswait = false;   

  if(where == 'localhost'){
      var base_url = window.location.protocol + "//" + window.location.host + "/komparase/";
      pathArray = window.location.pathname.split("/");
      //console.log(pathArray[2]);
      mypage = pathArray[2];
  }
  else{
      var base_url = window.location.protocol + "//" + window.location.host + "/";
      pathArray = window.location.pathname.split("/");
      //console.log(pathArray[1]);
      mypage = pathArray[1];
  }


var phoneid1='',phoneid2='',phoneid3='';

function searchOnBlur(tb_container){
    switch(tb_container) {
        case 'stable-1':
            document.getElementById('tbsrc2-container').style.display = 'none';
            document.getElementById('tbsrc3-container').style.display = 'none';
            break;
        case 'stable-2':
            document.getElementById('tbsrc1-container').style.display = 'none';
            document.getElementById('tbsrc3-container').style.display = 'none';
            break;
        case 'stable-3':
            document.getElementById('tbsrc2-container').style.display = 'none';
            document.getElementById('tbsrc1-container').style.display = 'none';
            break;
    }
    
}

function searchOnList(tbox_name, tb_name, rekom=false) {
  var tb_container, input, filter, table, tr, td, i, txtValue;
    
  input = document.getElementById(tbox_name);
  filter = input.value.toUpperCase();
  table = document.getElementById(tb_name);
  tr = table.getElementsByTagName("tr");
  
  switch(tb_name){
      case 'stable-1':
          tb_container = 'tbsrc1-container';
          phoneid1 = '';
          break;
      case 'stable-2':
          tb_container = 'tbsrc2-container';
          
          phoneid2 = '';
          break;
      case 'stable-3':
          tb_container = 'tbsrc3-container';
          
          phoneid3 = '';
          break;
  }
  
    
  if (input.value != '') {
      document.getElementById(tb_container).style.display = 'block';
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            
            if (td) {
              txtValue = td.textContent || td.innerText;
              
              //console.log(txtValue.toUpperCase().indexOf(filter));
                
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }else{
                //console.log('datane kosong');
            }
        }
  }else{
      document.getElementById(tb_container).style.display = 'none';
  }
}

function pickPhone(tbox_name, phone_pick, ls_img, phone_id){
    var indPck, tbselector, iconphoneselector;
    
    if (mypage == 'bandingkan') {
        phoneid1 = idphone1.value;
        phoneid2 = idphone2.value;
        phoneid3 = idphone3.value;
        document.getElementById('rekomparasi').style.display = 'block';
    }
    
    switch(tbox_name){
      case 'searchPhone1':
          tbselector = 'tbsrc1-container';
          iconphoneselector = 'iconPhoneSelect-1';
          phoneid1 = phone_id;
          break;
      case 'searchPhone2':
          tbselector = 'tbsrc2-container';
          iconphoneselector = 'iconPhoneSelect-2';    
          phoneid2 = phone_id;
          break;
      case 'searchPhone3':
          tbselector = 'tbsrc3-container';
          iconphoneselector = 'iconPhoneSelect-3';    
          phoneid3 = phone_id;       
          break;
    }
    
    document.getElementById(tbox_name).value = phone_pick;
    document.getElementById(tbselector).style.display = 'none';
    document.getElementById(iconphoneselector).src = ls_img;
}



if (mypage == 'bandingkan' || mypage == ''){
    get_smartphone_list2();
}


function get_smartphone_list2(){
    $.ajax({
        type: 'GET',
        url: base_url + 'komparase/get_product_list/5',
        dataType: 'json',
    }).done(function (smlist) {

        insertToTable('stable-1', 'searchPhone1', smlist);
        insertToTable('stable-2', 'searchPhone2', smlist);
        insertToTable('stable-3', 'searchPhone3', smlist);
        
    });
}


function insertToTable(tbltarget,txttarget,datatarget){
    var tablecontainer, listrow='';
        
    for (var i = 0; i<datatarget.length; i++ ){
       tablecontainer = document.getElementById(tbltarget); 
       tablecontainer.innerHTML += "<tr onclick='pickPhone(`" + txttarget + "`,`" + datatarget[i].productname + "`,`" + datatarget[i].imagefeature + "`,`" + datatarget[i].id + "`)'><td class='img-cell-searchbox'><img src='" + datatarget[i].imagefeature + "' class='searchOnList-icon'></td><td>" + datatarget[i].productname + "</td></tr>";
    }
}

function bandingkan_page(){
    var compareCheck = 0, phoneidparam = '';
    console.log(phoneid1);
    console.log(phoneid2);
    console.log(phoneid3);
    if (phoneid1 != '') {
        compareCheck += 1;
        phoneidparam += 'idpro1=' + phoneid1 + '&';
    }
    if (phoneid2 != '') {
        compareCheck += 1;
        phoneidparam += 'idpro2=' + phoneid2 + '&';
    }
    if (phoneid3 != '') {
        compareCheck += 1;
        phoneidparam += 'idpro3=' + phoneid3 + '&';
    }
    
    
    if (compareCheck >= 2) {
        window.open(base_url + 'bandingkan?kat=smartphone&' + phoneidparam.substr(0, phoneidparam.length -1), '_SELF');
    }
}


function bandingkan_single(idph){
    window.open(base_url + 'bandingkan?kat=smartphone&idpro1=' + idph, '_SELF');
}


function bandingkan_artikel(kat,idph){
    window.open(base_url + 'bandingkan?kat=' + kat + '&' + idph, '_SELF');
}


document.getElementById('searchbox').addEventListener('keydown', function(e){
    var searchkey = '';
    if (e.key === "Enter") {
        searchkey = e.target.value;
        
        if (searchkey.trim() != '') {
            console.log('You search something');
            window.open(base_url + 'cari?q=' + searchkey, '_SELF');
        } 
        e.preventDefault();
    }
});

function searchMain_komparase(e){
    if (e.keyCode == 13){
        
    }
}

function showSearchBox(){
    document.getElementById('float-search').style.display = 'block';
    document.getElementById('searchbox').focus();
}

function closeSearch(){
    document.getElementById('searchbox').value = '';
    document.getElementById('float-search').style.display = 'none';
}

function appendart(){
    document.getElementById('btn_more_art').style.display = 'none';
    statuswait = true;
    showwait();
    
    var startpage = document.getElementById('artpage').value;
    
    var div1='', div2='', imgfeature='', a_card='', uls='', slug = '', blogtittle='', blogexcerpt='', review='';
    
    
    a_card = '<a href="' + base_url + 'artikel/read/' + slug + '"  class="artikel-link"><div class="card-article-img"><img src="' + imgfeature + '"></div></a>';
    
    div2 = '<div class="card-article-content"><a href="' + base_url + 'artikel/read/' + slug + '" class="artikel-link"><div class="card-article-tittle pd-b-20 fw-500 fs-22">' + blogtittle + '</div><div class="card-article-body fs-14 hg-75">' + blogexcerpt + '</div></a><div class="tags">'  + uls + '</div><div class="card-article-footer"><div class="card-footer-komparase fs-10"><img src="'+ base_url + 'assets/images/comment.png"><div class="comment-number">' + review + '</div></div></div></div>';
    
    div1 = '<div class="card-article border-1-brown">' + a_card + div2 + '</div>';
    
    $.ajax({
        type: 'POST',
        url: base_url + 'ajaxrequest/get_artikel_more/' + home_artikel_offset,
        dataType: 'json'
    }).done(function (result_save) {
        console.log(home_artikel_offset);
        
        if (result_save.length > 0) {
            home_artikel_offset += 5;
            for (var i=0; i <= (result_save.length)-1; i++){
                    var tags = result_save[i]['tags'];
                    var tag = '';
                    var arrtag = tags.split(',');

                    for (var j = 0; j <= (arrtag.length-1); j++){
                        tag += '<li>' + arrtag[j] + '</li>'
                    }

                    uls = '<ul>' + tag + '</ul>';

                    a_card = '<a href="' + base_url + 'artikel/read/' + result_save[i]['slug'] + '"  class="artikel-link"><div class="card-article-img"><img src="' + showimage(result_save[i]['imagefeature']) + '"></div></a>';

                    div2 = '<div class="card-article-content"><a href="' + base_url + 'artikel/read/' + result_save[i]['slug'] + '" class="artikel-link"><div class="card-article-tittle pd-b-20 fw-500 fs-22">' + result_save[i]['blogtittle'] + '</div><div class="card-article-body fs-14 hg-75">' + result_save[i]['blogexcerpt'] + '</div></a><div class="tags">'  + uls + '</div><div class="card-article-footer"><div class="card-footer-komparase fs-10"><img src="'+ base_url + 'assets/images/comment.png"><div class="comment-number">' + result_save[i]['review'] + '</div></div></div></div>';

                    div1 = '<div class="card-article border-1-brown">' + a_card + div2 + '</div>';

                    document.getElementById("art-cards").insertAdjacentHTML("afterend", 
                        div1);         
                }
            document.getElementById('btn_more_art').style.display = 'block';
        }else{
            document.getElementById('btn_more_art').style.display = 'none';
        }
        
        
        statuswait = false;
        showwait(false);
    });
    
    function showimage(imgs){
        if (imgs == '' || imgs == null) {
            return base_url + 'assets/artikel/default_thumb.jpg';
        }else{
            return imgs;
        }
    }
    
    function showwait(sts=true){
          if (sts) {
              animations.style.display = 'block';
              TweenLite.to(bar1, 0, {scaleY:0, ease: Sine.easeOut});
              TweenLite.to(bar2, 0, {scaleY:0, ease: Sine.easeOut});
              TweenLite.to(bar3, 0, {scaleY:0, ease: Sine.easeOut});

              anim_raise();    
          }else{
              animations.style.display = 'none';
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
    
    
    
    
}

//console.log('ver 1.0')

