
<?php 
class Tiket_Model extends CI_Model{



//MODEL UNTUK MEMBUAT KODE ID YANG DI AMBIL DARI URUTAN NO_PERMINTAAN, TEKS DAN TANGGAL
public function kodeid(){
	$q = $this->db->query("select left(No_Permintaan,5) as No_Permintaan from permintaan order by No_Permintaan DESC LIMIT 1");
		
		$kodeakhir;
		$kodejadi;
		$date = date('Y');
		if(!empty($q->result())){
			foreach($q->result() as $ka){
				$kodeakhir = $ka->No_Permintaan;
			}
			//$no = substr($kodeakhir,5,10);
			$no = $kodeakhir;
			$intno = (int)$no;
			$next = $intno+1;
				
				//buat nol
				$nol = '';
				$Pintno = strlen($next);
				for($i = 1; $i <= 5-$Pintno; $i++){
					$nol = $nol.'0';
				}
				$kodejadi = $nol.$next.'/HELP/'.$date;
		}
		else{
			$kodejadi = '00001'.'/HELP/'.$date;
		}
		return $kodejadi;
}
//////////////////////////////////////////////////////////////////////////////////////

//AUTOCOMPLITE PADA FORM PERMINTAAN
	function search_name($NPK){
		$this->db->like('NPK', $NPK , 'both');
		$this->db->order_by('NPK', 'ASC');
		$this->db->limit(10);
		return $this->db->get('user')->result();
	}
/////////////////////////////////////////////////


//MODEL UNTUK MENYIMPAN DATA PERMINTAAN
	public function simpandatapermintaan(){
	$file = $this->upload->data(); 
	
	$data = array(       
	'No_Permintaan'=>$this->input->post('No_Permintaan'),
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK')
	);
	$this->db->insert('permintaan',$data);
	
	}
////////////////////////////////////////////////////////////////////////////////////// 

public function ambilnamauser($id){
		$q = $this->db->query("select * from user where username='$id' ");
		return  $q->row_array();
	}

//MODEL UNTUK MENAMPILKAN DATA DARI DATBEL PERMINTAAN
public function datapermintaanarray($id){
		$q = $this->db->query("select * from permintaan where No_Permintaan='$id' ");
		return  $q->row_array();
	}
////////////////////////////////////////////////////////////////////////////////////// 


public function userarray($id){
		$q = $this->db->query("select * from user where username='$id' ");
		return  $q->row_array();
	}

public function editusernya(){
	$data = array(      
	'username'=>$this->input->post('username'),
	'password'=>$this->input->post('password'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'NPK'=>$this->input->post('NPK'),
	'Divisi'=>$this->input->post('Divisi'),
	'level'=>$this->input->post('level'),
	'status'=>$this->input->post('status')

	);
	$this->db->where('username',$this->input->post('username'));
	$this->db->update('user',$data);
	redirect(base_url("C_tiket/kelolauser"));
	}



//MODEL UNTUK UPDATE PERMINTAAN DENGAN LOGIN SEBAGAI USER
public function updatedatapermintaanmenuuser(){
	$file = $this->upload->data();
	
	$ubah = $this->input->post('Editfile');
	
	if($ubah == "Yes"){
		unlink ('DataFoto/'.$this->input->post('Gambar_Lama'));
		
		$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK')
	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	
	redirect(base_url("C_tiket/home")); 
	
	}
	else if($ubah == "No"){
		
	$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$this->input->post('Gambar_Lama'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK')
	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	redirect(base_url("C_tiket/home")); 
	}
	
	
	}
//////////////////////////////////////////////////////////////////////////////////////




//MODEL UNTUK MENAMPILKAN PERMINTAAN DARI USER DAN MENAMBAH KETERANGAN OLEH ADMIN
public function niali_implementasi(){
	$file = $this->upload->data();
	
	$ubah = $this->input->post('Editfile');
	
	if($ubah == "Yes"){
		unlink ('DataFoto/'.$this->input->post('Gambar_Lama'));
		
		$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK')
	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	
	redirect(base_url("C_tiket/home")); 
	
	}
	else if($ubah == "No"){
		
	$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$this->input->post('Gambar_Lama'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Penilaian_pengerjaan'=>$this->input->post('Penilaian_pengerjaan'),
	'Ulasan_Implementasi'=>$this->input->post('Ulasan_Implementasi')

	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	redirect(base_url("C_tiket/home")); 
	}
	
	
	}
//////////////////////////////////////////////////////////////////////////////////////

public function tanggapiadmin(){
	$file = $this->upload->data();
	
	$ubah = $this->input->post('Editfile');
	
	if($ubah == "Yes"){
		unlink ('DataFoto/'.$this->input->post('Gambar_Lama'));
		
		$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK')
	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	
	redirect(base_url("C_tiket/home")); 
	
	}
	else if($ubah == "No"){
		
	$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$this->input->post('Gambar_Lama'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak')

	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	redirect(base_url("C_tiket/home")); 
	}
	
	
	}


//MODEL UNTUK MENYIMPAN DATA KE DALAM TABLE PERMINTAAN SETELAH PROSESS APPROVE OLEH APPROVER
public function penerimaanpermintaan(){
	$file = $this->upload->data();
	
	$ubah = $this->input->post('Editfile');
	
	if($ubah == "Yes"){
		unlink ('DataFoto/'.$this->input->post('Gambar_Lama'));
		
		$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Status_Permintaan'=>$this->input->post('Status_Permintaan'),
	'Keterangan_Diterima'=>$this->input->post('Keterangan_Diterima')	
	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	
	redirect(base_url("C_tiket/home")); 
	
	}
	else if($ubah == "No"){
		
	$data = array(  
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$this->input->post('Gambar_Lama'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Status_Permintaan'=>$this->input->post('Status_Permintaan'),
	'Keterangan_Diterima'=>$this->input->post('Keterangan_Diterima')


	);
	
	$this->db->where('No_Permintaan',$this->input->post('No_Permintaan'));
	$this->db->update('permintaan',$data);
	redirect(base_url("C_tiket/home")); 
	}
	
	}
//////////////////////////////////////////////////////////////////////////////////////

//MODEL UNTUK MENYIMPAN DATA PERMINTAAN YANG DI TERIMA KE DALAM TABLE PERMINTAAN_DITERIMA SETELAH PROSESS APPROVE OLEH APPROVER
public function Save_table_Penerimaan(){
	$file = $this->upload->data(); 
	
	$data = array(       
	'No_Permintaan'=>$this->input->post('No_Permintaan'),
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Status_Permintaan'=>$this->input->post('Status_Permintaan'),
	'Keterangan_Diterima'=>$this->input->post('Keterangan_Diterima')
	);
	$this->db->insert('permintaan_diterima',$data);

}
//////////////////////////////////////////////////////////////////////////////////////



//MODEL UNTUK MENYIMPAN DATA PERMINTAAN YANG DI TOLAK KE DALAM TABLE PERMINTAAN_DITOLAK SETELAH PROSESS APPROVE OLEH APPROVER
public function Save_table_Penolakan(){
	$file = $this->upload->data(); 
	
	$data = array(       
	'No_Permintaan'=>$this->input->post('No_Permintaan'),
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Gambar_Lampiran'=>$file['file_name'],
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Status_Permintaan'=>$this->input->post('Status_Permintaan'),
	'Keterangan_Diterima'=>$this->input->post('Keterangan_Diterima')
	);
	$this->db->insert('permintaan_ditolak',$data);

}


//MODEL UNTUK HAPUS DATA PERMINTAAN
public function hapusdatatablepermintaan($where){
	$this->db->where('No_Permintaan',$where);
	$this->db->delete('permintaan');
	return true;
}
//////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK HAPUS DATA PERMINTAAN
public function hapusdatatablepermintaanyangditolak($where){
	$this->db->where('No_Permintaan',$where);
	$this->db->delete('permintaan_ditolak');
	return true;
}
//////////////////////////////////////////////////////////////////////////////////////

//MODEL UNTUK HAPUS DATA PERMINTAAN
public function hapusdatatablepermintaanyangditerima($where){
	$this->db->where('No_Permintaan',$where);
	$this->db->delete('permintaan_diterima');
	return true;
}
//////////////////////////////////////////////////////////////////////////////////////



//MODEL UNTUK HAPUS DATA USER
public function hapususernamenya($where){
	$this->db->where('username',$where);
	$this->db->delete('user');
	return true;
}
//////////////////////////////////////////////////////////////////////////////////////

//MODEL UNTUK MENAMPILKAN SEMUA DATA PERMINTAAN
public function listdatapermintaan(){
		$q = $this->db->query("select * from permintaan");
		return  $q->result();
	}


//MODEL UNTUK MENAMPILKAN SEMUA DATA PERMINTAAN PADA TABLE PERMINTAAN YANG DI TERIMA
public function listdatapermintaanditerima(){
		$q = $this->db->query("select * from permintaan_diterima");
		return  $q->result();
	}
//////////////////////////////////////////////////////////////////////////////////////



//MODEL UNTUK MENAMPILKAN SEMUA DATA PERMINTAAN PADA TABLE PERMINTAAN YANG DI TOLAK
public function listdatapermintaanditolak(){
		$q = $this->db->query("select * from permintaan_ditolak");
		return  $q->result();
	}
//////////////////////////////////////////////////////////////////////////////////////



//MODEL UNTUK MENAMPILKAN SEMUA DATA USER
public function listdatauser(){
		$q = $this->db->query("select * from user");
		return  $q->result();
	}
//////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK MENAMPILKAN DATA PERMINTAAN BERDASARKAN ID
public function printpermintaan($No_Permintaan){
		$q = $this->db->query("select * from permintaan where No_Permintaan='$No_Permintaan'");
		return  $q->row_array();

}
//////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK MENYIMPAN DATA USER KE DALA TABLE USER
public function simpanuser(){
	$data = array(      
	'username'=>$this->input->post('username'),
	'password'=>$this->input->post('password'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'NPK'=>$this->input->post('NPK'),
	'Divisi'=>$this->input->post('Divisi'),
	'level'=>$this->input->post('level'),
	'status'=>$this->input->post('status')

	);
	$this->db->insert('user',$data);
	
	}



//MODEL UNTUK CEK USER PADA TABLE USER
function cek_user($username="",$password="",$status_aktif="")
	{
		//$query = $this->db->query("SELECT * FROM user WHERE username ='$username' AND password='$password' AND status='1' ");
		$query = $this->db->get_where('user',array('username' => $username, 'password' => $password, 'status' => '1'));
		$query = $query->result_array();
		return $query;
	}
//////////////////////////////////////////////////////////////////////////////////////

// MODEL JOIN

//  public function tampiljoinpermintaan(){
//    $this->db->select('permintaan_diterima.*, permintaan.No_Permintaan, permintaan.Level_Urgency, permintaan.Jenis_Permintaan, permintaan.Nama_User, permintaan.Divisi'); //mengambil semua data dari tabel data_users dan users
//    $this->db->from('permintaan_diterima'); //dari tabel data_users
//    $this->db->join('permintaan', 'permintaan.No_Permintaan = permintaan_diterima.No_Permintaan', 'left'); //menyatukan tabel users menggunakan left join
//   $data = $this->db->get(); //mengambil seluruh data
//    return $data->result(); //mengembalikan data
  
//  }
///////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK SAVE PERMINTAAN DENGAN KETERANGAN DARI FORM PRINTAPPROPER
public function terimapermintaan(){		
		$data = array(
	'No_Permintaan'=>$this->input->post('No_Permintaan'), 
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Keterangan_Diterima'=>$this->input->post('Keterangan_Diterima')
	);
	 
	$this->db->insert('permintaan_diterima',$data);
}
///////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK MENAMPILKAN DATA YANG DI TERIMA
public function listpermintaanditerima(){

		$q = $this->db->query("select * from permintaan_diterima");
		return  $q->result();

}
///////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK SAVE KE DALAM TABLE PERMINTAAN YANG DI TOLAK
public function tolakpermintaan(){		
		$data = array( 
	'No_Permintaan'=>$this->input->post('No_Permintaan'),
	'Tanggal'=>$this->input->post('Tanggal'),
	'Level_Urgency'=>$this->input->post('Level_Urgency'),
	'Jenis_Permintaan'=>$this->input->post('Jenis_Permintaan'),
	'Uraian_Kebutuhan' =>$this->input->post('Uraian_Kebutuhan'),
	'Benefit'=>$this->input->post('Benefit'),
	'Lampiran'=>$this->input->post('Lampiran'),
	'Nama_User'=>$this->input->post('Nama_User'),
	'Divisi'=>$this->input->post('Divisi'),
	'NPK'=>$this->input->post('NPK'),
	'Business_Impact'=>$this->input->post('Business_Impact'),
	'Kesulitan_Pengerjaan'=>$this->input->post('Kesulitan_Pengerjaan'),
	'Estimasi_Waktu1'=>$this->input->post('Estimasi_Waktu1'),
	'Estimasi_Waktu2'=>$this->input->post('Estimasi_Waktu2'),
	'Dikerjakan_Oleh'=>$this->input->post('Dikerjakan_Oleh'),
	'Analisa_Dampak'=>$this->input->post('Analisa_Dampak'),
	'Keterangan_Ditolak'=>$this->input->post('Keterangan_Ditolak')
	);
	 
	$this->db->insert('permintaan_ditolak',$data);
}
///////////////////////////////////////////////////////////////////////////////////////


//MODEL UNTUK MENGAMBIL DATA USER BERDASARKAN ID USER
	function ambil_user($username)
        {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' ");
        $query = $query->result_array();
        if($query){
            return $query[0];
        }

	}       
}
?>