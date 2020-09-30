<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

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
	
	public function index()
	{
            $mobile_dect = 'desktop';  
            $detect = new Mobile_Detect;

            if($detect->isMobile()) { 
                $mobile_dect = 'mobile';
            }
    		
			$this->load->view('public/' . $mobile_dect . '/template/header');
        	$this->load->view('public/' . $mobile_dect . '/pages/single-page');
        	$this->load->view('public/' . $mobile_dect . '/template/footer');
    }
    
    
    
    public function read($slug='') {
        
            $mobile_dect = 'desktop';  
            $detect = new Mobile_Detect;

            if($detect->isMobile()) { 
                $mobile_dect = 'mobile';
            }
        
            if (strlen($slug) == '') { redirect('/', 'refresh'); }
            $kat = 'smartphone';
        
            $main = $this->Komparase_Model->get_product_main($slug);
            
            if ($main != '') {
                $data = array (
                    'mainData' => $main,
                    'reviewAhli' => $this->Komparase_Model->get_review_ahli('product', $main['id'], '4'),
                    'reviewUser' => $this->Komparase_Model->get_review_user('product', $main['id'], '4'),
                    'productSerupa' => $this->Komparase_Model->get_product_serupa($kat, $main['id']),
                    'komparasiPilihan' => $this->Komparase_Model->get_komparasi_pilihan($kat),
                    'artikelPilihan' => $this->Komparase_Model->get_artikel_pilihan($kat),
                    'template_spec' => $this->Komparase_Model->get_product_spec_template($kat)

                );
                $this->Komparase_Model->counter_product_read($main['id']);
                
                $this->load->view('public/' . $mobile_dect . '/template/header', $data);
                $this->load->view('public/' . $mobile_dect . '/pages/single-page');
                $this->load->view('public/' . $mobile_dect . '/template/footer');  
                
            }
    }
    
    
}