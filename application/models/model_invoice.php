<?php

class Model_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_lgkp   = $this->input->post('nama_lgkp');
        $alamat = $this->input->post('alamat');
        $no_wa = $this->input->post('no_wa');
        $metod_bayar = $this->input->post('metod_bayar');
        $nama_akun = $this->input->post('nama_akun');
        $id_user = $this->session->userdata('id_user');


        $invoice = array(
            'id_user'   => $id_user,
            'nama_lgkp' => $nama_lgkp,
            'no_wa'     => $no_wa,
            'metod_bayar' => $metod_bayar,
            'nama_akun' => $nama_akun,
            'alamat'    => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );

        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoice'    => $id_invoice,
                'id_user'       => $id_user,
                'id_produk'     => $item['id'],
                'nama_produk'   => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price']
            );
            $this->db->insert('pesanan', $data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
        $result = $this->db->get('invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function update_data($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
