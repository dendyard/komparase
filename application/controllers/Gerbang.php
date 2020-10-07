<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerbang extends CI_Controller {

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
		redirect('gerbang/addproduct','refresh');
        //redirect('/', 'refresh');

    }
    
    public function addproduct()
	{        
		$this->load->view('public/admin/addproduct');
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
                
                $response['status'] = $this->Komparase_Model->store_product($data);
                break;
        }
        
        echo json_encode($response);
    }
    
    
        
}