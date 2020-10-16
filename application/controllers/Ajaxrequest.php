<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxrequest extends CI_Controller {

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
        header('Access-Control-Allow-Origin: *');
        echo json_encode('Upps... Not allowed', JSON_PRETTY_PRINT);
    }
    
    public function get_artikel_more($start=5){
        header('Access-Control-Allow-Origin: *');
          
        $result = $this->Komparase_Model->get_artikel_more($start, 'smartphone');
        
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    
        
}