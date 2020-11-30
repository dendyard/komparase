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
    
    public function addartikel(){
        $this->load->view('public/admin/addartikel');
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
    
    public function checkslugblog(){
        header("Access-Control-Allow-Origin: *");
        
        $slug = $this->input->post('slug');
        
        $response['status'] = $this->Komparase_Model->check_slug_blog($slug);
        
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
    
    public function saveartikel($proctype){
        header("Access-Control-Allow-Origin: *");
        //echo $this->input->post('choosenproduct');
        
        //die();
        switch ($proctype){
            case "add":
                
                $data = array(
                    'blogtittle' => $this->input->post('blogtittle'),
                    'imagefeature' => $this->input->post('imagefeature'),
                    'rating' => $this->input->post('rating'),
                    'blogexcerpt' => $this->input->post('blogexcerpt'),
                    'blogcontent' => $this->input->post('blogcontent'),
                    'tags' => $this->input->post('tags'),
                    'choosenproduct' => $this->input->post('choosenproduct'),
                    'slug'       => $this->input->post('slug'),
                    'blogcategory' => 'blog-smartphone',
                    'statusapprove' => '1',
                    'intime' => date("Y-m-d H:i:s")
                );
                /*
                $data = array(
                    'blogtittle' => 'asdasdasd',
                    'imagefeature' => 'asdasdasd',
                    'rating' => '0',
                    'blogexcerpt' => 'expert',
                    'blogcontent' => 'blogcontent',
                    'tags' => 'tags',
                    'choosenproduct' => '1',
                    'slug'       => 'asdasd',
                    'blogcategory' => 'blog-smartphone',
                    'statusapprove' => '1'
                );
                */
                $response['status'] = $this->Komparase_Model->store_blog($data);
                break;
        }
        
        echo json_encode($response);
    }
    
    
    public function regenerate(){
        
        $data = array (
            'imgfeature' => $this->Komparase_Model->getImgFeature(),
        );
        
        $this->load->view('public/admin/generateurl', $data);
        
    }
    
    public function digitalvote(){
        
        header("Access-Control-Allow-Origin: *");
        
        $name = $this->input->post('nama');
        $rumah = $this->input->post('norumah');
        $pilihan = $this->input->post('pilihan');
        
        $data = array(
            'nama' => $name,
            'norumah' => $rumah,
            'intime' => date("Y-m-d H:i:s")
        );
        
        $data_log = array(
            'pilihan' => $pilihan,
            'intime' => date("Y-m-d H:i:s")
        );
        
        
        $response['status'] = $this->Komparase_Model->digivote($data);
        $response['status'] = $this->Komparase_Model->digivote_log($data_log);
        

        echo json_encode($response);
        
    }
    
        
}