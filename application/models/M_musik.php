<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_musik extends CI_Model
{

	public function getby($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }

}