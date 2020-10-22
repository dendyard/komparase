<?php 

foreach ($imgfeature as $if){
    
  $newurl = 'https://komparase.com/assets/products/' . substr($if['imagefeature'], 36, strlen($if['imagefeature']));  
    
    //echo $if['id'] . ' ' . $if['imagefeature'] . '<br>';
  $sql = "UPDATE masterproduct SET imagefeature='" . $newurl . "' WHERE id=" . $if['id'];
  $this->db->query($sql);    
      
}
//$ur = 'https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-8-plus-new.jpg';




?>