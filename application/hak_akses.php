public function loginuser(){
	$usr = $this->input->post('Username');
	$pss = $this->input->post('Pass');
	
	$datauser = $this->Model->datauser($usr,$pss);
	$datatoko = $this->Model->datatoko();
	
	$nama = $datauser["Nama"];
	$kodesupplier = $datauser["Kode_Supplier"];
	$username = $datauser["Username"];
	$pass = $datauser["Pass"];
	$kodeuser = $datauser["Kode_User"];
	$hakakses = $datauser["Hak_Akses"];
	$jk = $datauser["Jenis_Kelamin"];
	
	$nmtoko = $datatoko["Nama_Toko"];
	$fototoko = $datatoko["Foto_Toko"];
	
	$where = array(
		'Username' => $username,
		'Pass' => $pass,
		);
	$cek = $this->Model->cek_login("tb_user",$where)->num_rows();
		if($cek > 0){
			
			session_start();
			$_SESSION['Username'] 	= $nama;
			$_SESSION['Pass'] 		= $password;
			$_SESSION['Kode_User'] 	= $kodeuser;
			$_SESSION['Hak_Akses'] 	= $hakakses;
			$_SESSION['Jenis_Kelamin'] 	= $jk;
			$_SESSION['Nama_Toko'] 	= $nmtoko;
			$_SESSION['Foto_Toko'] 	= $fototoko;
			$_SESSION['Kode_Supplier'] 	= $kodesupplier;
			
			
			redirect(base_url("Control/hakadmin"));
			
		}else{
			echo "<script>alert('Username Atau Password Salah..!!');</script>";
			redirect(base_url(),'refresh');
		}
	}
public function hakadmin(){
	if($this->session->userdata['Hak_Akses'] == 'Admin'){
	
		$this->load->view('admin/Menuadmin');
		$this->load->view('admin/content');
		
	}else if($this->session->userdata['Hak_Akses'] == 'HRD'){
	
		$this->load->view('admin/Menuadmin');
		$this->load->view('admin/content');
		
	}else if($this->session->userdata['Hak_Akses'] == 'Pegawai'){
	
		$this->load->view('admin/Menuadmin');
		$this->load->view('admin/content');
		
	}else if($this->session->userdata['Hak_Akses'] == 'Supplier'){
	
		$this->load->view('admin/Menuadmin');
		$this->load->view('admin/content');
		
	}
	else if($this->session->userdata['Hak_Akses'] == ' '){
	echo "<script>alert('Tidak Ada Akses');</script>";
		redirect(base_url(),'refresh');
	}
	}