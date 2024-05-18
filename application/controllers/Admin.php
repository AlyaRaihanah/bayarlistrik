<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function datapelanggan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pelanggan_model');

        $data['judul'] = 'Data Pelanggan';

        $data['pelanggan'] = $this->Pelanggan_model->getAllPelanggan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/datapelanggan', $data);
        $this->load->view('templates/footer');
    }

    public function TambahPelanggan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pelanggan_model');
        $data['judul'] = 'Form Tambah Data Pelanggan';


        //form validasi untuk mengisi tambah data pelanggan
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_kwh', 'No Kwh', 'required|numeric');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/tambahpelanggan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pelanggan_model->tambahDataPelanggan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/datapelanggan');
        }
    }

    public function hapuspelanggan($id)
    {
        $this->load->model('Pelanggan_model');
        $this->Pelanggan_model->hapusDataPelanggan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/datapelanggan');
    }

    public function editpelanggan($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pelanggan_model');
        $this->load->model('Transaksi_model');
        $data['judul'] = 'Form Edit Data Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
        $data['tarif'] = $this->Transaksi_model->getAllTarif();


        //form validasi untuk mengisi tambah data pelanggan
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_kwh', 'No Kwh', 'required|numeric');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/editpelanggan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pelanggan_model->editDataPelanggan();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('admin/datapelanggan');
        }
    }




    public function users()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getAllUser();

        $data['judul'] = 'User';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        //$this->load->view('templates/topbar');
        $this->load->view('admin/users', $data);
        $this->load->view('templates/footer');
    }
}
