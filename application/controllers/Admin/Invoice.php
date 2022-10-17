<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates/header');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer');
    }

    public function tolak($id_invoice)
    {
        $where = array('id_invoice' => $id_invoice);
        $this->model_invoice->hapus_data($where, 'invoice', 'pesanan');
        redirect('admin/invoice');
    }
}
