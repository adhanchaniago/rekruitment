<?php
class M_news extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
//untuk menampilkan apa yag ada dalam database
	public $db_table = 'news';
	
	public function get_news()
	{
		$query = $this->db->get('news');
		return $query->result_array();
	}
	
	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function get_id($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	
	public function update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function add($data)
	{
		return $this->db->insert('news',$data);
	}
}	
