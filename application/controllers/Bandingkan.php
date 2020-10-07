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
    
    public function insertdata()
    {
        header("Access-Control-Allow-Origin: *");
        
        $productname       = $this->input->post('productname');
        $excerptproduct    = $this->input->post('excerptproduct');
        $imagefeature      = $this->input->post('imagefeature');
        $rating            = $this->input->post('rating');
        $blogproduct       = $this->input->post('blogproduct');
        $tags              = $this->input->post('tags');
        $price             = $this->input->post('price');
        $slug              = $this->input->post('slug');
        $spec              = $this->input->post('spec');
        $rilisdate         = $this->input->post('rilisdate');
        
        $dataInsert = array(
            'productname'          => $productname,
            'excerptproduct'       => $excerptproduct,
            'imagefeature'         => $imagefeature,
            'rating'               => $rating,
            'blogproduct'          => $blogproduct,
            'tags'                 => $tags,
            'price'                => $price,
            'slug'                 => $slug,
            'spec'                 => $spec,
            'rilisdate'            => $rilisdate 
        );
        
        
        if($this->Komparase_Model->insertProduct($dataInsert)){
            $response['status'] = TRUE;
        }else{
            $response['status'] = FALSE;
            $response['msg'] = 'something when wrong';
        }

        echo json_encode($response);
    }
    
    public function checkslug(){
        header("Access-Control-Allow-Origin: *");
        
        $slug = $this->input->post('slug');
        
        
        $response['status'] = $this->Komparase_Model->check_slug($slug);
        
        echo json_encode($response);
    }
    
    public function savedata($proctype){
        header("Access-Control-Allow-Origin: *");
        
        switch ($proctype){
            case "add":
                
                $data = array(
                    'productname' => $this->input->post('productname'),
                    'imagefeature' => $this->input->post('imagefeature'),
                    'rating' => $this->input->post('rating'),
                    'excerptproduct' => $this->input->post('excerptproduct'),
                    'blogproduct' => $this->input->post('blogproduct'),
                    'tags' => $this->input->post('tags'),
                    'price' => $this->input->post('price'),
                    'spec' => $this->input->post('spec'),
                    'slug' => $this->input->post('slug'),
                    'rilisdate'            => $this->input->post('rilisdate'), 
                    'idcategory' => '5'
                );
                
                /*
                $data = array(
                    'productname' => 'Dendy TEst 2  ',
                    'imagefeature' => 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-mi-10t-5g-pro.jpg',
                    'rating' => '0',
                    'excerptproduct' => 'excerpt',
                    'blogproduct' => 'blog',
                    'tags' => 'smartphone,testin',
                    'price' => '500000',
                    'spec' => '{"brand":{"spec":{"name":""}},"harga":{"spec":{"harga":""}},"jaringan":{"spec":{"Teknologi":"","2G Bands":"","3G Bands":"","4G Bands":"","5G Bands":"","Speed":""}},"rilis":{"spec":{"Tanggal":""}},"body":{"spec":{"Dimensi":"","Berat":"","Bahan":"","SIM":""}},"layar":{"spec":{"Type":"","Ukuran":"","Resolusi":"","Proteksi":""}},"platform":{"spec":{"OS":"","Chipset":"","CPU":"","GPU":""}},"memory":{"spec":{"Card Slot":"","Internal":""}},"kamera-utama":{"spec":{"sp_cam_type":"","Features":"","Video":""}},"kamera-selfie":{"spec":{"Single":"","Features":"","Video":""}},"sound":{"spec":{"Loud Speaker":"","3.5 mm Jack":""}},"komunikasi":{"spec":{"WLAN":"","Bluetooth":"","GPS":"","NFC":"","Radio":"","USB":""}},"fitur":{"spec":{"Sensor":""}},"baterai":{"spec":{"Type":"","Charging":""}},"misc":{"spec":{"Warna":"","Model":""}}}',
                    'slug' => 'dendy-st-2'
                );
                */
                //print_r ($data);
                //exit();
                $response['status'] = $this->Komparase_Model->store_product($data);
                break;
        }
        
        echo json_encode($response);
    }
    
    
    
}