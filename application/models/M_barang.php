<?php
class M_barang extends CI_Model
{

    private $_table = "tbl_barang";

    function tampil_data()
    {
        return $this->db->get('tbl_barang');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_barang WHERE id='$id'");
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
    function get_data_by_kode_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
