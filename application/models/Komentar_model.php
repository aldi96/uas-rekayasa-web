<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function isi()
	{
		$data = array(	'pesan' => $this->input->post('komentar')	);
		return $this->db->insert('komentar',$data);
	}

	function getKomentar(){
    $this->db->order_by('id','DESC');
    $this->db->select('*');
    $this->db->from('komentar');
 
    $query = $this->db->get();
        if ($query->num_rows() >0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
        return $hasil;
        }
	}

	function hapusKomentar($id){
		$this->db->where($id);
		$this->db->delete('komentar');
	}

	function editKomentar($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
