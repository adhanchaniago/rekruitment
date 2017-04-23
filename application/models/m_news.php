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
		$query = $this->db->select('*')
						->from('news')
						->join('category', 'news.id_cat = category.id_cat')
						->get();
		return $query->result_array();
	}
	
	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function get_id($where,$table)
	{
		$query = $this->db->select('*')
						->from($table)
						->join('category', 'news.id_cat = category.id_cat')
						->where($where)
						->get();
		return $query->row();
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
