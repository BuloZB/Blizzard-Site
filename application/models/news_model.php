<?php
if(!defined('BASEPATH')) exit('No hay acceso directo a este script.');
class News_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `id` DESC LIMIT 4");
			return $query->result_array();
	}
	
	public function general_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `id` DESC LIMIT 10");
			return $query->result_array();
	}
	
	public function date_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news` ORDER BY `month`, `year`");
			return $query->result_array();
	}
	
	public function total_news()
	{
			$query = $this->db->query("SELECT * FROM `bs_news`");
			return $query->num_rows();
	}
	
	public function view_new($id)
	{
		$query = $this->db->query("SELECT * FROM `bs_news` WHERE `id`='".$id."'");
		return $query->result_array();
	}
	
	public function news_by_date($month, $year)
	{
		$query = $this->db->query("SELECT * FROM `bs_news` WHERE `month` = '".$month."' AND `year` = '".$year."'");
		return $query->result_array();
	}
	
	public function by_page($i_page, $f_page)
	{
		$query = $this->db->query("SELECT * FROM `bs_news` WHERE `id`> '".($i_page - 1)."' AND`id` < '".($f_page)."' ORDER BY `id` DESC");
		return $query->result_array();
	}

}
