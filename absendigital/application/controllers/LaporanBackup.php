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

    public function getDataAbsen(){
        $first = $this->input->post('first');
        $last = $this->input->post('last');
        
        $karyawan = $this->db->query("SELECT id_pegawai, kode_pegawai, is_active FROM user")->result_array();
        foreach ($karyawan as $k => $kry){
            $hadir = $this->db->query("SELECT kode_pegawai from db_absensi where  created_date BETWEEN '$first' AND '$last' AND status_pegawai = 1 AND kode_pegawai = '".$kry['kode_pegawai']."'")->num_rows();

            $absen = $this->db->query("SELECT kode_pegawai from db_absensi where  created_date BETWEEN '$first' AND '$last' AND status_pegawai = 2 AND kode_pegawai = '".$kry['kode_pegawai']."'")->num_rows();

            $cuti = $this->db->query("SELECT nama, datediff(tanggal_masuk, tanggal_izin) as jlh_izin from tb_izin 
            WHERE tanggal_izin >= '$first' AND tanggal_masuk <= '$last'  AND nama = '". $kry['id_pegawai'] ."'
            AND jenis_izin = 'Cuti'")->row_array();
            ($cuti['jlh_izin'] == null)? $cuti['jlh_izin'] = 0: '';
            
            $sakit = $this->db->query("SELECT nama, datediff(tanggal_masuk, tanggal_izin) as jlh_izin from tb_izin 
            WHERE tanggal_izin >= '$first' AND tanggal_masuk <= '$last'  AND nama = '". $kry['id_pegawai'] ."'
            AND jenis_izin = 'Sakit'")->row_array();
            ($sakit['jlh_izin'] == null)? $sakit['jlh_izin'] = 0: '';

            //cari tanggal terakhir di bulan ini
            $date = new DateTime('now');
            $date->modify('last day of this month');
            $max_tanggal = $date->format('d');
            $data_absen[$k] = [
                "kode_pegawai" => $kry['kode_pegawai'],
                "hadir" => $hadir,
                "absen" => $absen,
                "cuti" => $cuti['jlh_izin'],
                "sakit" => $sakit['jlh_izin'],
                // "sakit" => $sakit,
            ];
        }
        echo json_encode($data_absen);
    }

}
