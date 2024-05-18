<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function tagihan()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Tagihan'; {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('transaksi/tagihan', $data);
            $this->load->view('templates/footer');
        }
    }


    public function tarif()
    {
        $this->load->model('Transaksi_model');

        $data['judul'] = 'Tarif';

        $data['tarif'] = $this->Transaksi_model->getAllTarif();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('transaksi/tarif', $data);
        $this->load->view('templates/footer');
    }

    public function tambahtarif()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Transaksi_model');

        $data['judul'] = 'Form Tambah Data Tarif';


        //form validasi untuk mengisi tambah data pelanggan
        $this->form_validation->set_rules('id_tarif', 'ID Tarif', 'required');
        $this->form_validation->set_rules('daya_per_va', 'Daya / VA', 'required|numeric');
        $this->form_validation->set_rules('tarif_per_kwh', 'Tarif / KWH', 'required|numeric');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('transaksi/tambahtarif');
            $this->load->view('templates/footer');
        } else {
            $this->Transaksi_model->tambahTarif();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/tarif');
        }
    }


    public function hapustarif($id)
    {
        $this->load->model('Transaksi_model');
        $this->Transaksi_model->hapusDataTarif($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('transaksi/tarif');
    }
    public function edittarif($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Transaksi_model');
        $data['judul'] = 'Form Edit Data Tarif';

        $data['tarif'] = $this->Transaksi_model->getTarifById($id);


        //form validasi untuk mengisi tambah data pelanggan
        $this->form_validation->set_rules('id_tarif', 'ID Tarif', 'required');
        $this->form_validation->set_rules('daya_per_va', 'No Telp', 'required');
        $this->form_validation->set_rules('tarif_per_kwh', 'Tarif per KWH', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('transaksi/edittarif', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Transaksi_model->editDataTarif();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('transaksi/tarif');
        }
    }
}
