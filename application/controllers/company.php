<?php
if(!DEFINED('BASEPATH'))
	exit('<h1>Error 403</h1><p>Acceso restringido</p>');
	
class Company extends CI_Controller{

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

		
	}
	
	public function index(){
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		$info['landing_footer'] = false;
		
		$this->load->view('global/head', $info);
		$this->load->view('global/footer', $info);
	}
	
	public function press($section = ""){
	
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		$info['landing_footer'] = false;
		
		
		$this->load->view('global/head', $info);
		if(is_null($section) || $section == "")
			$this->load->view('company/press', $info);
		elseif($section == "presskits")
			echo "Under developing";
		elseif($section == "pressreleases")
			echo "Under developing";
		else
			redirect($this->site_url.'error_404', 'refresh');
		$this->load->view('global/footer', $info);
	}
}

?>