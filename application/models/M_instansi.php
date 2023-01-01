<?php
class M_instansi extends CI_Model
{

    private $_table = "tbl_instansi";

    function tampil_data()
    {
        return $this->db->get('tbl_instansi');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_instansi WHERE id='$id'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function get_data_by_id($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function cek_kode($kode)
    {
        $this->db->select('
        kode_instansi,
        wilayah,
        nama,
        alamat
       ');
        $this->db->where('kode_instansi', $kode);
        $hsl = $this->db->get('tbl_instansi')->result();
        return $hsl;
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_instansi.kode_instansi) as jumlah');
        $hsl = $this->db->get('tbl_instansi');
        return $hsl;
    }
}
