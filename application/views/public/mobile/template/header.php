<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Komparase.com</title>    
<link rel="icon" type="image/png" sizes="20x20" href="<?=base_url()?>favicon2.ico">

<meta name="msapplication-TileColor" content="#c7b198">
<meta name="theme-color" content="#c7b198">
<meta name="msapplication-TileImage" content="<?=base_url()?>favicon2.ico">
    

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&display=swap" rel="stylesheet">
<link href="<?=base_url()?>assets/css/main-mobile.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/general.css" rel="stylesheet">
    
    
</head>
<body>
<div id='float-search'>
    <input placeholder="Cari artikel/produk favorit kamu"
                                 type="text" class="search-main" id='searchbox' onfocusout="closeSearch()">
</div>
<div id='main'>
    <div id='main-logo'>
        <a href='<?=base_url()?>'><img src="<?=base_url()?>assets/images/mainlogo.png"></a>
    </div>
    <div id='main-search'>
         <img src="<?=base_url()?>assets/images/loop-brown.png" onclick='showSearchBox()' class="search-icon" />
         
    </div>
</div>
    

<nav id='main-menu' class="main-menu">
    <div class="menu-container">
        
        <ul>
            <li>Kategori</li>
            <li>Produk Populer</li>
            <li>Review</li>
            <li>Komparasi Populer</li>
            <li>Video</li>
            <li>Official Store</li>
            <li>Kontak Kami</li>
        </ul>

    </div>
</nav>