<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukk extends CI_Controller {
	public function index()
	{
		$this->load->view('perpustakaan/index');
		$temp_nama_masuk = $this->input->post("nama_masuk");
		$nama_masuk = strtolower($temp_nama_masuk);
		$temp_password_masuk = $this->input->post("password_masuk");
		$password_masuk = md5($temp_password_masuk);
		if ($this->input->post()) {
			$temp = $this->db->query('SELECT * FROM user WHERE username ='.'"'.$nama_masuk.'"')->row_array();
			if($temp["username"] == $nama_masuk){
				if ($temp["password"] == $password_masuk) {
						if($temp["role"] == "admin") {
							echo "Iam Admin";
						}else{
							echo "Aku Siapa....";
						}
					}else{
						echo "<div class='alert alert-danger alert-dismissible fade show col-6 mx-auto' role='alert'>";
						echo "Kata sandi anda tidak cocok";
						echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
						echo "</div>";
					}
			}else{
				echo "<div class='alert alert-danger alert-dismissible fade show col-6 mx-auto' role='alert'>";
				echo "Akun anda salah atau belum terdaftar";
				echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
				echo "</div>";
			}
		}
	}
	
}
