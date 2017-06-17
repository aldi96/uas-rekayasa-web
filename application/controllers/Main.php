<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{		
		redirect('main/show/1');
	}

	public function show($id)
	{	
		$data['komentar'] = $this->komentar_model->getKomentar();
		if ($id==1) {
			$data['url'] = "https://www.youtube.com/embed/gqOEoUR5RHg";
		}
		elseif ($id==2) {
			$data['url'] = "https://www.youtube.com/embed/PLEYdd2zxvA";
		}
		elseif ($id==3) {
			$data['url'] = "https://www.youtube.com/embed/IOZ0t8nn3pI";
		}
		elseif ($id==4) {
			$data['url'] = "https://www.youtube.com/embed/7MRVtslCD9k";
		}
		elseif ($id==5) {
			$data['url'] = "https://www.youtube.com/embed/-e_6MrELayc";
		}
		elseif ($id==6) {
			$data['url'] = "https://www.youtube.com/embed/qY9ItxMVfHA";
		}
		$this->load->view('main/index',$data);
	}
}
