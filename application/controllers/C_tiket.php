<?php
class C_tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Tiket_Model');

	}


//CONTROLER UNTUK MENGARAHKAN KE VIEW BERANDA
public	function index(){ 
	$this->load->view('V_Beranda');

}
///////////////////////////////////////////////////


public	function Feedback_user(){
	$id1 = $this->uri->segment(3);
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$No_Permintaan = $id1.'/'.$id2.'/'.$id3;
	$data['data_permintaan'] = $this->Tiket_Model->printpermintaan($No_Permintaan);
	//mengecek nama validation
	$this->form_validation->set_rules('No_Permintaan','No_Permintaan','required');


	if($this->form_validation->run() == TRUE)
	{
	$ubah = $this->input->post("Editfile");
		if($ubah == "Yes"){ 	
		$ubahnamafile = date('dmyHis');
		/* Start Uploading File */		
		if (isset($_FILES['Gambar_Lampiran']['name'])) {
			$config['upload_path'] = './DataFoto/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif|';
			$config['max_filename'] = '5000000';
			$config['maintain_ratio'] 	= TRUE;
			$config['encrypt_name'] = FALSE; //untuk merubah nama atau encryptr
			$config['max_size'] = '5120000'; 
			$config['file_name'] = $ubahnamafile; //untuk mengubah nama photo menjadi : 51photo.jpg atau 52photo.jpg
			
			if (file_exists('./DataFoto/' . $config['file_name'])) {
				echo "<script>alert('Nama File Sudah Ada, Silahkan Rename Nama File Anda..!!');</script>";
			} else {
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('Gambar_Lampiran')) { 
					echo "<script>alert('Jenis File Terlalu Besar, File Tidak Tersimpan, Silahkan Lihat Table Bahan Baku Dan Edit File Anda..!!');</script>";
				//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				} else {
					echo "<script>alert('Kode Permintaan sama dengan data yang telah ada');</script>";
					//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				}
            }
		}
		
		$this->Tiket_Model->niali_implementasi();
		}else if($ubah == "No"){
			$this->Tiket_Model->niali_implementasi();
		}	
		
			
	}	
	
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;
$data['dataarray']= $this->Tiket_Model->datapermintaanarray($id);
$this->load->view('implementasi',$data);
}

function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->Tiket_Model->search_name($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label' => $row->NPK,
					'nama' => $row->Nama_User,
					'dept' => $row->Divisi
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

//CONTROLER UNTUK MENGARAHKAN KE VIEW TAMBAH USER
public	function login()	
	{
	$this->load->view('login');
	}
///////////////////////////////////////////////////

//CONTROLER UNTUK MENGARAHKAN KE VIEW TAMBAH USER
public	function menuuntuktambahuser()	
	{
	$data['datanya'] = $this->Tiket_Model-> listdatapermintaanditolak(); 
	$this->load->view('V_Tambahuser');
	}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENGARAHKAN KE VIEW MENU USER
public	function menuuser()	
	{
	$data['datatablepermintaan'] = $this->Tiket_Model-> listdatapermintaan();
	$this->load->view('header_user',$data);
	$this->load->view('V_menuuser',$data);
	}
///////////////////////////////////////////////////	
   

//CONTROLER UNTUK MENGARAHKAN KE VIEW DETAIL APPROVER DAN MENGIRIM DATA PERMINTAAN
public	function detailprintapprover()	
	{
	$id1 = $this->uri->segment(3); 
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$id = $id1.'/'.$id2.'/'.$id3;
	$data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);
	$this->load->view('V_printapprover',$data);
	}
///////////////////////////////////////////////////	

public	function print_permintaan()	
	{
	$id1 = $this->uri->segment(3); 
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$id = $id1.'/'.$id2.'/'.$id3;
	$data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);
	$this->load->view('V_Printout',$data);	
	 }

	 public	function print_permintaan2()	
	 {
	 $id1 = $this->uri->segment(3); 
	 $id2 = $this->uri->segment(4);
	 $id3 = $this->uri->segment(5);
	 $id = $id1.'/'.$id2.'/'.$id3;
	 $data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);
	 $this->load->view('V_Printout2',$data);	
	  }

	  public	function print_permintaan3()	
	 {
	 $id1 = $this->uri->segment(3); 
	 $id2 = $this->uri->segment(4);
	 $id3 = $this->uri->segment(5);
	 $id = $id1.'/'.$id2.'/'.$id3;
	 $data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);
	 $this->load->view('V_Printout3',$data);	
	  }

	  public	function print_permintaan4()	
	 {
	 $id1 = $this->uri->segment(3); 
	 $id2 = $this->uri->segment(4);
	 $id3 = $this->uri->segment(5);
	 $id = $id1.'/'.$id2.'/'.$id3;
	 $data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);
	 $this->load->view('V_Printout4',$data);	
	  }

