<?php

class Mobil_model extends CI_Model
{
    private $_table = "mobil";

    public function view()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambah()
    {
        $data = array(
            'merk' => $this->input->post('merk', true),
            'warna' => $this->input->post('warna', true),
            'nopol' => $this->input->post('nopol', true),
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }


    public function ubah()
    {
        $data = array(
            'merk' => $this->input->post('merk'),
            'warna' => $this->input->post('warna'),
            'nopol' => $this->input->post('nopol'),
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    }
}