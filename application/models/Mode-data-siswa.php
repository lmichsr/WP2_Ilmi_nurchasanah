<?php
class Modeldatasiswa extends CI_Model
{
    public function index()

    {
        $this->load->view (view-form-datasiswa);

    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nama' => $this->input->post('nama'),
            'nama' => $this->input->post('nama'),
            'nama' => $this->input->post('nama'),
            'nama' => $this->input->post('nama'),
            'nama' => $this->input->post('nama')
        ];

        $this->load->view('view-data-siswa', $data);
    }
}
