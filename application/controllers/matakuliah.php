<?php
class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode matakuliah', 
'required|min_length[3]', [
            'required' => 'Kode matakuliah Harus diisi',
            'min_lenght' => 'Kode terlalu pendek'
        ]);
        $this->form_validation->set_rules('nama', 'Nama matakuliah', 
'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
             $this->load->view('view-data-matakuliah', $data);
        }
     }
}