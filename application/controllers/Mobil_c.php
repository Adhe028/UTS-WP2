<?php 

class Mobil_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
        $this->load->library('form_validation');

        $this->load->model("Session_model");
        if($this->Session_model->belumLogin()) redirect(site_url('login'));

    }
    public function index()
    {
        $data['mobil'] = $this->Mobil_model->view();
        $this->load->view('mobil', $data);
    }


    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data mobil';  //judul
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('nopol', 'Nopol', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tambah', $data);
        } else {
            $this->Mobil_model->tambah();
            redirect('Mobil_c');
        }
    }

    public function hapus($id)
    {
        $this->Mobil_model->hapus($id);
        redirect('mobil_c');
    }



    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['mobil'] = $this->Mobil_model->getById($id);

        $validation->set_rules('merk', 'Merk', 'required');
        $validation->set_rules('warna', 'Warna', 'required');
        $validation->set_rules('nopol', 'Nopol', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->Mobil_model->ubah();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('mobil_c');
        }
    }

}