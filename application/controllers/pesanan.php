<?php

class Pesanan extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->db->query("SELECT * FROM invoice inv, user u WHERE inv.id_user=u.id_user")->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan', $data);
        $this->load->view('templates/footer');
    }

    public function bukti()
    {
        $data['proses'] = $this->db->query("SELECT * FROM invoice inv, pesanan psn WHERE inv.id_invoice=psn.id_invoice")->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bukti', $data);
        $this->load->view('templates/footer');
    }

    public function bayar($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bayar', $data);
        $this->load->view('templates/footer');
    }

    public function terima($id_pesanan)
    {
        $status         = $this->input->post('status');

        $data = array(
            'status' => $status,
        );

        $where = array(
            'id_pesanan' => $id_pesanan,
        );

        $this->model_invoice->update_data('pesanan', $data, $where);
        redirect('admin/invoice');
    }

    public function cetak($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('cetak_bukti', $data);
    }
}
