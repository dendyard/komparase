<?php 

foreach ($imgfeature as $if){
    
  $newurl = 'https://komparase.com/assets/products/' . substr($if['imagefeature'], 36, strlen($if['imagefeature']));  
    
  $sql = "UPDATE masterproduct SET tem_img_feature='" . $newurl . "' WHERE id=" . $if['id'];
  $this->db->query($sql);    
      
}
//$ur = 'https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-8-plus-new.jpg';




?>