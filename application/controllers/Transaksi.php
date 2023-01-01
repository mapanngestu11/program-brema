<?php defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_instansi');


        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $data['instansi'] = $this->M_instansi->tampil_data();
        $this->load->view('List.instansi.php', $data);
    }
    public function add()
    {
        $this->load->view('Add.transaksi.php');
    }
    public function simpan()
    {
        date_default_timezone_set("Asia/Jakarta");
        $kode_instansi = $this->input->post('kode_instansi');
        $nama = $this->input->post('nama');
        $wilayah = $this->input->post('wilayah');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $keterangan = $this->input->post('keterangan');
        $tanggal =  date('Y-m-d h:i:s');

        $data = array(
            'kode_instansi' => $kode_instansi,
            'nama' => $nama,
            'wilayah' => $wilayah,
            'alamat' => $alamat,
            'telp' => $telp,
            'email' => $email,
            'keterangan' => $keterangan,
            'tanggal' => $tanggal
        );

        $this->M_instansi->input_data($data, 'tbl_instansi');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Instansi');
    }
    public function delete($id)
    {
        $id = $this->input->post('id');
        $this->M_instansi->delete_data($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Instansi');
    }
    function edit($kode_instansi)
    {
        $where = array('kode_instansi' => $kode_instansi);
        $data['instansi'] = $this->M_instansi->get_data_by_id($where, 'tbl_instansi')->result();

        $this->load->view('Edit.instansi.php', $data);
    }

    function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $kode_instansi = $this->input->post('kode_instansi');
        $nama = $this->input->post('nama');
        $wilayah = $this->input->post('wilayah');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $keterangan = $this->input->post('keterangan');
        $tanggal =  date('Y-m-d h:i:s');

        $data = array(
            'kode_instansi' => $kode_instansi,
            'nama' => $nama,
            'wilayah' => $wilayah,
            'alamat' => $alamat,
            'telp' => $telp,
            'email' => $email,
            'keterangan' => $keterangan,
            'tanggal' => $tanggal
        );

        $where = array(
            'kode_instansi' => $kode_instansi
        );

        $this->M_instansi->update_data($where, $data, 'tbl_instansi');
        echo $this->session->set_flashdata('msg', 'info-update');
        redirect('Instansi');
    }
    function cek_kode()
    {
        $kode = $this->input->post('input_check_kode');
        // $kode = 1224;

        $cek_kode = $this->M_instansi->cek_kode($kode);

        $data = (object)array();

        $data_instansi = json_encode($cek_kode);

        $decode_instansi = json_decode($data_instansi);

        // $decode_instansi_data = $decode_instansi[0];

        if ($decode_instansi != NULL) {

            $decode_instansi_data = $decode_instansi[0];

            $hasil = "Data Ada";
            $data->result  = $decode_instansi_data;
            $data->success         = TRUE;
            $data->message        = "True !";
        } else {

            $hasil = "Data Kosong";
            $data->result = FALSE;
            $data->status = FALSE;
        }

        echo json_encode($data);
    }
}
