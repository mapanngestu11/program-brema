<?php defined('BASEPATH') or exit('No direct script access allowed');

class Barang  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_barang');


        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        $data['barang'] = $this->M_barang->tampil_data();
        $this->load->view('List.barang.php', $data);
    }
    public function add()
    {
        $this->load->view('Add.barang.php');
    }
    public function simpan()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/foto_barang/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 1000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto_barang/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 640;
                $config['height'] = 407;
                $config['new_image'] = './assets/foto_barang/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $kode_barang = $this->input->post('kode_barang');
                $material = $this->input->post('material');
                $varian_type = $this->input->post('varian_type');
                $satuan = $this->input->post('satuan');
                $harga_satuan = $this->input->post('harga_satuan');
                $tanggal =  date('Y-m-d h:i:s');

                // var_dump($gambar);
                // die;

                $data = array(

                    'kode_barang' => $kode_barang,
                    'material' => $material,
                    'varian_type' => $varian_type,
                    'satuan' => $satuan,
                    'harga_satuan' => $harga_satuan,
                    'gambar' => $gambar,
                    'tanggal' => $tanggal

                );



                $this->M_barang->input_data($data, 'tbl_barang');
                echo $this->session->set_flashdata('msg', 'success');
                redirect('Barang');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Barang');
            }
        } else {

            redirect('Barang');
        }
    }
    public function delete($id)
    {
        $id = $this->input->post('id');
        $this->M_barang->delete_data($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Barang');
    }
    function edit($kode_barang)
    {
        $where = array('kode_barang' => $kode_barang);
        $data['barang'] = $this->M_barang->get_data_by_id($where, 'tbl_barang')->result();
        $this->load->view('Edit.barang.php', $data);
    }

    function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/foto_barang/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 1000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto_barang/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 640;
                $config['height'] = 407;
                $config['new_image'] = './assets/foto_barang/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];

                $id = $this->input->post('id');
                $kode_barang = $this->input->post('kode_barang');
                $material = $this->input->post('material');
                $varian_type = $this->input->post('varian_type');
                $deskripsi = $this->input->post('deskripsi');
                $satuan = $this->input->post('satuan');
                $harga_satuan = $this->input->post('harga_satuan');
                $tanggal =  date('Y-m-d h:i:s');

                $data = array(

                    'kode_barang' => $kode_barang,
                    'material' => $material,
                    'varian_type' => $varian_type,
                    'satuan' => $satuan,
                    'harga_satuan' => $harga_satuan,
                    'deskripsi' => $deskripsi,
                    'gambar' => $gambar,
                    'tanggal' => $tanggal

                );

                $where = array(
                    'kode_barang' => $kode_barang
                );

                $cek = $this->M_barang->update_data($where, $data, 'tbl_barang');
                echo $this->session->set_flashdata('msg', 'info-update');
                redirect('Barang');
            } else {

                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Barang');
            }
        } else {
            redirect('Barang');
        }
    }
}
