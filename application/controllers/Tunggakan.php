<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tunggakan  extends CI_Controller
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
        $data['data_penagihan'] = $this->M_tagihan->tampil_data_belum_lunas();
        $this->load->view('List.tunggakan.php', $data);
    }
    public function add()
    {
        $data['instansi'] = $this->M_instansi->tampil_data();
        $this->load->view('Add.tagihan.php', $data);
    }

    function edit($id)
    {
        $data['data_penagihan'] = $this->M_tagihan->get_data_by_id($id, 'tbl_penagihan');
        $data['instansi'] = $this->M_instansi->tampil_data();
        $this->load->view('Edit.tagihan.php', $data);
    }
}