//CONTROLER UNTUK MENGARAHKAN KE VIEW MENGELOLA USER
public	function kelolauser()	
	{
	$data['datatableuser'] = $this->Tiket_Model-> listdatauser();
	$this->load->view('headeradmin_kelolauser');
	$this->load->view('V_kelolauser',$data);
	}
	public	function kelolauser2()	
	{
	$data['datatableuser'] = $this->Tiket_Model-> listdatauser();
	$this->load->view('headeradmin_kelolauser2');
	$this->load->view('V_kelolauser',$data);
	}
///////////////////////////////////////////////////	


//CONTROLER UNTUK MENGARAHKAN KE VIEW MENGELOLA FORM PERMINTAAN BARU
	public	function permintaanbaru()	
	{
	$this->form_validation->set_rules('username','username','required');
	$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$id = $id1.'/'.$id2.'/'.$id3;
	$data["id"] = $this->Tiket_Model->kodeid();
	$data['dataarray'] = $this->Tiket_Model->ambilnamauser($id);
	$this->load->view('V_Permintaanbaru',$data);
	}
///////////////////////////////////////////////////	



//CONTROLER UNTUK MENAMBAH PERMINTAAN DAN MENGIRIM KE MODEL
public function tambahpermintaan(){
	//mengecek nama validation
	$this->form_validation->set_rules('No_Permintaan','No_Permintaan','required');
	$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$id = $id1.'/'.$id2.'/'.$id3;
		
	if($this->form_validation->run() == TRUE)
	{ 	
		$ubahnamafile = date('dmyHis');
		/* Start Uploading File */		
		if (isset($_FILES['Gambar_Lampiran']['name'])) {
			$config['upload_path'] = './DataFoto/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif|';
			$config['max_filename'] = '5000000';
			$config['maintain_ratio'] 	= TRUE;
			$config['encrypt_name'] = FALSE; //untuk merubah nama atau encryptr
			$config['max_size'] = '5120000'; 
			$config['file_name'] = $ubahnamafile; //untuk mengubah nama photo menjadi : 51photo.jpg atau 52photo.jpg
			
			if (file_exists('./DataFoto/' . $config['file_name'])) {
				echo "<script>alert('Nama File Sudah Ada, Silahkan Rename Nama File Anda..!!');</script>";
			} else {
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('Gambar_Lampiran')) { 
					echo "<script>alert('Jenis File Terlalu Besar, File Tidak Tersimpan, Silahkan Lihat Table Bahan Baku Dan Edit File Anda..!!');</script>";
				
				} 
            }
		}
		$this->Tiket_Model->simpandatapermintaan();
		redirect('C_tiket/home');

		}

	$data["id"] = $this->Tiket_Model->kodeid();
	$this->load->view("V_menuuser",$data);

	}
///////////////////////////////////////////////////


public function simpanedituser(){
	    $this->form_validation->set_rules('Id','Id','required');
		$id = $this->uri->segment(3);
		$this->Tiket_Model->editusernya();

}
public function edit_user(){

	    $this->form_validation->set_rules('Id','Id','required');
		$id = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
		$data['dataarray']= $this->Tiket_Model->userarray($id);
		$this->load->view('V_Edituser',$data);	

}




//CONTROLER UNTUK MENGARAHKAN KE VIEW TAMBAH USER
public function tambahuser(){
		$this->form_validation->set_rules('Id','Id','required');
		$this->Tiket_Model->simpanuser();
		redirect('C_tiket/kelolauser');
		}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENGARAHKAN KE VIEW MENU ADMIN
