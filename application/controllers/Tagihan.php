<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan  extends CI_Controller
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
        $this->load->view('List.tagihan.php', $data);
    }
    public function add()
    {
        $data['instansi'] = $this->M_instansi->tampil_data();
        $this->load->view('Add.tagihan.php', $data);
    }
    public function simpan()
    {
        date_default_timezone_set("Asia/Jakarta");
        $kode_instansi = $this->input->post('kode_instansi');
        $wilayah = $this->input->post('wilayah');
        $spb = $this->input->post('spb');
        $tagihan = $this->input->post('tagihan');
        $faktur_pajak = $this->input->post('faktur_pajak');
        $jumlah_tagihan = $this->input->post('jumlah_tagihan');
        $potongan_1 = $jumlah_tagihan / 0.1 / 0.11;
        $potongan_2 = $potongan_1 * 0.015;
        $total_pembayaran = $potongan_1 -  $potongan_2;
        $tanggal_bayar = $this->input->post('tanggal_bayar');
        $do_diterima = $this->input->post('do_diterima');
        $hari = $this->input->post('hari');
        $tanggal =  date('Y-m-d h:i:s');

        $data = array(
            'kode_instansi' => $kode_instansi,
            'wilayah' => $wilayah,
            'spb' => $spb,
            'tagihan' => $tagihan,
            'faktur_pajak' => $faktur_pajak,
            'jumlah_tagihan' => $jumlah_tagihan,
            'potongan_1' => $potongan_1,
            'potongan_2' => $potongan_2,
            'total_pembayaran' => $total_pembayaran,
            'tanggal_bayar' => $tanggal_bayar,
            'do_diterima' => $do_diterima,
            'hari' => $hari,
            'tanggal' => $tanggal
        );

        $this->M_tagihan->input_data($data, 'tbl_penagihan');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Tagihan');
    }
    public function delete($id)
    {
        $id = $this->input->post('id');
        $this->M_tagihan->delete_data($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Tagihan');
    }
    function edit($id)
    {
        $data['data_penagihan'] = $this->M_tagihan->get_data_by_id($id, 'tbl_penagihan');
        $data['instansi'] = $this->M_instansi->tampil_data();
        $this->load->view('Edit.tagihan.php', $data);
    }

    function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id');
        $kode_instansi = $this->input->post('kode_instansi');
        $wilayah = $this->input->post('wilayah');
        $spb = $this->input->post('spb');
        $tagihan = $this->input->post('tagihan');
        $faktur_pajak = $this->input->post('faktur_pajak');
        $jumlah_tagihan = $this->input->post('jumlah_tagihan');
        $potongan_1 = $jumlah_tagihan / 0.1 / 0.11;
        $potongan_2 = $potongan_1 * 0.015;
        $total_pembayaran = $potongan_1 -  $potongan_2;
        $tanggal_bayar = $this->input->post('tanggal_bayar');
        $do_diterima = $this->input->post('do_diterima');
        $hari = $this->input->post('hari');
        $tanggal =  date('Y-m-d h:i:s');

        $data = array(
            'kode_instansi' => $kode_instansi,
            'wilayah' => $wilayah,
            'spb' => $spb,
            'tagihan' => $tagihan,
            'faktur_pajak' => $faktur_pajak,
            'jumlah_tagihan' => $jumlah_tagihan,
            'potongan_1' => $potongan_1,
            'potongan_2' => $potongan_2,
            'total_pembayaran' => $total_pembayaran,
            'tanggal_bayar' => $tanggal_bayar,
            'do_diterima' => $do_diterima,
            'hari' => $hari,
            'tanggal' => $tanggal
        );
        $where = array(
            'id' => $id
        );

        $this->M_tagihan->update_data($where, $data, 'tbl_penagihan');
        echo $this->session->set_flashdata('msg', 'info-update');
        redirect('Tagihan');
    }
}
