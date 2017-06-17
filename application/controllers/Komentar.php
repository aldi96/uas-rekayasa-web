<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function komen()
	{
		$this->form_validation->set_rules('komentar','Komentar','required|max_length[20]');

		if ($this->form_validation->run() === FALSE) {			
			$this->load->view('main/index');
		}else{
			$this->komentar_model->isi();
			redirect('main');
		}
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->komentar_model->hapusKomentar($where,'komentar');
		redirect('main/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['komentar'] = $this->komentar_model->editKomentar($where,'komentar')->result();
		$this->load->view('main/edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$komentar = $this->input->post('komentar');
 
		$data = array('pesan' => $komentar);
 
		$where = array(
			'id' => $id
		);
 
		$this->komentar_model->update_data($where,$data,'komentar');
		redirect('main/index');
	}
}
