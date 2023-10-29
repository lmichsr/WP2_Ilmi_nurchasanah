<?php
class Datasiswa extends CI_Controller

{
    public function index()
    {

        $this->load->view('view-form-datasiswa');

    }

    public function cetak()
{
        $this->form_validation->set_rules('nis', 'NIS',
        'required|min_length[3]', [
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Siswa',
        'required|min_length[3]', [
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas',
        'required|min_length[3]', [
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek'
        ]);

        $this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir',
        'required|min_length[3]', [
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek'
        ]);

        $this->form_validation->set_rules('tempatlahir', 'Tempat Lahir',
        'required|min_length[3]', [
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Siswa',
        'required|min_length[3]', [
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek'
        ]);

        {
        if ($this->form_validation->run() != true) 
        
        {
            $this->load->view('view-form-datasiswa');
        } 
        else {
            $data = [
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama'),

            ];
            $this->load->view('view-data-siswa', $data);
            }
        }
}