public function menuadmin(){

	$data['datatablepermintaan'] = $this->Tiket_Model-> listdatapermintaan();
	$this->load->view('header');
	$this->load->view('V_menuadmin',$data);
	}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENGARAHKAN KE VIEW TENTANG APLIKASI
public function tentangapk(){

	$this->load->view('V_Tentang_Aplikasi');
	}
///////////////////////////////////////////////////


public function data_umum_diterima_user(){
	$data['datanya'] = $this->Tiket_Model-> listdatapermintaanditerima();
	$this->load->view('header_user_data');
	$this->load->view('V_datapermintaanumum_diterima',$data);
	}

public function data_umum_ditolak_user(){
	$data['datanya'] = $this->Tiket_Model-> listdatapermintaanditolak();
	$this->load->view('header_user_data');
	$this->load->view('V_datapermintaanumum_ditolak',$data);
	}



//CONTROLER UNTUK MENGARAHKAN KE VIEW SEMUA DATA PERMINTAAN TANPA LOGIN	
public function dataumum(){
	$data['datatablepermintaan'] = $this->Tiket_Model-> listdatapermintaan();
	$this->load->view('headeradmin_kelolauser');
	$this->load->view('V_datapermintaanumum',$data);
	}

	public function dataumum2(){
		$data['datatablepermintaan'] = $this->Tiket_Model-> listdatapermintaan();
		$this->load->view('headeradmin_kelolauser');
		$this->load->view('V_feedbackuser',$data);
		}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENGARAHKAN KE VIEW SEMUA DATA PERMINTAAN YANG DI TERIMA TANPA LOGIN
public function data_umum_diterima(){
	$data['datanya'] = $this->Tiket_Model-> listdatapermintaanditerima();
	$this->load->view('header_umum');
	$this->load->view('V_datapermintaanumum_diterima',$data);
		
	}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENGARAHKAN KE VIEW SEMUA DATA PERMINTAAN YANG DI TOLAK TANPA LOGIN	
public function data_umum_ditolak(){
	$data['datanya'] = $this->Tiket_Model-> listdatapermintaanditolak();
	$this->load->view('header_umum');
		$this->load->view('V_datapermintaanumum_ditolak',$data);
		
	}
///////////////////////////////////////////////////

//CONTROLER UNTUK MENGARAHKAN KE VIEW SEMUA DATA PERMINTAAN YANG DI TOLAK TANPA LOGIN	
public function data_ditolak(){
	$data['datanya'] = $this->Tiket_Model-> listdatapermintaanditolak();
		$this->load->view('V_Permintaanyangditolak',$data);
		
	}
///////////////////////////////////////////////////

//CONTROLER UNTUK MENGHAPUS DATA DARI VIEW ADMIN
public function hapusdatapermintaanmenuadmin(){
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;

$datatiket = $this->Tiket_Model->datapermintaanarray($id);

$foto = $datatiket["Gambar_Lampiran"];
unlink('./DataFoto/'.$foto); 

$this->Tiket_Model->hapusdatatablepermintaan($id);
$this->Tiket_Model->hapusdatatablepermintaanyangditolak($id);
$this->Tiket_Model->hapusdatatablepermintaanyangditerima($id);
redirect(base_url("C_tiket/home")); 
}
///////////////////////////////////////////////////

//CONTROLER UNTUK MENGHAPUS DATA DARI VIEW ADMIN
public function hapusdatapermintaanmenuadminyangditolak(){
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;

$datatiket = $this->Tiket_Model->datapermintaanarray($id);

$foto = $datatiket["Gambar_Lampiran"];
unlink('./DataFoto/'.$foto); 

$this->Tiket_Model->hapusdatatablepermintaanyangditolak($id); 
redirect(base_url("C_tiket/data_permintaan_ditolak_admin")); 
}
///////////////////////////////////////////////////

//CONTROLER UNTUK MENGHAPUS DATA DARI VIEW ADMIN
public function hapusdatapermintaanmenuadminyangditerima(){
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;

$datatiket = $this->Tiket_Model->datapermintaanarray($id);

$foto = $datatiket["Gambar_Lampiran"];
unlink('./DataFoto/'.$foto); 

$this->Tiket_Model->hapusdatatablepermintaanyangditerima($id); 
redirect(base_url("C_tiket/data_permintaan_diterima_admin")); 
}
///////////////////////////////////////////////////





