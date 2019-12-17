<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Hallo Selamat Datang';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer');
    }

    public function produk()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['produk'] = $this->db->get('barang')->result_array();
        $data['title'] = 'Produk';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/produk', $data);
        $this->load->view('template/footer');
    }

    public function tambahProduk()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Produk';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/tambah_produk', $data);
        $this->load->view('template/footer');
    }

    public function tambahact()
    {
        $nama = $this->input->post('nama');
        $type = $this->input->post('type');
        $harga = $this->input->post('harga');

        $this->form_validation->set_rules('nama', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
        if ($this->form_validation->run() != false) {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/image/barang/';
            $config['file_name'] = 'TMimage';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();

                $data = array(
                    'nama_barang' => $nama,
                    'type' => $type,
                    'harga' => $harga,
                    'gambar' => $gambar['file_name']
                );
                $this->db->insert('barang', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Telah Ditambahkan</div>');
                redirect('admin/produk');
            } else {
                $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                $data['title'] = 'Tambah Produk';
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('admin/tambah_produk', $data);
                $this->load->view('template/footer');
            }
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_musik->getby($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_musik->getby($id);

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('type', 'Type', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('template/footer');
        } else {
            $id_barang = $id;
            $nama_barang = $this->input->post('nama');
            $type = $this->input->post('type');
            $harga = $this->input->post('harga');

            // Apakah ada gambar ?
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/image/barang/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('harga', $harga);
            $this->db->set('type', $type);
            $this->db->set('nama_barang', $nama_barang);
            $this->db->where('id_barang', $id_barang);
            $this->db->update('barang');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Di Update!</div>');
            redirect('admin/produk');
        }
    }

    public function delete($id)
    {
        $this->M_musik->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terhapus</div>');
        redirect('admin/produk');
    }
}
