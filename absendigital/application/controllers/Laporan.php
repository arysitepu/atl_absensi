<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->get_datasess = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->model('M_Front');
        $this->get_datasetupapp = $this->M_Front->fetchsetupapp();
        $timezone_all = $this->get_datasetupapp;
        date_default_timezone_set($timezone_all['timezone']);

        //ambil waktu absen sesuai hari
        $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $this->WaktuAbsen = $this->db->get_where('db_hari', ['nama_hari' => $hari[(int)date("w")]])->row();
    }

    public function export_excel($periode = '',$tipe = ''){
        if ($tipe = 'absen') {
            $data['res'] = $this->getDataAbsen($periode);
            $data['periode'] = $periode;
            $this->load->view('excel/absen-excel', $data);
        }
    }

    public function getDataAbsen($periode = ''){
        if($this->input->post('first')){
            $first = $this->input->post('first');
        }else{
            $first = $periode;
        }
        // $last = $this->input->post('last');
        
        $karyawan = $this->db->query("SELECT id_pegawai,nama_lengkap, kode_pegawai, is_active FROM user")->result_array();
        foreach ($karyawan as $k => $kry){
            $hadir = $this->db->query("SELECT kode_pegawai from db_absensi where  DATE_FORMAT(created_date, '%Y-%m') = '$first' AND status_pegawai = 1 AND kode_pegawai = '".$kry['kode_pegawai']."'")->num_rows();

            $absen = $this->db->query("SELECT kode_pegawai from db_absensi where  DATE_FORMAT(created_date, '%Y-%m') = '$first' AND status_pegawai = 2 AND kode_pegawai = '".$kry['kode_pegawai']."'")->num_rows();

            $cuti = $this->db->query("SELECT nama, datediff(tanggal_masuk, tanggal_izin) as jlh_izin from tb_izin 
            WHERE tanggal_izin >= '$first' AND nama = '". $kry['id_pegawai'] ."'
            AND jenis_izin = 'Cuti'")->row_array();
            ($cuti['jlh_izin'] == null)? $ttl_cuti = 0: $ttl_cuti = $cuti['jlh_izin'];
            
            $sakit = $this->db->query("SELECT nama, datediff(tanggal_masuk, tanggal_izin) as jlh_izin from tb_izin 
            WHERE tanggal_izin >= '$first' AND nama = '". $kry['id_pegawai'] ."'
            AND jenis_izin = 'Sakit'")->row_array();
            ($sakit['jlh_izin'] == null)? $ttl_sakit = 0: $ttl_sakit = $sakit['jlh_izin'];

            //cari tanggal terakhir di bulan ini
            $date = new DateTime('now');
            $jumlah_hari_minggu = date('w', strtotime($first.'01'));
            $date->modify('last day of this month');
            $max_tanggal_bulan_ini = $date->format('d') - $jumlah_hari_minggu;
            $ttl_absen_tidak_direcord = $max_tanggal_bulan_ini - $hadir;
            $absen = $ttl_absen_tidak_direcord - $cuti['jlh_izin'] - $sakit['jlh_izin'];
    
            $data_absen[$k] = [
                "nama_lengkap" => $kry['nama_lengkap'],
                "kode_pegawai" => $kry['kode_pegawai'],
                "hadir" => $hadir,
                "absen" => $absen,
                "cuti" => $ttl_cuti,
                "sakit" => $ttl_sakit,
                "all" => $max_tanggal_bulan_ini
            ];
        }
        if($this->input->post('first')){
            echo json_encode($data_absen);
        }else{
            return $data_absen;
        }
    }

}