//CONTROLER UNTUK MENGHAPUS DATA USER
public function hapususername(){	
$id = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view

$this->Tiket_Model->hapususernamenya($id);
redirect(base_url("C_tiket/kelolauser")); 
}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENAMPILKAN DATA YANG DI TERIMA DENGAN SYARAT HARUS LOGIN TERLEBIH DAHULU
public function datapermintanditerima(){
		$data['datanya'] = $this->Tiket_Model->listdatapermintaanditerima();
		$this->load->view('V_Permintaanyangditerima',$data);
	}
///////////////////////////////////////////////////


//CONTROLER UNTUK UPDATE DATA DAN HARUS LOGIN SEBAGAI USER				
public function editdatapermintaanmenuuser(){
	//mengecek nama validation
	$this->form_validation->set_rules('No_Permintaan','No_Permintaan','required');

	if($this->form_validation->run() == TRUE)
	{
	$ubah = $this->input->post("Editfile");
		if($ubah == "Yes"){ 	
		$ubahnamafile = date('dmyHis');
		/* Start Uploading File */		
		if (isset($_FILES['Gambar_Lampiran']['name'])) {
			$config['upload_path'] = './DataFoto/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif|';
			$config['max_filename'] = '5000000';
			$config['maintain_ratio'] 	= TRUE;
			$config['encrypt_name'] = FALSE; //untuk merubah nama atau encryptr
			$config['max_size'] = '5120000'; 
			$config['file_name'] = $ubahnamafile; //untuk mengubah nama photo menjadi : 51photo.jpg atau 52photo.jpg
			
			if (file_exists('./DataFoto/' . $config['file_name'])) {
				echo "<script>alert('Nama File Sudah Ada, Silahkan Rename Nama File Anda..!!');</script>";
			} else {
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('Gambar_Lampiran')) { 
					echo "<script>alert('Jenis File Terlalu Besar, File Tidak Tersimpan, Silahkan Lihat Table Bahan Baku Dan Edit File Anda..!!');</script>";
				//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				} else {
					echo "<script>alert('Kode Permintaan sama dengan data yang telah ada');</script>";
					//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				}
            }
		}
		
		$this->Tiket_Model->updatedatapermintaanmenuuser();
		}else if($ubah == "No"){
		$this->Tiket_Model->updatedatapermintaanmenuuser();
		}	
		
			
	}	
	
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;
$data['dataarray']= $this->Tiket_Model->datapermintaanarray($id);
$this->load->view('V_EditPermintaan',$data);
}
///////////////////////////////////////////////////


//CONTROLER UNTUK MENAMPILKAN PRINT PERMINTAAN YANG AKAN DI TANGGAPI ADMIN
public function tanggapanadmin(){
	$id1 = $this->uri->segment(3);
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$No_Permintaan = $id1.'/'.$id2.'/'.$id3;
	$data['data_permintaan'] = $this->Tiket_Model->printpermintaan($No_Permintaan);
	//mengecek nama validation
	$this->form_validation->set_rules('No_Permintaan','No_Permintaan','required');


	if($this->form_validation->run() == TRUE)
	{
	$ubah = $this->input->post("Editfile");
		if($ubah == "Yes"){ 	
		$ubahnamafile = date('dmyHis');
		/* Start Uploading File */		
		if (isset($_FILES['Gambar_Lampiran']['name'])) {
			$config['upload_path'] = './DataFoto/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif|';
			$config['max_filename'] = '5000000';
			$config['maintain_ratio'] 	= TRUE;
			$config['encrypt_name'] = FALSE; //untuk merubah nama atau encryptr
			$config['max_size'] = '5120000'; 
			$config['file_name'] = $ubahnamafile; //untuk mengubah nama photo menjadi : 51photo.jpg atau 52photo.jpg
			
			if (file_exists('./DataFoto/' . $config['file_name'])) {
				echo "<script>alert('Nama File Sudah Ada, Silahkan Rename Nama File Anda..!!');</script>";
			} else {
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('Gambar_Lampiran')) { 
					echo "<script>alert('Jenis File Terlalu Besar, File Tidak Tersimpan, Silahkan Lihat Table Bahan Baku Dan Edit File Anda..!!');</script>";
				//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				} else {
					echo "<script>alert('Kode Permintaan sama dengan data yang telah ada');</script>";
					//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				}
            }
		}
		
		$this->Tiket_Model->tanggapiadmin();
		}else if($ubah == "No"){
			$this->Tiket_Model->tanggapiadmin();
		}	
		
			
	}	
	
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;
$data['dataarray']= $this->Tiket_Model->datapermintaanarray($id);
$this->load->view('V_tanggapanadmin',$data);
}
///////////////////////////////////////////////////



