<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      

if ( ! function_exists('strCheck'))
{
    function strCheck($str){
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $str))
        {
            return true;
        }else {
            return false;
        }
    }
}

 
    
      
   
    
      
   
     
  
