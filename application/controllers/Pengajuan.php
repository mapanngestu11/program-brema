<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_instansi');
        $this->load->model('M_barang');
        $this->load->model('M_pengajuan');




        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $data['pengajuan'] = $this->M_pengajuan->tampil_data();
        $this->load->view('List.pengajuan.php', $data);
    }
    public function list_barang()
    {
        $data['barang'] = $this->M_barang->tampil_data();
        $this->load->view('Add.pengajuan.php', $data);
    }

    public function add($kode_barang)
    {
        $where = array('kode_barang' => $kode_barang);
        $data['instansi'] = $this->M_instansi->tampil_data();
        $data['pengajuan'] = $this->M_barang->get_data_by_kode_barang($where, 'tbl_barang');
        $this->load->view('Input.pengajuan.php', $data);
    }
    public function simpan()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/file/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 1000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/file/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['new_image'] = './assets/file/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $kode_barang = $this->input->post('kode_barang');
                $material = $this->input->post('material');
                $varian_type = $this->input->post('varian_type');
                $harga_satuan = $this->input->post('harga_satuan');
                $kode_instansi = $this->input->post('kode_instansi');
                $biaya_transportasi = $this->input->post('biaya_transportasi');
                $tanggal =  date('Y-m-d h:i:s');

                // var_dump($gambar);
                // die;

                $data = array(

                    'kode_barang' => $kode_barang,
                    'material' => $material,
                    'harga_satuan' => $harga_satuan,
                    'varian_type' => $varian_type,
                    'kode_instansi' => $kode_instansi,
                    'biaya_transportasi' => $biaya_transportasi,
                    'file' => $file,
                    'tanggal' => $tanggal

                );

                $this->M_pengajuan->input_data($data, 'tbl_pengajuan');
                echo $this->session->set_flashdata('msg', 'success');
                redirect('Pengajuan');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Pengajuan');
            }
        } else {

            redirect('Pengajuan');
        }
    }
    public function delete($id)
    {
        $id = $this->input->post('id');
        $this->M_pengajuan->delete_data($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Pengajuan');
    }
    function edit($id)
    {

        $data['instansi'] = $this->M_instansi->tampil_data();
        $data['pengajuan'] = $this->M_pengajuan->get_data_by_id($id, 'tbl_pengajuan');
        $this->load->view('Edit.pengajuan.php', $data);
    }

    function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/file/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 1000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload('file')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/file/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['new_image'] = './assets/file/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $file = $gbr['file_name'];
                $id = $this->input->post('id');
                $kode_barang = $this->input->post('kode_barang');
                $material = $this->input->post('material');
                $varian_type = $this->input->post('varian_type');
                $harga_satuan = $this->input->post('harga_satuan');
                $kode_instansi = $this->input->post('kode_instansi');
                $biaya_transportasi = $this->input->post('biaya_transportasi');
                $tanggal =  date('Y-m-d h:i:s');

                $data = array(
                    'id' => $id,
                    'kode_barang' => $kode_barang,
                    'material' => $material,
                    'harga_satuan' => $harga_satuan,
                    'varian_type' => $varian_type,
                    'kode_instansi' => $kode_instansi,
                    'biaya_transportasi' => $biaya_transportasi,
                    'file' => $file,
                    'tanggal' => $tanggal

                );
                $where = array(
                    'id' => $id
                );

                $cek = $this->M_pengajuan->update_data($where, $data, 'tbl_pengajuan');
                var_dump($cek);
                echo $this->session->set_flashdata('msg', 'info-update');
                redirect('Pengajuan');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Pengajuan');
            }
        } else {

            redirect('Pengajuan');
        }
    }
}
