<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		
        $this->load->model('Komparase_Model');
	}
	
	public function index($kat = 'smartphone')
	{
            $mobile_dect = 'desktop';  
            $detect = new Mobile_Detect;

            if($detect->isMobile()) { 
                $mobile_dect = 'mobile';
            }
        
			$this->load->view('public/' . $mobile_dect . '/template/header');
        	$this->load->view('public/' . $mobile_dect . '/pages/blog-page');
        	$this->load->view('public/' . $mobile_dect . '/template/footer');
    }
    
    public function read($slug) {
            $mobile_dect = 'desktop';  
            $detect = new Mobile_Detect;

            if($detect->isMobile()) { 
                $mobile_dect = 'mobile';
            }
        
            $kat = 'smartphone';
        
            $main = $this->Komparase_Model->get_product_main($slug);
            $blog_art = $this->Komparase_Model->get_artikel_full($slug);
            $tags = explode(',',$blog_art['tags']);
            $liketags = '';
        
            foreach ($tags as $tag) {
                $liketags .= "tags LIKE '%" . $tag . "%' OR ";
            }
        
            if (strlen($liketags) > 0){
                $liketags = substr($liketags, 0, (strlen($liketags) - 4));    
            }
            
        
            $data = array (
                'blog' => $blog_art,
                'artikelPilihan' => $this->Komparase_Model->get_artikel_pilihan($kat, $slug, $liketags),
            );
    		
			$this->load->view('public/' . $mobile_dect . '/template/header', $data);
        	$this->load->view('public/' . $mobile_dect . '/pages/blog-page');
        	$this->load->view('public/' . $mobile_dect . '/template/footer');
    }
    
    
}