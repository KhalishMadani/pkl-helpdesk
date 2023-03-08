<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tiket_Model'); //memasukkan file model Login_model.php ke dalam controller
        $this->load->library('form_validation');
    }

   

    function do_login()
    {
        $username	  = $this->input->post("username");
        $password 	  = $this->input->post("password");
        $status_aktif = $this->input->post("status");
        
        $cek = $this->Tiket_Model->cek_user($username,($password),$status_aktif); //melakukan persamaan data dengan database
        if(count($cek) == 1){ //cek data berdasarkan nip & pass $ status
            foreach ($cek as $cek) {
                $level_cek 		  = $cek['level']; //mengambil data(level/hak akses) dari database
                $user_cek		  = $cek['username'];

            }
            $this->session->set_userdata(array(
                'isLogin'        => TRUE, //set data telah login
                'user_data'  	 => $user_cek, //set session username
                'level_data'     => $level_cek, //set session hak akses
            ));
            redirect('C_tiket/home','refresh');  //redirect ke halaman dashboard
        }else{ //jika data tidak ada yng sama dengan database
            echo "<script>alert('Maaf Username dan Password Salah !');history.go(-1);</script>";
           
        }
    }
    
	// fungsi untuk logout
function logout()
    {	
        $this->session->sess_destroy();
        redirect('http://localhost/helpdesk');
    }
} // end controller Login