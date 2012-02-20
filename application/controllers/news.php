<?php
if(!DEFINED('BASEPATH'))
	exit('<h1>Error 403</h1><p>Acceso restringido</p>');
	
class News extends CI_Controller{

	//URL del sitio (configuración)
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
		$info['landing_footer'] = false;
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		
		$info['news'] = $this->news_model->general_news();
		$info['date_news'] = $this->news_model->date_news();
		$info['load_date'] = $this->load->helper('date');
		//Esta sección (y su correspondiente en el modelador y el visualizador deben ser probadas...
		$total_news = $this->news_model->total_news();
		(int)$total_news = $total_news / 15;
		
		if((int)$total_news <= 0)
			$total_news = 1;
		
		$info['total_news'] = $total_news;
		$this->load->view('global/head', $info);
		$this->load->view('news/main', $info);
		$this->load->view('global/footer', $info);
	}
	
	public function page($id = 0){
		$info['landing_footer'] = true;
		echo $id;
	}
	
	public function view($id = 0, $title = "")
	{
		$info['landing_footer'] = true;
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		
		if($id == 0 || is_null($id))
			redirect($this->site_url.'error_404', 'refresh');
			
		$info['load_date'] = $this->load->helper('date');

		
		$info['date_news'] = $this->news_model->date_news();
		$info['news'] = $this->news_model->view_new($id);
		

		
		$this->load->view('global/head', $info);
		$this->load->view('news/view', $info);
		$this->load->view('global/footer', $info);
	}
	
	public function date($month = 00, $year = 0000)
	{
		$info['landing_footer'] = true;
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		
		if($month == 00 || is_null($month) || $year == 0000 || is_null($year))
			redirect($this->site_url.'error_404', 'refresh');
		
		$info['load_date'] = $this->load->helper('date');
		
		$info['date_news'] = $this->news_model->date_news();
		
		$info['news_by_date'] = $this->news_model->news_by_date($month, $year);
		
		$info['month'] = $month;
		$info['year'] = $year;
		
		$this->load->view('global/head', $info);
		$this->load->view('news/by_date', $info);
		$this->load->view('global/footer', $info);
	}
	
}
?>