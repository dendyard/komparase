var where = window.location.host;
var pathArray, mypage;
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