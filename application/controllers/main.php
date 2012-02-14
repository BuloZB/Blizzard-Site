<?php  
if (!DEFINED('BASEPATH')) 
	exit('<h1>Error 403</h1><p>Acceso prohibido a este archivo</p>'); //Todo esto debería tener un estilo igual al de Blizzard [Soon]

class Main extends CI_Controller {

	//URL del sitio (configuración)
	public $site_url;
	//Rutas a carpetas de contenido estático [To Do: Generar una librería de ayuda para estas rutas]
	public $css_path; //css
	public $js_path; //js
	public $images_path; //images
	public $flash_path; //flash
	public $content_path; //content
	
	public function __construct()
	{
		parent::__construct();
		$this->site_url = $this->config->item('base_url');
		$this->css_path = $this->site_url."static/css/";
		$this->js_path = $this->site_url."static/js/";
		$this->images_path = $this->site_url."static/images/";
		$this->content_path = $this->site_url."static/content/";
		//No debería ir al contenido estático pero por referencias lo hará por ahora.
		$this->flash_path = $this->site_url."static/flash/";
		
		$this->load->Model('news_model');
	}
	
	public function index()
	{
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
			$spotlights_images = array(
				1 => "spotlight-wowtrial-alliance.jpg",
				2 => "spotlight-wowtrial-horde.jpg",
			);
		$info['second_spotlight_image'] = $spotlights_images[rand(1,2)];
		$info['news'] = $this->news_model->index_news();
		//Parte del sistema de "vistas" para englobalizar archivos
		$this->load->view('global/head', $info);
		$this->load->view('main', $info);
		$this->load->view('global/footer', $info);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */