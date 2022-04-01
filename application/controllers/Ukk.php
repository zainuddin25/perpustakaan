<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model");
	}
	public function index()
	{
		$this->load->view('perpustakaan/index');
		$temp_nama_masuk = $this->input->post("nama_masuk");
		$nama_masuk = strtolower($temp_nama_masuk);
		$temp_password_masuk = $this->input->post("password_masuk");
		$password_masuk = md5($temp_password_masuk);
		if(!empty($this->input->post()))
		{
			$temp = $this->db->query('SELECT * FROM user WHERE username ='.'"'.$nama_masuk.'"')->row_array();
			if ($nama_masuk == !empty($temp["username"])) {
				if($password_masuk == $temp["password"]){
					if ($temp["role"] == "admin") {
						echo "Iam Admin";
					}else{
						echo "Iam Anggota";
					}
				}else{
					echo "<div class='alert alert-danger alert-dismissible fade show col-6 mx-auto' role='alert'>";
					echo "Maaf, Kata Sandi yang anda masukan tidak cocok dengan Username <b>". $nama_masuk ."</b>";
					echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
					echo "</div>";
				}
			}else{
				echo "<div class='alert alert-danger alert-dismissible fade show col-6 mx-auto' role='alert'>";
				echo "Maaf, Username <b>".$nama_masuk."</b> salah atau tidak terdaftar";
				echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
				echo "</div>";
			}
		}
	}
	public function login()
	{
		$this->load->view("perpustakaan/login");
	}
	
}
