<?php

class Games_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function get_developing_games(){
		$query = $this->db->query("SELECT `bs_config_value`, `bs_config_value_secondary`, `bs_config_value_tertiary` FROM `bs_configs` WHERE `bs_config_name` = 'on_developing_games' AND `bs_config_active` = '1' LIMIT 3");
		if($query->num_rows() < 1)
			return array();
		else
			return $query->result_array();
	}
	
	public function get_active_games(){
		$query = $this->db->query("SELECT `bs_config_value`, `bs_config_value_secondary`, `bs_config_value_tertiary` FROM `bs_configs` WHERE `bs_config_name` = 'actual_games' AND `bs_config_active` = '1'");
		if($query->num_rows() < 1)
			return array();
		else
			return $query->result_array();
	}

}

?>