<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bandingkan extends CI_Controller {

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
        
        $idProduk1  = $this->input->get('idpro1');
		$idProduk2 	= $this->input->get('idpro2');
        $idProduk3 	= $this->input->get('idpro3');
        
        $kat 	    = 'smartphone';
        
        $komperitem = 0;
        
        if ($this->input->get('idpro1')) { $komperitem++; }
        if ($this->input->get('idpro2')) { $komperitem++; }
        if ($this->input->get('idpro3')) { $komperitem++; }
        
        if ($komperitem <= 0) { redirect('/', 'refresh'); }
        
        if (strlen($idProduk1) <> '') {
            if (strCheck($idProduk1) || !is_numeric($idProduk1)) {redirect('/', 'refresh');}    
        }
        if (strlen($idProduk2) <> '') {
            if (strCheck($idProduk2) || !is_numeric($idProduk2)) {redirect('/', 'refresh');}    
        }
        if (strlen($idProduk3) <> '') {
            if (strCheck($idProduk3) || !is_numeric($idProduk3)) {redirect('/', 'refresh');}    
        }
        
            $data = array (
                'prod1' => ($idProduk1 <> '' ? $this->Komparase_Model->get_product_detail($kat, $idProduk1) : array()),
                'prod2' => ($idProduk2 <> '' ? $this->Komparase_Model->get_product_detail($kat, $idProduk2) : array()),
                'prod3' => ($idProduk3 <> '' ? $this->Komparase_Model->get_product_detail($kat, $idProduk3) : array()),
                'reviewahli1' =>($idProduk1 <> '' ? $this->Komparase_Model->get_review_ahli('product', $idProduk1) : array()),
                'reviewahli2' =>($idProduk2 <> '' ? $this->Komparase_Model->get_review_ahli('product', $idProduk2) : array()),
                'reviewahli3' =>($idProduk3 <> '' ? $this->Komparase_Model->get_review_ahli('product', $idProduk3) : array()),
                'comment1' =>($idProduk1 <> '' ? $this->Komparase_Model->get_review_user('product', $idProduk1) : array()),
                'comment2' =>($idProduk2 <> '' ? $this->Komparase_Model->get_review_user('product', $idProduk2) : array()),
                'comment3' =>($idProduk3 <> '' ? $this->Komparase_Model->get_review_user('product', $idProduk3) : array()),
                'productSerupa' => $this->Komparase_Model->get_product_serupa($kat, $idProduk1, $idProduk2, $idProduk3),
                'komparasiPilihan' => $this->Komparase_Model->get_komparasi_pilihan($kat),
                'artikelPilihan' => $this->Komparase_Model->get_artikel_pilihan($kat),
                'template_spec' => $this->Komparase_Model->get_product_spec_template($kat)
            );
        
            if (strlen($idProduk1) <> '') {
                $this->Komparase_Model->counter_product_compare($idProduk1);
            }
            if (strlen($idProduk2) <> '') {
                $this->Komparase_Model->counter_product_compare($idProduk2);
            }
            if (strlen($idProduk3) <> '') {
                $this->Komparase_Model->counter_product_compare($idProduk3);
            }

            if($detect->isMobile()) { 
                $mobile_dect = 'mobile';
            }

            $this->load->view('public/' . $mobile_dect . '/template/header', $data);
            $this->load->view('public/' . $mobile_dect . '/pages/kompare-page');
            $this->load->view('public/' . $mobile_dect . '/template/footer');
        
    }
    
    
    
}