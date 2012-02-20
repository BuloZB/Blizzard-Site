<?php
if (!DEFINED('BASEPATH')) 
	exit('<h1>Error 403</h1><p>Acceso prohibido a este archivo</p>'); //Todo esto debería tener un estilo igual al de Blizzard [Soon]
class Games extends CI_Controller{
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
		
		$this->load->Model('games_model');

	}
	
	public function index(){
		$info['landing_footer'] = true;
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['js_path'] = $this->js_path;
		$info['images_path'] = $this->images_path;
		$info['flash_path'] = $this->flash_path;
		$info['content_path'] = $this->content_path;
		$info['site_title'] = $this->config->item('site_title');
		
		$info['get_developing_games'] = $this->games_model->get_developing_games();
		//Si hay "juegos en desarrollo" aparecerá la sección correspondiente
		if(count($info['get_developing_games']) >= 1)
			$info['have_developing_games'] = true;
		else //Y si no, simplemente desaparecerá...
			$info['have_developing_games'] = false;
		//--->
		
		$info['get_active_games'] = $this->games_model->get_active_games();
		if(count($info['get_active_games']) >= 1)
			$info['have_active_games'] = true;
		else
			$info['have_active_games'] = false;
			
		$this->load->view('global/head', $info);
		$this->load->view('games/main', $info);
		$this->load->view('global/footer', $info);
	}
}
?>