<?php

class Transaksi_model extends CI_Model
{
    public function getAllTarif()
    {
        return $this->db->get('tarif')->result_array();
    }

    public function tambahTarif()
    {
        $data = [
            'id_tarif' => $this->input->post('id_tarif', true),
            'daya_per_va' => $this->input->post('daya_per_va', true),
            'tarif_per_kwh' => $this->input->post('tarif_per_kwh', true),

        ];

        $this->db->insert('tarif', $data);
    }

    public function hapusDatatarif($id)

    {
        $this->db->where('id', $id);
        $this->db->delete('tarif');
    }

    public function getTarifById($id)
    {
        return $this->db->get_where('tarif', ['id' => $id])->row_array();
    }

    public function editDataTarif()
    {
        $data = [
            'id_tarif' => $this->input->post('id_tarif', true),
            'daya_per_va' => $this->input->post('daya_per_va', true),
            'tarif_per_kwh' => $this->input->post('tarif_per_kwh', true),


        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tarif', $data);
    }
}