//CONTROLER UNTUK SAVE KE TABLE PERMINTAAN YANG DI TOLAK
//HANYA LOGIN SEBAGAI APPROVER YANG BISA MENGAKSES INI
public function tolak_permintaan(){
	$id1 = $this->uri->segment(3);
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$No_Permintaan = $id1.'/'.$id2.'/'.$id3;
	$data['data_permintaan'] = $this->Tiket_Model->printpermintaan($No_Permintaan);
	//mengecek nama validation
	$this->form_validation->set_rules('No_Permintaan','No_Permintaan','required');


	if($this->form_validation->run() == TRUE)
	{
	$ubah = $this->input->post("Editfile");
		if($ubah == "Yes"){ 	
		$ubahnamafile = date('dmyHis');
		/* Start Uploading File */		
		if (isset($_FILES['Gambar_Lampiran']['name'])) {
			$config['upload_path'] = './DataFoto/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif|';
			$config['max_filename'] = '5000000';
			$config['maintain_ratio'] 	= TRUE;
			$config['encrypt_name'] = FALSE; //untuk merubah nama atau encryptr
			$config['max_size'] = '5120000'; 
			$config['file_name'] = $ubahnamafile; //untuk mengubah nama photo menjadi : 51photo.jpg atau 52photo.jpg
			
			if (file_exists('./DataFoto/' . $config['file_name'])) {
				echo "<script>alert('Nama File Sudah Ada, Silahkan Rename Nama File Anda..!!');</script>";
			} else {
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('Gambar_Lampiran')) { 
					echo "<script>alert('Jenis File Terlalu Besar, File Tidak Tersimpan, Silahkan Lihat Table Bahan Baku Dan Edit File Anda..!!');</script>";
				//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				} else {
					echo "<script>alert('Kode Permintaan sama dengan data yang telah ada');</script>";
					//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				}
            }
		}
		$this->Tiket_Model->Save_table_Penolakan();
		$this->Tiket_Model->penerimaanpermintaan();
		}else if($ubah == "No"){
			$this->Tiket_Model->Save_table_Penolakan();
			$this->Tiket_Model->penerimaanpermintaan();

		}	
		
			
	}	
	
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;
$data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);

//Bagian Save


$this->load->view('V_printapprover',$data);
}
///////////////////////////////////////////////////



//CONTROLER UNTUK MENAMPILKAN DATA YANG DI TOLAK DENGAN SYARAT HARUS LOGIN TERLEBIH DAHULU
public function data_tolak_approver(){

		$data['datanya'] = $this->Tiket_Model->listdatapermintaanditolak();
		$this->load->view('header_approver_data');
		$this->load->view('V_datapermintaanumum_ditolak',$data);
	}
///////////////////////////////////////////////////

//CONTROLER UNTUK MENAMPILKAN DATA YANG DI TERIMA DENGAN SYARAT HARUS LOGIN TERLEBIH DAHULU
public function data_terima_approver(){

		$data['datanya'] = $this->Tiket_Model->listdatapermintaanditerima();
		$this->load->view('header_approver_data');
		$this->load->view('V_datapermintaanumum_diterima',$data);
	}
///////////////////////////////////////////////////


public function data_permintaan_diterima_admin(){

		$data['datanya'] = $this->Tiket_Model->listdatapermintaanditerima();
		$this->load->view('headeradmin_kelolauser');
		$this->load->view('V_Permintaanyangditerima',$data);
	}


public function data_permintaan_ditolak_admin(){

		$data['datanya'] = $this->Tiket_Model->listdatapermintaanditolak();
		$this->load->view('headeradmin_kelolauser');
		$this->load->view('V_Permintaanyangditolak',$data);
	}


