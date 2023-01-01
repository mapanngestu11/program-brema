<?php defined('BASEPATH') or exit('No direct script access allowed');

class Laporan  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_instansi');
        $this->load->model('M_tagihan');


        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $data['data_penagihan'] = $this->M_tagihan->tampil_data();
        $this->load->view('List.laporan.php', $data);
    }
    function cek_tanggal()
    {
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');

        $data['laporan'] = $this->M_tagihan->laporan($tgl1, $tgl2);
        $this->load->view('Laporan.php', $data);
    }
}
