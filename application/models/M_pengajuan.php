<?php
class M_pengajuan extends CI_Model
{

    private $_table = "tbl_pengajuan";

    function tampil_data()
    {
        $this->db->select('
        a.id,
        a.kode_barang,
        a.material,
        a.harga_satuan,
        a.varian_type,
        b.nama,
        a.biaya_transportasi,
        a.file,
        a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $hsl = $this->db->get('tbl_pengajuan a');
        return $hsl;
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_pengajuan WHERE id='$id'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function get_data_by_id($id)
    {
        $this->db->select('
        a.id,
        a.kode_barang,
        a.material,
        a.harga_satuan,
        a.varian_type,
        b.nama,
        a.biaya_transportasi,
        a.file,
        a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $this->db->where('a.id', $id);
        $hsl = $this->db->get('tbl_pengajuan a');
        return $hsl;
    }
    function get_data_by_kode_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_pengajuan.kode_instansi) as jumlah');
        $hsl = $this->db->get('tbl_pengajuan');
        return $hsl;
    }
    function jumlah_pengajuan()
    {
        $this->db->select('b.nama, a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $this->db->limit(5);
        $this->db->order_by('a.id DESC');
        $hsl = $this->db->get('tbl_pengajuan a');
        return $hsl;
    }
}
