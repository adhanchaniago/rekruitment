<?php
class Home extends CI_Controller
{
//tampilan read
	public function index()
	{
		$data['news'] = $this->m_news->get_news();
		$this->load->view('v_news', $data);
	}

//untuk menghapus data
	public function del_news($id)
	{
		$where = array('ID' => $id);
		$this->m_news->delete($where,'news');
		redirect(base_url('Home/index'));
	}
	
	public function edit($id)
	{
		$where = array('ID' => $id);
		$data['data'] = $this->m_news->get_id($where,'news')->row();
		$this->load->view('v_edit',$data);
	}
	
	public function update()
	{		
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('content','content','required');
			$this->form_validation->set_rules('category','category','required');
			$this->form_validation->set_rules('image','image','required');
			if ($this->form_validation->run() === TRUE){
				$ID = $this->input->post('ID');
				$title= $this->input->post('title');
				$content = $this->input->post('content');
				$category = $this->input->post('category');
				$image = $this->input->post('image');

				$data = array(
					'title' => $title,
					'content' => $content,
					'category' => $category,
					'image' => $image
				);

				$where = array(
					'ID' => $ID
				);

				$this->m_news->update($where,$data,'news');
				redirect(base_url('Home/index'));
				}
				else{
				echo "gagal";
			}
	}
	
	public function add()
	{
		$this->load->view('v_tambah');
	}
	
	public function addnews()
	{
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('content','content','required');
			$this->form_validation->set_rules('category','category','required');
			$this->form_validation->set_rules('image','image','required');
			if ($this->form_validation->run() === TRUE){
				$ID = $this->input->post('ID');
				$title= $this->input->post('title');
				$content = $this->input->post('content');
				$category = $this->input->post('category');
				$image = $this->input->post('image');

				$data = array(
					'title' => $title,
					'content' => $content,
					'category' => $category,
					'image' => $image
				);

				if ($this->form_validation->run() === TRUE){
					$this->m_news->add($data);
					redirect(base_url('home/index'));
					
				}else{
					redirect(base_url('home/add'));
				}
			}
	}
}