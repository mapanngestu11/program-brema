<?php
class M_tagihan extends CI_Model
{

    private $_table = "tbl_penagihan";

    function tampil_data()
    {
        $this->db->select('
        a.id,
        a.kode_instansi,
        b.nama,
        a.wilayah,
        a.spb,
        a.tagihan,
        a.faktur_pajak,
        a.jumlah_tagihan,
        a.total_pembayaran,
        a.tanggal_bayar,
        a.do_diterima,
        a.hari,
        a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $hsl = $this->db->get('tbl_penagihan a');
        return $hsl;
    }
    function tampil_data_belum_lunas()
    {
        $this->db->select('
        a.id,
        a.kode_instansi,
        b.nama,
        a.wilayah,
        a.spb,
        a.tagihan,
        a.faktur_pajak,
        a.jumlah_tagihan,
        a.total_pembayaran,
        a.tanggal_bayar,
        a.do_diterima,
        a.hari,
        a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $this->db->where('a.tagihan', 'belum');
        $hsl = $this->db->get('tbl_penagihan a');
        return $hsl;
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_penagihan WHERE id='$id'");
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
        a.kode_instansi,
        b.nama,
        a.wilayah,
        a.spb as data_spb,
        a.tagihan,
        a.faktur_pajak,
        a.jumlah_tagihan,
        a.total_pembayaran,
        a.tanggal_bayar,
        a.do_diterima,
        a.hari,
        a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $this->db->where('a.id', $id);
        $hsl = $this->db->get('tbl_penagihan a');
        return $hsl;
    }
    function get_data_by_kode_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function laporan($tgl1, $tgl2)
    {
        $this->db->select('
        a.id,
        a.kode_instansi,
        b.nama,
        a.wilayah,
        a.spb,
        a.tagihan,
        a.faktur_pajak,
        a.jumlah_tagihan,
        a.total_pembayaran,
        a.tanggal_bayar,
        a.do_diterima,
        a.hari,
        a.tanggal');
        $this->db->join('tbl_instansi b', 'b.kode_instansi = a.kode_instansi', 'left');
        $this->db->where('a.tanggal_bayar >=', $tgl1);
        $this->db->where('a.tanggal_bayar <=', $tgl2);
        $hsl = $this->db->get('tbl_penagihan a');
        return $hsl;
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_penagihan.kode_instansi) as jumlah');
        $hsl = $this->db->get('tbl_penagihan');
        return $hsl;
    }
}
