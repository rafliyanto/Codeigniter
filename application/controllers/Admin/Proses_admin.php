<?php

class Proses_admin extends CI_Controller
{
    public function index()
    {
        $data['proses'] = $this->db->query("SELECT * FROM invoice inv, pesanan psn WHERE inv.id_invoice=psn.id_invoice")->result();
        $this->load->view('templates/header');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('admin/proses_admin', $data);
        $this->load->view('templates/footer');
    }
}
