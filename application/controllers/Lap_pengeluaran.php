<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lap_pengeluaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Laporan_pengeluaran_m');
    }

    public function index()
    {
        $data        = $this->Laporan_pengeluaran_m->get()->result();
        $row_total   = $this->Laporan_pengeluaran_m->get_total()->row();

        $data = [
            'row'       => $data,
            'row_total'    => $row_total
        ];

        $this->template->load('v_template', 'laporan/laporan_pengeluaran/v_lap_pengeluaran', $data);
    }

    function get_data()
    {
        $post   = $this->input->post(NULL, TRUE);
        $start  = $post['start'];
        $end    = $post['end'];
        $tgl    = date('Y-m-d');

        $row         = $this->Laporan_pengeluaran_m->get($post)->result();
        $row_total   = $this->Laporan_pengeluaran_m->get_total($post)->row();

        $data = [
            'row'           => $row,
            'row_total'     => $row_total,
            'start'         => $start,
            'end'           => $end
        ];

        $html = $this->load->view('laporan/laporan_pengeluaran/v_result_lap_pengeluaran', $data, true);
        $this->fungsi->PdfGenerator($html, 'Lap_pengeluaran_' . $tgl, 'A4', 'landscape');
    }
}
