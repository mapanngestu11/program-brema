<?php defined('BASEPATH') or exit('No direct script access allowed');

class Homepage  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_user');
        $this->load->model('M_tagihan');
        $this->load->model('M_pengajuan');
        $this->load->model('M_instansi');

        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $data['user'] = $this->M_user->jumlah_data()->result();
        $data['tagihan'] = $this->M_tagihan->jumlah_data()->result();
        $data['transaksi'] = $this->M_pengajuan->jumlah_data()->result();
        $data['instansi'] = $this->M_instansi->jumlah_data()->result();
        $data['pengajuan'] = $this->M_pengajuan->jumlah_pengajuan()->result();

        // var_dump($data['pengajuan']);
        // die;
        $this->load->view('Homepage.php', $data);
    }
}
