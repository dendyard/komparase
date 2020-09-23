<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

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
            
            $input_q = $this->security->sanitize_filename($this->input->get('q'));
        
//            echo $this->security->sanitize_filename($input_q);
//            exit();
    		$data = array(
                'result' => $this->Komparase_Model->search_in_blog($input_q),
                'q' =>$input_q,
                'productSerupa' => $this->Komparase_Model->search_in_product($input_q),
            );
        
			$this->load->view('public/' . $mobile_dect . '/template/header', $data);
        	$this->load->view('public/' . $mobile_dect . '/pages/search-page');
        	$this->load->view('public/' . $mobile_dect . '/template/footer');
    }
    
    
}