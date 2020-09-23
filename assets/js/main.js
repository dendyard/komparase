
var where = window.location.host;
var pathArray, mypage;

  if(where == 'localhost:8899'){
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
//get_smartphone_list();


function searchOnList(tbox_name, tb_name, rekom=false) {
  var tb_container, input, filter, table, tr, td, i, txtValue;
    
  input = document.getElementById(tbox_name);
  filter = input.value.toUpperCase();
  table = document.getElementById(tb_name);
  tr = table.getElementsByTagName("tr");
  
  switch(tb_name){
      case 'stable-1':
          tb_container = 'tbsrc1-container';
          document.getElementById('iconPhoneSelect-1').src = 'assets/images/blank-kom.png';
          phoneid1 = '';
          break;
      case 'stable-2':
          tb_container = 'tbsrc2-container';
          document.getElementById('iconPhoneSelect-2').src = 'assets/images/blank-kom.png';
          phoneid2 = '';
          break;
      case 'stable-3':
          tb_container = 'tbsrc3-container';
          document.getElementById('iconPhoneSelect-3').src = 'assets/images/blank-kom.png';
          phoneid3 = '';
          break;
  }
  
    
  if (input.value != '') {
      document.getElementById(tb_container).style.display = 'block';
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
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
        console.log('Hello enter');
    }
}

//console.log('ver 1.0')

