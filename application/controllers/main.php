<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * NOTICE OF LICENSE
 * 
 * Licensed under the Academic Free License version 3.0
 * 
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2012, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

class Main extends CI_Controller {

	public $site_url;
	public $css_path;
	
	public function __construct()
	{
		parent::__construct();
		$this->site_url = $this->config->item('base_url');
		$this->css_path = $this->site_url."static/css/";
	}
	
	public function index()
	{
		$info['base_url'] = $this->site_url;
		$info['css_path'] = $this->css_path;
		$info['site_title'] = $this->config->item('site_title');
		$this->load->view('main', $info);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */