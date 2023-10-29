<?php

class Autentifikasi extends CI_Controller
{
    public function index()

    {
        // jika statusnya sudah login, maka tidak bisa mengakses
        // halaman login, alias dikembalikan ke tampilan user

        if ($this->session ->userdata("email")) {
            redirect ('user');
        }
        $this->form_validation ->set_rules('email','Alamat Email', 'required|trim|required|valid_email', [
            'required'=> 'Email Harus Diisi'
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        
        $this->form_validation->set_rules('kata sandi','Kata Sandi', 'required|trim', [
            'required'=> 'Kata Sandi Harus Diisi' 
            ]);

            if ($this->form_validation->run() == FALSE) {   
                $data['judul'] = 'Masuk';
                $data['user'] = '';
                $this->load->view('templates/aute_header', $data);
                $this->load->view('autentifikasi/login');
                $this->load->view('templates/aute_footer');
            } else {
                $this->_login();
            }
    }

private function _login()
{
    $email = htmlspecialchars($this->input->post('email', true));
    $katasandi = $this->ModelUser->cekData(['email'=>$email])->row_array();

    // Jika usernya ada
    if ($user) {
        // Jika usernya aktif
        if ($user['is_active'])
    }

    
}









