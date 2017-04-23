<?php
class Home extends CI_Controller
{
//tampilan read
	public function index()
	{
		$data['news'] = $this->m_news->get_news();
		$this->load->view('headeradmin');
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
		$data['kategori'] = $this->m_news->daftar_kategori()->result();
		$data['data'] = $this->m_news->get_id($where,'news');
		$this->load->view('headeradmin');
		$this->load->view('v_edit',$data);
	}
	
	public function update()
	{		
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('content','content','required');
			$this->form_validation->set_rules('id_cat','id_cat','required');
			$this->form_validation->set_rules('image','image','required');
			if ($this->form_validation->run() === TRUE){
				$ID = $this->input->post('ID');
				$title= $this->input->post('title');
				$content = $this->input->post('content');
				$id_cat= $this->input->post('id_cat');
				$image = $this->input->post('image');

				$data = array(
					'title' => $title,
					'content' => $content,
					'id_cat' => $id_cat,
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
		$data['kategori'] = $this->m_news->daftar_kategori()->result();
		$this->load->view('headeradmin');
		$this->load->view('v_tambah', $data);
	}
	
	public function addnews()
	{
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpg|png';
		$this->load->library('upload', $config);
			
		if ( ! $this->upload->do_upload())
		{
			//file gagal diupload -> kembali ke form tambah
			$this->load->view('headeradmin');
			$this->load->view('v_tambah');
		} else {
			$ID = $this->input->post('ID');
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$id_cat = $this->input->post('id_cat');
			$image = $this->upload->data();
			$data =	array(
						'title'=>$title,
						'content'=>$content,
						'id_cat'=>$id_cat,
						'image'	=> $image['file_name']
					);
			$this->m_news->add($data,'news');
			redirect(base_url('home/index'));
		}
	}
}