//CONTROLER UNTUK SAVE KE TABLE PERMINTAAN YANG DI TERIMA
//HANYA LOGIN SEBAGAI APPROVER YANG BISA MENGAKSES INI
public function approve_permintaan(){
	$id1 = $this->uri->segment(3);
	$id2 = $this->uri->segment(4);
	$id3 = $this->uri->segment(5);
	$No_Permintaan = $id1.'/'.$id2.'/'.$id3;
	$data['data_permintaan'] = $this->Tiket_Model->printpermintaan($No_Permintaan);
	//mengecek nama validation
	$this->form_validation->set_rules('No_Permintaan','No_Permintaan','required');


	if($this->form_validation->run() == TRUE)
	{
	$ubah = $this->input->post("Editfile");
		if($ubah == "Yes"){ 	
		$ubahnamafile = date('dmyHis');
		/* Start Uploading File */		
		if (isset($_FILES['Gambar_Lampiran']['name'])) {
			$config['upload_path'] = './DataFoto/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif|';
			$config['max_filename'] = '5000000';
			$config['maintain_ratio'] 	= TRUE;
			$config['encrypt_name'] = FALSE; //untuk merubah nama atau encryptr
			$config['max_size'] = '5120000'; 
			$config['file_name'] = $ubahnamafile; //untuk mengubah nama photo menjadi : 51photo.jpg atau 52photo.jpg
			
			if (file_exists('./DataFoto/' . $config['file_name'])) {
				echo "<script>alert('Nama File Sudah Ada, Silahkan Rename Nama File Anda..!!');</script>";
			} else {
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
                if (!$this->upload->do_upload('Gambar_Lampiran')) { 
					echo "<script>alert('Jenis File Terlalu Besar, File Tidak Tersimpan, Silahkan Lihat Table Bahan Baku Dan Edit File Anda..!!');</script>";
				//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				} else {
					echo "<script>alert('Kode Permintaan sama dengan data yang telah ada');</script>";
					//redirect('C_tiket/permintaanbaru'); ini ga boleh di taro disini, kalo di taro disini dia jika berhasil ga bklan jalanin proses selanjutnya yg di bawah sintax ini
				}
            }
		}
		$this->Tiket_Model->Save_table_Penerimaan();
		$this->Tiket_Model->penerimaanpermintaan();
		}else if($ubah == "No"){
			$this->Tiket_Model->Save_table_Penerimaan();
			$this->Tiket_Model->penerimaanpermintaan();

		}	
		
			
	}	
	
$id1 = $this->uri->segment(3); //ngelempar primary key untuk di taro di controller pada view, liat deh a href nya di view
$id2 = $this->uri->segment(4);
$id3 = $this->uri->segment(5);
$id = $id1.'/'.$id2.'/'.$id3;
$data['data_permintaan']= $this->Tiket_Model->datapermintaanarray($id);

//Bagian Save


$this->load->view('V_printapprover',$data);
}
///////////////////////////////////////////////////


//CONTROLER UNTUK LOGIN SESSION YANG DI KIRIM DARI CONTROLER LOGIN
    public function home(){

        $ambil_data 	= $this->Tiket_Model->ambil_user($this->session->userdata('user_data'));
        $user_sess		= $this->session->userdata('user_data');
        $stat			= $this->session->userdata('level_data');
        $dt_user		= $this->db->query("SELECT * FROM user ORDER BY status ASC, username ASC")->result();
				
		$data = array(
			'user'       => $ambil_data,
			'data_user'	 => $dt_user,				
        );
        if($stat == 1){
        	$data['datanya'] = $this->Tiket_Model->listdatapermintaan();
            $this->load->view('header_approver',$data);
            $this->load->view('V_Approver',$data);
        }else if($stat == 2){
        		$data['datatablepermintaan'] = $this->Tiket_Model->listdatapermintaan();
        		$this->load->view('headeradmin',$data);
				$this->load->view('V_menuadmin',$data);
        }else if($stat == 3){
        	$data['data_tablepermintaan'] = $this->Tiket_Model->listdatapermintaan();
				$this->load->view('header_user',$data);
			$this->load->view('V_menuuser',$data);
     	}else{
        	$this->session->sess_destroy();
        	redirect('login');
        }
    }
}

			
