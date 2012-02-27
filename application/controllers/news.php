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
		(int)$total_news = $total_news / 10;
		
		if((int)$total_news <= 0)
			$total_news = 1;
		
		$info['total_news'] = $total_news;
		$this->load->view('global/head', $info);
		$this->load->view('news/main', $info);
		$this->load->view('global/footer', $info);
	}
	
	public function page($page = 0){
		$info['landing_footer'] = false;
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		
		$this->load->view('global/head', $info);
		//Si la página es 0, es un error que posiblemente el usuario quizo andar viendo que pasaba xD
		//Y lo redirigimos a la 404 >.<
		if($page <= 0)
			redirect($this->site_url.'error_404', 'refresh');
		//Esta paginación está loca :3...Pero luego la mejoro xD...
		if($page == 1)
		{
			//Si la página es la primera, iniciamos los rangos del 1 al 10 
			$i_page = 1;  //El rango inicial es 1
			$f_page = $i_page * 10; //El rango final sería 10 (1 * 10 = 10)
		}		
		else //Si la página es mayor a 1
		{
			$f_page = $page * 10; //El rango final sería (usando la 4a página como ejemplo): 4 * 10 = 40
			$i_page = ($f_page - 10) + 1; //El rango inicial sería (40 - 10) + 1 = 30 + 1 = 31
			//De esta forma se muestran exactamente 10 noticias únicamente por página
		}
		$info['load_date'] = $this->load->helper('date');

		
		$info['date_news'] = $this->news_model->date_news();
		
		$total_news = $this->news_model->total_news();
		(int)$total_news = $total_news / 10;
		
		if((int)$total_news <= 0)
			$total_news = 1;
			
		$info['page'] = $page;
		
		$info['total_news'] = $total_news;
		
		$info['by_page'] = $this->news_model->by_page($i_page, $f_page);
		$this->load->view('news/by_page', $info);
		$this->load->view('global/footer', $info);
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