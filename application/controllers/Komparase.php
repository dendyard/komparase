<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komparase extends CI_Controller {

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
	
	public function index($kat='smartphone')
	{
        $mobile_dect = 'desktop';  
        $detect = new Mobile_Detect;
        
        if($detect->isMobile()) { 
            $mobile_dect = 'mobile';
        }
        
        
        $data = array (
            'productPilihan' => $this->Komparase_Model->get_product_pilihan($kat),
            'komparasiPilihan' => $this->Komparase_Model->get_komparasi_pilihan($kat),
            'artikelPilihan' => $this->Komparase_Model->get_artikel_pilihan($kat),
            'productTerbaru' => $this->Komparase_Model->get_product_terbaru($kat),
            'artikelPage' => '5'
        );
        
		$this->load->view('public/' . $mobile_dect . '/template/header', $data);
        $this->load->view('public/' . $mobile_dect . '/pages/home-page');
        $this->load->view('public/' . $mobile_dect . '/template/footer');
    }
    
    public function get_product_list($kat){
        header('Access-Control-Allow-Origin: *');
          
        $result = $this->Komparase_Model->get_product_list($kat);
        
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    
        
}