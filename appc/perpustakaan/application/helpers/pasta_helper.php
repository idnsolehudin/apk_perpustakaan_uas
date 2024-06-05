<?php
function login_timeout()
{
    // (isset($_SESSION['siteman_timeout'])) ? $timeout=$_SESSION['siteman_timeout'] : $timeout = null;
    // if(time()>$timeout){
    // 	siteman_timer();
    // }
    if ($_SESSION['login'] == 1) {
    } else {
        redirect('clogin');
    }
}

function encrylink($valueid)
{
    $ci = get_instance();
    $enc = $ci->encryption->encrypt($valueid);
    $enc = str_replace(array('+', '/', '='), array('-', '_', '~'), $enc);
    return $enc;
}

function decrylink($valueid)
{
    $ci = get_instance();
    $dec = str_replace(array('-', '_', '~'), array('+', '/', '='), $valueid);
    $dec = $ci->encryption->decrypt($dec);
    return $dec;
}

function nama_cabang($id)
{
    $CI = get_instance();
    $CI->load->model('mcabang');
    $nama = $CI->mcabang->get_data_id($id)['nm_cabang'];
    return strtoupper($nama);
}

function tgl_indo($tgl, $replace_with = '-')
{
    if (date_is_empty($tgl)) {
        return $replace_with;
    }
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}
function tgl_indo2($tgl, $replace_with = '-')
{
    if (date_is_empty($tgl)) {
        return $replace_with;
    }
    $tanggal = substr($tgl, 8, 2);
    $jam = substr($tgl, 11, 8);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun . ' ' . $jam;
}
function tgl_indo_in($tgl, $replace_with = '-')
{
    if (date_is_empty($tgl)) {
        return $replace_with;
    }
    $tanggal = substr($tgl, 0, 2);
    $bulan = substr($tgl, 3, 2);
    $tahun = substr($tgl, 6, 4);
    $jam = substr($tgl, 11);
    $jam = empty($jam) ? '' : ' ' . $jam;
    return $tahun . '-' . $bulan . '-' . $tanggal . $jam;
}

function date_is_empty($tgl)
{
    return (is_null($tgl) || substr($tgl, 0, 10) == '0000-00-00');
}

function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}

function getHari($tgl)
{
    $daftar_hari = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    );
    $namahari = date('l', strtotime($tgl));
    return $daftar_hari[$namahari];
}

function getNamaLaporan($jenis)
{
    if ($jenis == "rka") {
        $nama_laporan = "RKA";
    } else if ($jenis == "renja") {
        $nama_laporan = "Renja";
    } else if ($jenis == "renstra") {
        $nama_laporan = "Renstra";
    } else if ($jenis == "rup") {
        $nama_laporan = "Rup";
    } else {
        $nama_laporan = "E-Monev";
    }

    return $nama_laporan;
}

function getStatus($status)
{
    if ($status == "0") {
        $st = "<span class='text-danger font-weight-700'>Belum Selesai</span>";
    } else if ($status == "1") {
        $st = "<span class='text-success font-weight-700'>Di Konfirmasi</span>";
    } else if ($status == "2") {
        $st = "<span class='text-primary font-weight-700'>Di Kembalikan</span>";
    } else if ($status == "5") {
        $st = "<span class='text-danger font-weight-700'>Dibatalkan</span>";
    }

    return $st;
}

function getMenu($menu)
{
    if ($menu == "chome") {
        $st = "Dashboard";
    } else if ($menu == "pasien") {
        $st = "Data.Pasien";
    } else if ($menu == "jadwal") {
        $st = "Data.Jadwal";
    } else if ($menu == "pasienmasuk") {
        $st = "Pasien.Mendaftar";
    } else if ($menu == "cancel") {
        $st = "Data.Dibatalkan";
    } else if ($menu == "pengobatan") {
        $st = "Informasi.Pengobatan";
    } else if ($menu == "promo") {
        $st = "Informasi.Promo";
    } else if ($menu == "fasilitas") {
        $st = "jadwalmasuk";
    } else if ($menu == "Jadwal Masuk") {
        $st = "Informasi.Fasilitas";
    } else {
        $st = "";
    }


    return $st;
}

function getRupiah($harga = 0)
{
    if ($harga != null) {
        return "Rp " . number_format($harga, 0, ",", ".");
    } else {
        return "Rp 0";
    }
}

function getKelamin($jk)
{
    if ($jk == "1") {
        $sex = "Laki Laki";
    } else {
        $sex = "Perempuan";
    }
    return $sex;
}
