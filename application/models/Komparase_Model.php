<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komparase_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function get_product_pilihan($kat) {
        $sql0 = "SELECT *, 
(CASE WHEN (b.review >= 0) THEN b.review
      ELSE '0' END) as review FROM blogpost a LEFT JOIN user_review_blog_total b
ON a.id = b.idproduk
WHERE blogcategory='" . $kat . "' AND choosenproduct=1  order by intime DESC LIMIT 4";   
        
//      echo $sql0;
//      exit();
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    public function get_product_serupa($kat,$idp1='',$idp2='',$idp3='') {
        
        $lsprod = '';
        
        if ($kat == 'smartphone') {
            $kat = '5';
        }
        
        if ($idp1 <> '') {
            $lsprod = $idp1 . ",";
        }
        
        if ($idp2 <> '') {
            $lsprod .= $idp2 . ",";
        }
        
        if ($idp3 <> '') {
            $lsprod .= $idp3 . ",";
        }
        
        $sql0 = "SELECT id, productname, imagefeature, slug FROM masterproduct WHERE idcategory=" . $kat . " AND id NOT IN (" . substr($lsprod, 0, strlen($lsprod)-1) . ") LIMIT 4";   
        
//      echo $sql0;
//      exit();
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    public function get_product_terbaru($kat) {
        
        $lsprod = '';
        
        if ($kat == 'smartphone') {
            $kat = '5';
        }
        
        $sql0 = "SELECT id, productname, imagefeature, slug FROM masterproduct WHERE idcategory=" . $kat . " ORDER BY id DESC LIMIT 4";   
        
//      echo $sql0;
//      exit();
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    
    public function get_komparasi_pilihan($kat){
        $sql0 = "SELECT * FROM blogpost 
WHERE blogcategory='komparasi-" . $kat . "' AND statusapprove=1  order by intime DESC LIMIT 4";   
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    public function get_artikel_pilihan($kat, $slug='', $tags='', $limit = '5'){
        $sql0 = "SELECT *, 
(CASE WHEN (b.review >= 0) THEN b.review
      ELSE '0' END) as review FROM blogpost a LEFT JOIN user_review_blog_total b
ON a.id = b.idproduk
WHERE blogcategory='blog-" . $kat . "'" . ($slug <> '' ? " AND slug !='" . $slug . "' " : "") . ($tags <> '' ? " AND (" . $tags . ")" : "") . " AND statusapprove=1  order by intime DESC LIMIT " . $limit;   
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    
    public function get_product_list($kat){
        $sql0 = "SELECT id, productname, imagefeature FROM masterproduct WHERE idcategory=5 order by productname";   
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;
    }
    
    public function get_product_detail($kat, $proid){
        
        $sql0 = "SELECT * FROM masterproduct WHERE id=" . htmlentities($proid) . " order by productname";   
        
        $query0 = $this->db->query($sql0);
        
        //exit();
        if ($query0->num_rows() > 0){
            $result = $query0->row_array();    
        }else{
            $result = $query0->result_array();    
        }
        
        return $result;    
    }
    
    public function get_review_ahli($reviewtype, $prodid, $limit='2'){
            
        $sql0 = "SELECT b.displayname, b.photo, a.idreview, a.reviewcontent, a.skor  
FROM user_review a LEFT JOIN masteruser b ON a.userid = b.iduser
WHERE idproduk = " . $prodid . " AND reviewtype='" . $reviewtype . "' AND b.role=2 LIMIT " . $limit;   
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    public function get_review_user($reviewtype, $prodid, $limit='2'){
            
        $sql0 = "SELECT b.displayname, b.photo, a.id, a.commentcontent, a.skor    
FROM usercomment a LEFT JOIN masteruser b ON a.userid = b.iduser
WHERE idproduk = " . $prodid . " AND commenttype='" . $reviewtype . "' AND b.role=3 LIMIT " . $limit;
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    public function get_product_main($slug) {
        $sql0 = "SELECT * FROM masterproduct WHERE slug='" . $slug . "'";   
        
        $query0 = $this->db->query($sql0);
        $result = $query0->row_array();
        return $result; 
    }
    
    public function get_product_spec_template($kategory) {
        $sql0 = "SELECT * FROM spec_category WHERE type='" . $kategory . "' order by id";   
//        echo $sql0;
//        exit();
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result; 
    }
    
    
    public function get_artikel_more($offset='5', $kat, $slug='', $tags='', $limit = '5'){
        $sql0 = "SELECT *, 
(CASE WHEN (b.review >= 0) THEN b.review
      ELSE '0' END) as review FROM blogpost a LEFT JOIN user_review_blog_total b
ON a.id = b.idproduk
WHERE blogcategory='blog-" . $kat . "'" . ($slug <> '' ? " AND slug !='" . $slug . "' " : "") . ($tags <> '' ? " AND (" . $tags . ")" : "") . " AND statusapprove=1  order by intime DESC LIMIT " . $limit . " OFFSET " . $offset;   
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;    
    }
    
    
    public function search_in_blog($str){
        $q = html_entity_decode($str);
        $sql0 = "SELECT *, 
                (CASE WHEN (b.review >= 0) THEN b.review
                      ELSE '0' END) AS review FROM blogpost a LEFT JOIN user_review_blog_total b
                ON a.id = b.idproduk WHERE
                LOWER(blogtittle) LIKE Lower('%" . $q . "%') OR 
                LOWER(blogcontent) LIKE Lower('%" . $q . "%') OR 
                LOWER(tags) LIKE Lower('%" . $q . "%')
                ORDER BY inTime DESC LIMIT 5";
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;
        
    }
    
    public function search_in_product($str){
        $q = html_entity_decode($str);
        $sql0 = "SELECT * FROM masterproduct WHERE
                LOWER(productname) LIKE Lower('%" . $q . "%') OR 
                LOWER(tags) LIKE Lower('%" . $q . "%') OR 
                LOWER(excerptproduct) LIKE Lower('%" . $q . "%')
                ORDER BY inTime DESC LIMIT 5
                ";
        
        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result;   
    }
    
    public function get_artikel_full($slug){
        $sql0 = "SELECT * FROM blogpost WHERE slug='" . $slug . "'";   
        
        
        $query0 = $this->db->query($sql0);
        if ($query0->num_rows() > 0){
            $result = $query0->row_array();
            return $result; 
        }else{
            return 'empty';
        }
    }
    
    public function check_slug($slug){
        
        
        $sql0 = "SELECT COUNT(slug) as slg FROM masterproduct WHERE slug='" . $slug . "'";   
        $query0 = $this->db->query($sql0);
        
        $result = $query0->result_array();
        return $result;
    }
    
    public function check_slug_blog($slug){
        
        
        $sql0 = "SELECT COUNT(slug) as slg FROM blogpost WHERE slug='" . $slug . "'";   
        $query0 = $this->db->query($sql0);
        
        $result = $query0->result_array();
        return $result;
    }
    
    
    
    public function store_product($data, $idpro=''){
        
        $query0 = $this->db->insert('masterproduct', $data);
        
        if ($query0){
            $result = 'done';
        }else{
            $result = 'failed';
        }
        return $result;
             
    }
    
    public function store_blog($data, $idpro=''){
        
        $query0 = $this->db->insert('blogpost', $data);
        if ($query0){
            $result = 'done';
        }else{
            $result = 'failed';
        }
        return $result;
        
    }
    
    public function counter_product_read($id){
        $sql = "UPDATE masterproduct SET readcounter=readcounter+1 WHERE id=" . $id;
        $this->db->query($sql);
    }
    
    public function counter_product_compare($id){
        $sql = "UPDATE masterproduct SET komparasicounter=komparasicounter+1 WHERE id=" . $id;
        $this->db->query($sql);
    }
    
    public function getImgFeature(){
        $sql0 = "SELECT id,imagefeature FROM masterproduct";   

        $query0 = $this->db->query($sql0);
        $result = $query0->result_array();
        return $result; 
    }
    
    
}