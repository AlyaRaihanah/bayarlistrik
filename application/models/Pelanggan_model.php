<?php

class Pelanggan_model extends CI_Model
{
    public function getAllPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function tambahDataPelanggan()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'no_telp' => $this->input->post('no_telp', true),
            'alamat' => $this->input->post('alamat', true),
            'email' => $this->input->post('email', true),
            'no_kwh' => $this->input->post('no_kwh', true),
            'id_tarif' => $this->input->post('id_tarif', true)

        ];

        $this->db->insert('pelanggan', $data);
    }

    public function hapusDataPelanggan($id)

    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }

    public function getPelangganById($id)
    {
        return $this->db->get_where('pelanggan', ['id_pelanggan' => $id])->row_array();
    }

    public function editDataPelanggan()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'no_telp' => $this->input->post('no_telp', true),
            'alamat' => $this->input->post('alamat', true),
            'email' => $this->input->post('email', true),
            'no_kwh' => $this->input->post('no_kwh', true),
            'id_tarif' => $this->input->post('id_tarif', true)

        ];

        $this->db->where('id_pelanggan', $this->input->post('id'));
        $this->db->update('pelanggan', $data);
    }
}
