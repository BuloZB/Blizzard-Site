<?php
if(!DEFINED('BASEPATH'))
	exit('<h1>Error 403</h1><p>Acceso restringido</p>');

class Rss extends CI_Controller{
	
	//URL del sitio (configuraci�n)
	public $site_url;
	public $css_path; //css
	public $js_path; //js
	public $images_path; //images
	public $flash_path; //flash
	public $content_path; //content
	
	public function __construct(){
		parent::__construct();
		$this->site_url = $this->config->item('base_url');
		$this->css_path = $this->site_url."static/css/";
		$this->js_path = $this->site_url."static/js/";
		$this->images_path = $this->site_url."static/images/";
		$this->content_path = $this->site_url."static/content/";
		$this->flash_path = $this->site_url."static/flash/";
		
		$this->load->Model('news_model');
	}
	
	public function index(){
		header("Content-Type: application/xml; charset=ISO-8859-1"); 
		$info['images_path'] = $this->images_path;
		$info['site_title'] = $this->config->item('site_title');
		$info['base_url'] = $this->site_url;
		$info['news'] = $this->news_model->general_news();
		$info['rss_start'] = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$this->load->view('rss', $info);
	}

}

?>