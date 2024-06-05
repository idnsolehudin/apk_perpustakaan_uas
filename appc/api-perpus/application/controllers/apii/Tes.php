<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Tes extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {
        echo '{
    "status": true,
    "data": {
        "info": [
            {
            "name": "nama suami/istri meninggal",
            "rule": "[nama_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#nama_penduduk:text",
                "name": "Nama Penduduk",
                "source": "1",
                "input": "1",
                "type": "2",
                "table": "tb_penduduk",
                "field": "nama",
                "option": [{
                    "id": "",
                    "nama": "Ongki Kamumu",
                    "status": ""
                }]
                
            },
            "index": "6"
        }, {
            "name": "nama ayah suami/istri meninggal",
            "rule": "[nama_ayah_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#nama_ayah:text",
                "name": "Nama Ayah",
                "source": "1",
                "input": "1",
                "type": "2",
                "table": "tb_penduduk",
                "field": "nama_ayah",
                "option": [{
                    "id": "",
                    "nama": "SUGENG WIDODO",
                    "status": ""
                }]
            },
            "index": "7"
        }, {
            "name": "no ktp suami/istri meninggal",
            "rule": "[no_ktp_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#no_ktp:text",
                "name": "No ktp",
                "source": "1",
                "input": "1",
                "type": "2",
                "table": "tb_penduduk",
                "field": "nik",
                "option": [{
                    "id": "",
                    "nama": "3172021806640015",
                    "status": ""
                }]
            },
            "index": "8"
        }, {
            "name": "tempat tanggal lahir suami/istri meninggal",
            "rule": "[tempat_tanggal_lahir_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#tempat_tanggal_lahir:text",
                "name": "Tempat Tanggal Lahir",
                "source": "1",
                "input": "1",
                "type": "2",
                "table": "tb_penduduk",
                "field": "tempat_tanggal_lahir",
                "option": [{
                    "id": "",
                    "nama": "Gorontalo,1983-07-28",
                    "status": ""
                }]
                
            },
            "index": "9"
        }, {
            "name": "kewarganegaraan suami/istri meninggal",
            "rule": "[kewarganegaraan_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#warga_negara:select",
                "name": "Warga Negara",
                "source": "1",
                "input": "2",
                "type": "2",
                "table": "tb_penduduk",
                "field": "",
                "option": [{
                    "id": "1",
                    "nama": "WNI",
                    "status": "selected"
                }, {
                    "id": "2",
                    "nama": "WNA",
                    "status": ""
                }, {
                    "id": "3",
                    "nama": "DUA KEWARGANEGARAAN",
                    "status": ""
                }]
            },
            "index": "10"
        }, {
            "name": "agama suami/istri meninggal",
            "rule": "[agama_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#agama:select",
                "name": "Agama",
                "source": "1",
                "input": "2",
                "type": "2",
                "table": "tb_penduduk",
                "field": "",
                "option": [{
                    "id": "7",
                    "nama": "Kepercayaan Terhadap Tuhan YME / Lainnya",
                    "status": ""
                }, {
                    "id": "6",
                    "nama": "KHONGHUCU",
                    "status": ""
                }, {
                    "id": "5",
                    "nama": "BUDHA",
                    "status": ""
                }, {
                    "id": "4",
                    "nama": "HINDU",
                    "status": ""
                }, {
                    "id": "3",
                    "nama": "KATHOLIK",
                    "status": ""
                }, {
                    "id": "2",
                    "nama": "KRISTEN",
                    "status": ""
                }, {
                    "id": "1",
                    "nama": "ISLAM",
                    "status": "selected"
                }]
            },
            "index": "11"
        }, {
            "name": "pekerjaan suami/istri meninggal",
            "rule": "[pekerjaan_suami/istri_meninggal]",
            "status": 1,
            "inputs": {
                "id": "#pekerjaan:select",
                "name": "Pekerjaan",
                "source": "1",
                "input": "2",
                "type": "2",
                "table": "tb_penduduk",
                "field": "",
                "option": [{
                    "id": "89",
                    "nama": "LAINNYA",
                    "status": ""
                }, {
                    "id": "88",
                    "nama": "WIRASWASTA",
                    "status": ""
                }, {
                    "id": "87",
                    "nama": "BIARAWATI",
                    "status": ""
                }, {
                    "id": "86",
                    "nama": "KEPALA DESA",
                    "status": ""
                }, {
                    "id": "85",
                    "nama": "PERANGKAT DESA",
                    "status": ""
                }, {
                    "id": "84",
                    "nama": "PEDAGANG",
                    "status": ""
                }, {
                    "id": "83",
                    "nama": "PARANORMAL",
                    "status": ""
                }, {
                    "id": "82",
                    "nama": "PIALANG",
                    "status": ""
                }, {
                    "id": "81",
                    "nama": "SOPIR",
                    "status": ""
                }, {
                    "id": "80",
                    "nama": "PENELITI",
                    "status": ""
                }, {
                    "id": "79",
                    "nama": "PELAUT",
                    "status": ""
                }, {
                    "id": "78",
                    "nama": "PENYIAR RADIO",
                    "status": ""
                }, {
                    "id": "77",
                    "nama": "PENYIAR TELEVISI",
                    "status": ""
                }, {
                    "id": "76",
                    "nama": "PSIKIATER/PSIKOLOG",
                    "status": ""
                }, {
                    "id": "75",
                    "nama": "APOTEKER",
                    "status": ""
                }, {
                    "id": "74",
                    "nama": "PERAWAT",
                    "status": ""
                }, {
                    "id": "73",
                    "nama": "BIDAN",
                    "status": ""
                }, {
                    "id": "72",
                    "nama": "DOKTER",
                    "status": ""
                }, {
                    "id": "71",
                    "nama": "KONSULTAN",
                    "status": ""
                }, {
                    "id": "70",
                    "nama": "AKUNTAN",
                    "status": ""
                }, {
                    "id": "69",
                    "nama": "ARSITEK",
                    "status": ""
                }, {
                    "id": "68",
                    "nama": "NOTARIS",
                    "status": ""
                }, {
                    "id": "67",
                    "nama": "PENGACARA",
                    "status": ""
                }, {
                    "id": "66",
                    "nama": "PILOT",
                    "status": ""
                }, {
                    "id": "65",
                    "nama": "GURU",
                    "status": ""
                }, {
                    "id": "64",
                    "nama": "DOSEN",
                    "status": ""
                }, {
                    "id": "63",
                    "nama": "ANGGOTA DPRD KABUPATEN/KOTA",
                    "status": ""
                }, {
                    "id": "62",
                    "nama": "ANGGOTA DPRD PROVINSI",
                    "status": ""
                }, {
                    "id": "61",
                    "nama": "WAKIL WALIKOTA",
                    "status": ""
                }, {
                    "id": "60",
                    "nama": "WALIKOTA",
                    "status": ""
                }, {
                    "id": "59",
                    "nama": "WAKIL BUPATI",
                    "status": ""
                }, {
                    "id": "58",
                    "nama": "BUPATI",
                    "status": ""
                }, {
                    "id": "57",
                    "nama": "WAKIL GUBERNUR",
                    "status": ""
                }, {
                    "id": "56",
                    "nama": "GUBERNUR",
                    "status": ""
                }, {
                    "id": "55",
                    "nama": "DUTA BESAR",
                    "status": ""
                }, {
                    "id": "54",
                    "nama": "ANGGOTA KABINET KEMENTERIAN",
                    "status": ""
                }, {
                    "id": "53",
                    "nama": "ANGGOTA MAHKAMAH KONSTITUSI",
                    "status": ""
                }, {
                    "id": "52",
                    "nama": "WAKIL PRESIDEN",
                    "status": ""
                }, {
                    "id": "51",
                    "nama": "PRESIDEN",
                    "status": ""
                }, {
                    "id": "50",
                    "nama": "ANGGOTA BPK",
                    "status": ""
                }, {
                    "id": "49",
                    "nama": "ANGGOTA DPD",
                    "status": ""
                }, {
                    "id": "48",
                    "nama": "ANGGOTA DPR-RI",
                    "status": ""
                }, {
                    "id": "47",
                    "nama": "PROMOTOR ACARA",
                    "status": ""
                }, {
                    "id": "46",
                    "nama": "JURU MASAK",
                    "status": ""
                }, {
                    "id": "45",
                    "nama": "USTADZ/MUBALIGH",
                    "status": ""
                }, {
                    "id": "44",
                    "nama": "WARTAWAN",
                    "status": ""
                }, {
                    "id": "43",
                    "nama": "PASTOR",
                    "status": ""
                }, {
                    "id": "42",
                    "nama": "PENDETA",
                    "status": ""
                }, {
                    "id": "41",
                    "nama": "IMAM MASJID",
                    "status": ""
                }, {
                    "id": "40",
                    "nama": "PENTERJEMAH",
                    "status": ""
                }, {
                    "id": "39",
                    "nama": "PERANCANG BUSANA",
                    "status": ""
                }, {
                    "id": "38",
                    "nama": "PARAJI",
                    "status": ""
                }, {
                    "id": "37",
                    "nama": "TABIB",
                    "status": ""
                }, {
                    "id": "36",
                    "nama": "SENIMAN",
                    "status": ""
                }, {
                    "id": "35",
                    "nama": "MEKANIK",
                    "status": ""
                }, {
                    "id": "34",
                    "nama": "PENATA RAMBUT",
                    "status": ""
                }, {
                    "id": "33",
                    "nama": "PENATA BUSANA",
                    "status": ""
                }, {
                    "id": "32",
                    "nama": "PENATA RIAS",
                    "status": ""
                }, {
                    "id": "31",
                    "nama": "TUKANG GIGI",
                    "status": ""
                }, {
                    "id": "30",
                    "nama": "TUKANG JAHIT",
                    "status": ""
                }, {
                    "id": "29",
                    "nama": "TUKANG LAS/PANDAI BESI",
                    "status": ""
                }, {
                    "id": "28",
                    "nama": "TUKANG SOL SEPATU",
                    "status": ""
                }, {
                    "id": "27",
                    "nama": "TUKANG KAYU",
                    "status": ""
                }, {
                    "id": "26",
                    "nama": "TUKANG BATU",
                    "status": ""
                }, {
                    "id": "25",
                    "nama": "TUKANG LISTRIK",
                    "status": ""
                }, {
                    "id": "24",
                    "nama": "TUKANG CUKUR",
                    "status": ""
                }, {
                    "id": "23",
                    "nama": "PEMBANTU RUMAH TANGGA",
                    "status": ""
                }, {
                    "id": "22",
                    "nama": "BURUH PETERNAKAN",
                    "status": ""
                }, {
                    "id": "21",
                    "nama": "BURUH NELAYAN/PERIKANAN",
                    "status": ""
                }, {
                    "id": "20",
                    "nama": "BURUH TANI/PERKEBUNAN",
                    "status": ""
                }, {
                    "id": "19",
                    "nama": "BURUH HARIAN LEPAS",
                    "status": ""
                }, {
                    "id": "18",
                    "nama": "KARYAWAN HONORER",
                    "status": ""
                }, {
                    "id": "17",
                    "nama": "KARYAWAN BUMD",
                    "status": ""
                }, {
                    "id": "16",
                    "nama": "KARYAWAN BUMN",
                    "status": ""
                }, {
                    "id": "15",
                    "nama": "KARYAWAN SWASTA",
                    "status": "selected"
                }, {
                    "id": "14",
                    "nama": "TRANSPORTASI",
                    "status": ""
                }, {
                    "id": "13",
                    "nama": "KONSTRUKSI",
                    "status": ""
                }, {
                    "id": "12",
                    "nama": "INDUSTRI",
                    "status": ""
                }, {
                    "id": "11",
                    "nama": "NELAYAN/PERIKANAN",
                    "status": ""
                }, {
                    "id": "10",
                    "nama": "PETERNAK",
                    "status": ""
                }, {
                    "id": "9",
                    "nama": "PETANI/PEKEBUN",
                    "status": ""
                }, {
                    "id": "8",
                    "nama": "PERDAGANGAN",
                    "status": ""
                }, {
                    "id": "7",
                    "nama": "KEPOLISIAN RI (POLRI)",
                    "status": ""
                }, {
                    "id": "6",
                    "nama": "TENTARA NASIONAL INDONESIA (TNI)",
                    "status": ""
                }, {
                    "id": "5",
                    "nama": "PEGAWAI NEGERI SIPIL (PNS)",
                    "status": ""
                }, {
                    "id": "4",
                    "nama": "PENSIUNAN",
                    "status": ""
                }, {
                    "id": "3",
                    "nama": "PELAJAR/MAHASISWA",
                    "status": ""
                }, {
                    "id": "2",
                    "nama": "MENGURUS RUMAH TANGGA",
                    "status": ""
                }, {
                    "id": "1",
                    "nama": "BELUM/TIDAK BEKERJA",
                    "status": ""
                }]
            },
            "index": "12"
        }],
        "key": "a0a1b146"
    }
}';
    }

    public function idm_get()
    {
        echo '{
  "main": [
      {
          "id": "skor_idm_saat_ini",
          "name": "SKOR IDM SAAT INI",
          "value": "0.7192"
      },
      {
          "id": "status_idm",
          "name": "STATUS IDM",
          "value": "MAJU"
      },
      {
          "id": "target_status",
          "name": "TARGET STATUS",
          "value": "MANDIRI"
      },
      {
          "id": "skor_idm_minimal",
          "name": "SKOR IDM MINIMAL",
          "value": "0.8156"
      },
      {
          "id": "penambahan_yang_dibutuhkan",
          "name": "PENAMBAHAN YANG DIBUTUHKAN",
          "value": "0.0964"
      }
  ],
  "detail": [
      {
          "indikator": "IKS 2020",
          "skor": "0.8743",
          "body": [
              {
                  "indicator": "Skor Akses Sarkes",
                  "skor": "5",
                  "keterangan": "Waktu tempuh dari \u2264 30 Menit",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "Dinkes, PU",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Dokter",
                  "skor": "5",
                  "keterangan": "Jumlah dokter \u2265 1 orang",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DINKES",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Bidan",
                  "skor": "5",
                  "keterangan": "Jumlah bidan \u2265 1 orang",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DINKES",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Nakes Lain",
                  "skor": "3",
                  "keterangan": "Jumlah tenaga kesehatan lainnya 2 orang",
                  "rekomendasi_kegiatan": "Penambahan Nakes Min 3 Org",
                  "nilai": "0.0038",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DINKES",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Tingkat Kepesertaan BPJS",
                  "skor": "3",
                  "keterangan": "Jumlah peserta BPJS\/jumlah penduduk antara 0,26 s.d 0,5",
                  "rekomendasi_kegiatan": "Fasilitasi kepesertaan BPJS warga Desa hingga > 75%",
                  "nilai": "0.0038",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DINKES",
                      "desa": "",
                      "csr": "",
                      "lainnya": "BPJS"
                  }
              },
              {
                  "indicator": "Skor Akses Poskesdes",
                  "skor": "5",
                  "keterangan": "Jarak tempuh menuju Poskesdes = 500 Meter",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DINKES",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Aktivitas Posyandu",
                  "skor": "5",
                  "keterangan": "Jumlah Posyandu aktif 1 bulan sekali\/ Jumlah Posyandu > 0,75",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DPMD",
                      "kab": "DPMD, DINKES",
                      "desa": "DD",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Akses SD\/MI",
                  "skor": "5",
                  "keterangan": "Jarak tempuh menuju SD atau MI = 3000 Meter",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISDIK, PU",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Akses SMP\/MTS",
                  "skor": "5",
                  "keterangan": "Jarak tempuh menuju SMP atau MTs \u2264 6000 Meter",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISDIK, PU",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Akses SMA\/SMK",
                  "skor": "5",
                  "keterangan": "Jarak tempuh menuju SMU atau SMK \u2264 6000 Meter",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DISDIK",
                      "kab": "PU",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Ketersediaan PAUD",
                  "skor": "5",
                  "keterangan": "Jumlah PAUD \u2265 1",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DISDIK",
                      "kab": "DISDIK",
                      "desa": "DD",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Ketersediaan PKBM\/ Paket ABC",
                  "skor": "1",
                  "keterangan": "Jumlah PKBM atau Paket ABC Tidak ada",
                  "rekomendasi_kegiatan": "Pelaksanaan Kegiatan PKBM\/Kejar Paket A B C",
                  "nilai": "0.0076",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISDIK",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Ketersediaan Kursus",
                  "skor": "1",
                  "keterangan": "Jumlah Pusat Keterampilan atau Kursus Tidak ada",
                  "rekomendasi_kegiatan": "Pengadaan Tempat Kursus\/Pelatihan",
                  "nilai": "0.0076",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "",
                      "csr": "CSR",
                      "lainnya": "Swasta, Perorangan"
                  }
              },
              {
                  "indicator": "Skor Ketersediaan Taman Baca\/ Perpus Desa",
                  "skor": "5",
                  "keterangan": "Taman Bacaan Masyarakat atau perpustakaan Desa tersedia",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "Kemenperpus Arsip",
                      "prov": "Dinas Perpus",
                      "kab": "Dinas Perpus",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Kebiasaan Goryong",
                  "skor": "5",
                  "keterangan": "Terdapat Kebiasaan Gotong Royong",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Frekuensi Goryong",
                  "skor": "5",
                  "keterangan": "Frekuensi Gotong Royong > 2",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Ketersediaan Ruang Publik",
                  "skor": "5",
                  "keterangan": "Ruang Publik terdapat didesa",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "PU",
                      "desa": "DD",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Kelompok OR",
                  "skor": "2",
                  "keterangan": "Jumlah kelompok kegiatan olahraga 2 s.d 3",
                  "rekomendasi_kegiatan": "Penambahan Min 6 Kelp Olahraga",
                  "nilai": "0.0057",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DISPORA",
                      "kab": "DISPORA",
                      "desa": "Karang Taruna",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Kegiatan OR",
                  "skor": "2",
                  "keterangan": "Jumlah kegiatan olahraga 2 s.d 3",
                  "rekomendasi_kegiatan": "Pembangunan Min 6 Lap Olahraga",
                  "nilai": "0.0057",
                  "melaksanankan_keg": {
                      "pusat": "Kemepora\/ Kemendes",
                      "prov": "DISPORA",
                      "kab": "DISPORA",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": "Perorangan"
                  }
              },
              {
                  "indicator": "Skor Keragaman Agama",
                  "skor": "5",
                  "keterangan": "Jumlah Jenis Agama di Desa > 1",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Keragaman Bahasa",
                  "skor": "5",
                  "keterangan": "Jumlah Bahasa yang digunakan sehari-hari > 1",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Keragaman Komunikasi",
                  "skor": "1",
                  "keterangan": "Warga Desa terdapat 1 Suku",
                  "rekomendasi_kegiatan": "Pendataan Jumlah Suku yang ada didesa",
                  "nilai": "0.0076",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Poskamling",
                  "skor": "5",
                  "keterangan": "Terdapat Pos Keamanan di Desa",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "DD",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Siskamling",
                  "skor": "5",
                  "keterangan": "Terdapat Sistem Keamanan Lingkungan warga di Desa",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Konflik",
                  "skor": "5",
                  "keterangan": "Tidak terdapat atau tidak ada Konflik di Desa",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "Kesbangpol",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor PMKS",
                  "skor": "5",
                  "keterangan": "Jumlah PMKS tidak ada atau 0",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "Dinsos",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor SLB",
                  "skor": "5",
                  "keterangan": "Jumlah Skor SLB = 0",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DIKNAS",
                      "kab": "",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Akses Listrik",
                  "skor": "5",
                  "keterangan": "(Jumlah Keluarga Memakai listrik + non Listrik\/Jumlah keluarga memakai listrik) \u2265 0,9 )",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "ESDM",
                      "prov": "ESDM",
                      "kab": "",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": "Perorangan"
                  }
              },
              {
                  "indicator": "Skor Sinyal Tlp",
                  "skor": "5",
                  "keterangan": "Sinyal telepon seluler di Desa Kuat",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "Kominfo",
                      "prov": "Diskominfo",
                      "kab": "Diskominfo",
                      "desa": "",
                      "csr": "",
                      "lainnya": "Operator Selular"
                  }
              },
              {
                  "indicator": "Skor Internet Kantor Desa",
                  "skor": "5",
                  "keterangan": "Terdapat fasilitas internet di kantor Desa",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "Kominfo\/ Kemendes",
                      "prov": "",
                      "kab": "",
                      "desa": "Desa",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Akses Internet Warga",
                  "skor": "5",
                  "keterangan": "Terdapat Akses internet warga di Desa",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "Kominfo",
                      "prov": "Diskominfo",
                      "kab": "Diskominfo",
                      "desa": "",
                      "csr": "",
                      "lainnya": "Operator Selular"
                  }
              },
              {
                  "indicator": "Skor Akses Jamban",
                  "skor": "5",
                  "keterangan": "Warga Desa BAB di Jamban Sendiri",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DINSOS,DINKES",
                      "desa": "",
                      "csr": "CSR",
                      "lainnya": "Perorangan"
                  }
              },
              {
                  "indicator": "Skor Sampah",
                  "skor": "5",
                  "keterangan": "Warga desa membuang sampah di Tempat Sampah kemudian diangkut",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DLH",
                      "kab": "DLH, DKPP",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Air Minum",
                  "skor": "5",
                  "keterangan": "Sumber air minum berasal dari PAM, Air Ledeng tanpa Meteran",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "PAMSIMAS, PU",
                      "prov": "",
                      "kab": "PU",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": "PDAM"
                  }
              },
              {
                  "indicator": "Skor Air Mandi & Cuci",
                  "skor": "5",
                  "keterangan": "Sumber air mandi dan cuci berasal dari PAM, Air Ledeng tanpa Meteran",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "PAMSIMAS, PU",
                      "prov": "",
                      "kab": "PU",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": "PDAM"
                  }
              }
          ]
      },
      {
          "indikator": "IKE 2020",
          "skor": "0.6167",
          "body": [
              {
                  "indicator": "Skor Keragaman Produksi",
                  "skor": "5",
                  "keterangan": "Jumlah Industri Mikro\/ Jumlah KK \u2265 0,004",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DISPERINDAKOP UKM",
                      "kab": "DISPERINDAKOP UKM",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": "Perorangan"
                  }
              },
              {
                  "indicator": "Skor Pertokoan",
                  "skor": "1",
                  "keterangan": "Jarak ke kelompok pertokoan terdekat > 25 KM",
                  "rekomendasi_kegiatan": "Pembangunan Pusat pertokoan melalui kerjasama antar desa\/melayani beberapa desa",
                  "nilai": "0.0222",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISPERINDAKOP UKM",
                      "desa": "",
                      "csr": "",
                      "lainnya": "Perorangan, Swasta"
                  }
              },
              {
                  "indicator": "Skor Pasar",
                  "skor": "1",
                  "keterangan": "(Total KK\/jumlah pasar(permanen)) = 0",
                  "rekomendasi_kegiatan": "Pembangunan Pasar Permanen",
                  "nilai": "0.0222",
                  "melaksanankan_keg": {
                      "pusat": "Kemenperind, Kemendes",
                      "prov": "DISPERINDAKOP UKM",
                      "kab": "DISPERINDAKOP UKM",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Toko\/ Warung Kelontong",
                  "skor": "5",
                  "keterangan": "Jumlah Toko dan warung kelontong > 3",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "DD",
                      "csr": "",
                      "lainnya": "Perorangan"
                  }
              },
              {
                  "indicator": "Skor Kedai & Penginapan",
                  "skor": "3",
                  "keterangan": "Jumlah Kedai dan Penginapan = 1",
                  "rekomendasi_kegiatan": "Pembangunan 1 Unit Penginapan",
                  "nilai": "0.0111",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "Dinas Pariwisata",
                      "kab": "Dinas Pariwisata",
                      "desa": "DD",
                      "csr": "",
                      "lainnya": "Perorangan, Swasta"
                  }
              },
              {
                  "indicator": "Skor POS & Logistik",
                  "skor": "0",
                  "keterangan": "Jumlah pos dan jasa logistik = 0",
                  "rekomendasi_kegiatan": "Pembangunan Jasa Logistik dan Kantor Pos",
                  "nilai": "0.0278",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "BUMDES",
                      "csr": "",
                      "lainnya": "Kantor Pos, Swasta"
                  }
              },
              {
                  "indicator": "Skor Bank & BPR",
                  "skor": "3",
                  "keterangan": "Jumlah bank dan BPR = 1",
                  "rekomendasi_kegiatan": "Fasilitasi Pembangunan Bank Swasta\/BPR",
                  "nilai": "0.0111",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "",
                      "desa": "",
                      "csr": "",
                      "lainnya": "Perbankan"
                  }
              },
              {
                  "indicator": "Skor Kredit",
                  "skor": "3",
                  "keterangan": "Jumlah fasilitas kredit = 2",
                  "rekomendasi_kegiatan": "Penambahan 2 jenis Fasilitas Kredit (KUR\/KKPE\/KUK\/Kredit lainnya)(Identifikasi kekurangan akses kredit)",
                  "nilai": "0.0111",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISPERINDAKOP UKM",
                      "desa": "BUMDES\/ Koperasi",
                      "csr": "",
                      "lainnya": "Bank, Swasta"
                  }
              },
              {
                  "indicator": "Skor Lembaga Ekonomi",
                  "skor": "3",
                  "keterangan": "Jumlah koperasi aktif dan BUMDESA = 1",
                  "rekomendasi_kegiatan": "Pembangunan 1 unit Koperasi \/ BUMDES (Identifikasi yang tidak ada di desa)",
                  "nilai": "0.0111",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISPERINDAKOP UKM",
                      "desa": "Desa",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Moda Transportasi Umum",
                  "skor": "3",
                  "keterangan": "Transportasi Umum ada tanpa trayek tetap",
                  "rekomendasi_kegiatan": "Fasilitasi Transportasi Umum dengan Trayek Tetap",
                  "nilai": "0.0111",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "DISHUB",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Keterbukaan Wilayah",
                  "skor": "5",
                  "keterangan": "Jalan di Desa dilalui oleh kendaraan bermotor roda empat atau lebih Sepanjang Tahun",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "PU",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Kualitas Jalan",
                  "skor": "5",
                  "keterangan": "Jenis permukaan jalan desa Aspal atau beton",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "",
                      "kab": "PU",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              }
          ]
      },
      {
          "indikator": "IKL 2020",
          "skor": "0.6667",
          "body": [
              {
                  "indicator": "Skor Kualitas Lingkungan",
                  "skor": "5",
                  "keterangan": "Pencemaran (air, udara, tanah, limbah disungai) di desa [jumlah pencemaran\/4] = 0",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DLH",
                      "kab": "DLH, DINKES",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Rawan Bencana",
                  "skor": "5",
                  "keterangan": "Jenis bencana (longsor, banjir, kebakaran hutan) jenis bencana di desa = 0",
                  "rekomendasi_kegiatan": "-",
                  "nilai": "0.0000",
                  "melaksanankan_keg": {
                      "pusat": "",
                      "prov": "DISHUT\/KPH, BPDB",
                      "kab": "BPBD",
                      "desa": "",
                      "csr": "",
                      "lainnya": ""
                  }
              },
              {
                  "indicator": "Skor Tanggap Bencana",
                  "skor": "0",
                  "keterangan": "Fasilitas mitigasi\/tanggap bencana (peringatan dini bencana alam, peringatan dini tsunami, perlengkapan keselamatan, jalur evakuasi) jumlah fasilitas mitigasi \/ tanggap bencana = 0",
                  "rekomendasi_kegiatan": "Pembangunan\/Pengadaan 3 Fasilitas Mitigasi Bencana Sesuai karakteristik wilayah (Kebutuhan sesuai hasil identifikasi kerawanan\/potensi bencana)",
                  "nilai": "0.1111",
                  "melaksanankan_keg": {
                      "pusat": "BNPB, Kemendes",
                      "prov": "DISHUT\/KPH, BPDB, DINSOS",
                      "kab": "DPBD, DINSOS",
                      "desa": "DD",
                      "csr": "CSR",
                      "lainnya": ""
                  }
              }
          ]
      }
  ],
  "sumber": "Sumber data : IDM KEMENDESA" 
  
  }';
    }

    public function sdgs_get()
    {
        echo  '{
  "main": [
      {
          "id": "status_idm_2020",
          "name": "STATUS IDM 2020",
          "value": "MAJU"
      },
      {
          "id": "status_ipd_2018",
          "name": "STATUS IPD 2018",
          "value": "BERKEMBANG"
      },
      {
          "id": "produk_unggulan",
          "name": "PRODUK UNGGULAN",
          "value": "Hortikultura (buah-buahan,sayur-sayuran,tanaman hias,tanaman obat-obatan,dll)"
      }
  ],
  "detail": [
      [
          {
              "name": "Desa Tanpa Kemiskinan #1",
              "body": [
                  {
                      "name": "Jumlah surat miskin\/SKTM yang dikeluarkan desa selama tahun 2017",
                      "value": "55"
                  },
                  {
                      "name": "Keluarga dengan kondisi kesejahteraan sampai dengan 10% terendah di Indonesia",
                      "value": ""
                  },
                  {
                      "name": "Keluarga dengan kondisi kesejahteraan diatas 10% - 20% terendah di Indonesia",
                      "value": ""
                  }
              ]
          },
          {
              "name": "Desa Tanpa Kelaparan #2",
              "body": [
                  {
                      "name": "Jumlah warga penderita gizi buruk (marasmus dan kwashiorkor) pada tahun 2018",
                      "value": "0"
                  },
                  {
                      "name": "Jumlah Balita Stunting",
                      "value": "8"
                  }
              ]
          },
          {
              "name": "Desa Sehat dan Sejahtera #3",
              "body": [
                  {
                      "name": "Jumlah Posyandu dengan kegiatan\/pelayanan setiap 2 bulan sekali atau lebih",
                      "value": "2"
                  },
                  {
                      "name": "Jumlah Pos Pembinaan Terpadu (Posbindu)",
                      "value": "1"
                  },
                  {
                      "name": "Jumlah Tenaga kesehatan yang tinggal\/menetap di desa",
                      "value": "1"
                  },
                  {
                      "name": "Keberadaan bidan desa (BDD)",
                      "value": "Ada"
                  },
                  {
                      "name": "Jumlah Dukun bayi\/dukun bersalin\/paraji yang tinggal\/menetap di desa",
                      "value": "1"
                  },
                  {
                      "name": "Jumlah warga peserta BPJS Kesehatan Penerima Bantuan Iuran (PBI) dan Jamkesda pada tahun 2017",
                      "value": "800"
                  },
                  {
                      "name": "Jumlah sarana kesehatan di desa",
                      "value": "6"
                  },
                  {
                      "name": "Kejadian luar biasa (KLB) atau wabah penyakit selama setahun terakhir",
                      "value": "-"
                  }
              ]
          },
          {
              "name": "Pendidikan Desa Berkualitas #4",
              "body": [
                  {
                      "name": "Kegiatan pemberantasan buta aksara\/keaksaraan fungsional (KF) selama 3 tahun terakhir",
                      "value": "Ada"
                  },
                  {
                      "name": "Kegiatan pendidikan Paket A\/B\/C selama setahun terakhir",
                      "value": "Ada"
                  },
                  {
                      "name": "Jumlah sarana pendidikan SMP di desa",
                      "value": "0"
                  },
                  {
                      "name": "Jumlah Pos Pendidikan Anak Usia Dini (Pos PAUD)",
                      "value": "1"
                  }
              ]
          },
          {
              "name": "Keterlibatan Perempuan Desa #5",
              "body": [
                  {
                      "name": "Keberadaan kepala desa perempuan",
                      "value": "Tidak"
                  },
                  {
                      "name": "Keberadaan Sekretaris desa perempuan",
                      "value": ""
                  },
                  {
                      "name": "Jumlah Anggota BPD perempuan",
                      "value": ""
                  },
                  {
                      "name": "Jumlah peserta Musyawarah Desa (Musdes) Perempuan",
                      "value": ""
                  },
                  {
                      "name": "Jumlah Pendamping Desa perempuan",
                      "value": ""
                  },
                  {
                      "name": "Perdes\/SK Kades yang responsif gender mendukung pemberdayaan perempuan",
                      "value": ""
                  },
                  {
                      "name": "Terdapat perdes\/SK Kades yang menjamin perempuan untuk mendapatkan pelayanan, informasi, dan pendidikan terkait keluarga berencana dan kesehatan reproduksi",
                      "value": ""
                  },
                  {
                      "name": "Prevalensi kasus kekerasan terhadap anak perempuan",
                      "value": ""
                  },
                  {
                      "name": "Kasus kekerasan terhadap perempuan yang mendapat layanan komprehensif",
                      "value": ""
                  },
                  {
                      "name": "Median usia kawin pertama perempuan (pendewasaan usia kawin pertama) di atas 18 tahun",
                      "value": ""
                  },
                  {
                      "name": "Angka kelahiran pada remaja usia 15-19 tahun (age specific fertility rate\/ASFR)",
                      "value": ""
                  },
                  {
                      "name": "APK SMA\/SMK\/MA\/sederajat",
                      "value": ""
                  },
                  {
                      "name": "Unmeet need kebutuhan ber-KB",
                      "value": ""
                  },
                  {
                      "name": "Jumlah Pasangan Usia Subur (PUS) memahami metode kontrasepsi modern",
                      "value": ""
                  }
              ]
          },
          {
              "name": "Desa Layak Air Bersih dan Sanitasi #6",
              "body": [
                  {
                      "name": "Sumber air untuk minum sebagian besar keluarga berasal dari",
                      "value": "Sumur bor atau pompa"
                  },
                  {
                      "name": "Sumber air untuk mandi\/cuci sebagian besar keluarga berasal dari",
                      "value": "Sumur bor atau pompa"
                  }
              ]
          },
          {
              "name": "Desa Berenergi Bersih dan Terbarukan #7",
              "body": [
                  {
                      "name": "Wilayah desa dilalui Saluran Udara Tegangan Ekstra Tinggi (SUTET), Saluran Udara Tegangan Tinggi (SUTT), Saluran Udara Tegangan Tinggi Arus Searah (SUTTAS)",
                      "value": "Tidak"
                  },
                  {
                      "name": "Keberadaan pangkalan\/agen\/penjual minyak tanah (termasuk penjual minyak tanah keliling)",
                      "value": "Ada"
                  },
                  {
                      "name": "Keberadaan pangkalan\/agen\/penjual LPG (warung, toko, supermarket, penjual gas keliling)",
                      "value": "Ada"
                  },
                  {
                      "name": "Penerangan di jalan utama desa\/kelurahan",
                      "value": "Ada, sebagian besar"
                  },
                  {
                      "name": "Bahan bakar untuk memasak sebagian besar keluarga di desa",
                      "value": "LPG 3 Kg"
                  },
                  {
                      "name": "Jumlah keluarga pengguna listrik",
                      "value": "389"
                  }
              ]
          },
          {
              "name": "Pertumbuhan Ekonomi Desa Merata #8",
              "body": [
                  {
                      "name": "Keberadaan warga desa yang sedang bekerja sebagai TKI di luar negeri",
                      "value": "Tidak Ada"
                  },
                  {
                      "name": "Sumber penghasilan utama sebagian besar penduduk desa berasal dari lapangan usaha",
                      "value": "Pertanian"
                  },
                  {
                      "name": "Jenis komoditi\/sub sektor utama sebagian besar penduduk desa",
                      "value": "Hortikultura (buah\u2013buahan, sayur\u2013sayuran, tanaman hias, tanaman obat\u2013obatan, dll)"
                  },
                  {
                      "name": "Keberadaan produk barang unggulan\/utama desa",
                      "value": "Tidak Ada"
                  },
                  {
                      "name": "Produk Pangan unggulan\/utama desa",
                      "value": "-"
                  },
                  {
                      "name": "Produk Non Pangan unggulan\/utama desa",
                      "value": "-"
                  },
                  {
                      "name": "Jumlah pendidikan keterampilan di desa",
                      "value": "0"
                  },
                  {
                      "name": "Fasilitas Kredit Usaha Rakyat (KUR) selama setahun terakhir",
                      "value": "Tidak Ada"
                  },
                  {
                      "name": "Jumlah sarana dan prasarana ekonomi di desa",
                      "value": "39"
                  },
                  {
                      "name": "Jumlah sarana lembaga keuangan yang beroperasi di desa",
                      "value": "0"
                  },
                  {
                      "name": "Jumlah koperasi di desa yang masih aktif",
                      "value": "0"
                  },
                  {
                      "name": "Keberadaan salon kecantikan",
                      "value": "Tidak Ada"
                  },
                  {
                      "name": "Jumlah unit usaha BUMDes",
                      "value": "4"
                  }
              ]
          },
          {
              "name": "Infrastruktur dan Inovasi Desa Sesuai Kebutuhan #9",
              "body": [
                  {
                      "name": "Jumlah Industri mikro dan kecil (memiliki tenaga kerja kurang dari 20 pekerja)",
                      "value": "5"
                  },
                  {
                      "name": "Jumah Sentra Industri",
                      "value": "0"
                  },
                  {
                      "name": "Jumlah Lingkungan Industri Kecil (LIK)",
                      "value": "0"
                  },
                  {
                      "name": "Jumlah Perkampungan Industri Kecil (PIK)",
                      "value": "0"
                  },
                  {
                      "name": "Lalu lintas dari\/ke desa",
                      "value": "Darat"
                  },
                  {
                      "name": "Jenis permukaan jalan darat antar desa yang terluas",
                      "value": "Aspal\/ beton"
                  }
              ]
          }
      ],
      [
          {
              "name": "Desa Tanpa Kesenjangan #10",
              "body": [
                  {
                      "name": "Keberadaan permukiman kumuh (sanitasi lingkungan buruk, bangunan padat, dan sebagian besar tidak layak huni) di desa",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Jumlah keluarga di permukiman kumuh",
                      "value": "-"
                  },
                  {
                      "name": "Status IDM 2020",
                      "value": "MAJU"
                  }
              ]
          },
          {
              "name": "Kawasan Permukiman Desa Aman dan Nyaman #11",
              "body": [
                  {
                      "name": "Keberadaan permukiman di bantaran sungai",
                      "value": "-"
                  },
                  {
                      "name": "Jumlah keluarga di permukiman bantaran sungai",
                      "value": "-"
                  },
                  {
                      "name": "Sarana transportasi yang biasa digunakan oleh sebagian besar penduduk dari kantor kepala desa ke kantor camat",
                      "value": "Angkutan umum"
                  },
                  {
                      "name": "Sarana transportasi yang biasa digunakan oleh sebagian besar penduduk dari kantor kepala desa ke kantor bupati\/walikota",
                      "value": "Angkutan umum"
                  },
                  {
                      "name": "Kegiatan Pembangunan\/pemeliharaan pos keamanan lingkungan di desa selama setahun terakhir",
                      "value": "Ya"
                  },
                  {
                      "name": "Jumlah anggota linmas\/hansip di desa",
                      "value": "4"
                  },
                  {
                      "name": "Keberadaan pos polisi (termasuk kantor polisi) di desa",
                      "value": "Ada"
                  }
              ]
          },
          {
              "name": "Konsumsi dan Produksi Desa Sadar Lingkungan #12",
              "body": [
                  {
                      "name": "Tempat buang sampah sebagian besar keluarga",
                      "value": "Dalam lubang atau dibakar"
                  },
                  {
                      "name": "Tempat\/saluran pembuangan limbah cair dari air mandi\/cuci sebagian besar keluarga",
                      "value": "Drainase (got\/selokan)"
                  },
                  {
                      "name": "Air sungai tercemar limbah",
                      "value": "-"
                  },
                  {
                      "name": "Keberadaan mata air di desa",
                      "value": "Ada, dikelola"
                  },
                  {
                      "name": "Pengolahan\/daur ulang sampah\/limbah (reuse, recycle)",
                      "value": "Tidak ada kegiatan"
                  }
              ]
          },
          {
              "name": "Desa Tanggap Perubahan Iklim #13",
              "body": [
                  {
                      "name": "Kejadian\/bencana alam (mengganggu kehidupan dan menyebabkan kerugian bagi masyarakat) yang terjadi pada tahun 2018 dan 2019 (Januari sampai April)",
                      "value": "-"
                  },
                  {
                      "name": "Fasilitas Sistem peringatan dini bencana alam yang ada di desa",
                      "value": "Tidak ada"
                  }
              ]
          },
          {
              "name": "Desa Peduli Lingkungan Laut #14",
              "body": [
                  {
                      "name": "Wilayah desa terletak di sebanyak",
                      "value": "1 pulau"
                  },
                  {
                      "name": "Ada wilayah desa yang berbatasan langsung dengan laut",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Pemanfaatan laut untuk Perikanan tangkap (mencakup seluruh biota laut)",
                      "value": "-"
                  },
                  {
                      "name": "Pemanfaatan laut untuk Perikanan budidaya (mencakup seluruh biota laut)",
                      "value": "-"
                  },
                  {
                      "name": "Pemanfaatan laut untuk Tambak garam",
                      "value": "-"
                  },
                  {
                      "name": "Pemanfaatan laut untuk Wisata bahari",
                      "value": "-"
                  },
                  {
                      "name": "Pemanfaatan laut untuk Transportasi umum",
                      "value": "-"
                  }
              ]
          },
          {
              "name": "Desa Peduli Lingkungan Darat #15",
              "body": [
                  {
                      "name": "Topografi wilayah desa",
                      "value": "Dataran"
                  },
                  {
                      "name": "Keberadaan permukiman penduduk di lereng\/puncak",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Keberadaan sungai",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Keberadaan saluran irigasi",
                      "value": "Ada"
                  },
                  {
                      "name": "Keberadaan danau\/waduk\/situ\/bendungan",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Jumlah embung di desa",
                      "value": "0"
                  },
                  {
                      "name": "Pencemaran Air",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Pencemaran Tanah",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Pencemaran Udara",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Penanaman\/pemeliharaan pepohonan di lahan kritis, penanaman mangrove, dan sejenisnya",
                      "value": "-"
                  },
                  {
                      "name": "Pengolahan\/daur ulang sampah\/limbah (reuse, recycle",
                      "value": "-"
                  }
              ]
          },
          {
              "name": "Desa Damai Berkeadilan #16",
              "body": [
                  {
                      "name": "Jumlah orang yang dipasung di desa",
                      "value": "0"
                  },
                  {
                      "name": "Kejadian perkelahian massal di desa selama setahun terakhir",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Perkelahian massal yang paling sering terjadi sudah diselesaikan\/didamaikan",
                      "value": "-"
                  },
                  {
                      "name": "Tindak kejahatan yang paling sering terjadi di desa selama setahun terakhir",
                      "value": "Pencurian"
                  },
                  {
                      "name": "Jumlah korban bunuh diri (termasuk percobaan bunuh diri) yang terjadi di desa",
                      "value": "0"
                  },
                  {
                      "name": "Keberadaan lokasi berkumpul\/mangkal anak jalanan (selain rumah singgah) di desa\/kelurahan",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Keberadaan tempat mangkal gelandangan\/pengemis di desa",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Keberadaan lokalisasi\/lokasi\/tempat mangkal Pekerja Seks Komersial (PSK) di desa",
                      "value": "Tidak ada"
                  }
              ]
          },
          {
              "name": "Kemitraan untuk Pembangunan Desa #17",
              "body": [
                  {
                      "name": "Produk barang unggulan\/utama desa yang diekspor ke negara lain",
                      "value": "-"
                  },
                  {
                      "name": "Program\/siaran TVRI diterima di desa",
                      "value": "Ya"
                  },
                  {
                      "name": "Program\/siaran TV Swasta diterima di desa",
                      "value": "Ya"
                  },
                  {
                      "name": "Keberadaan sistem informasi desa",
                      "value": "Ada, diperbaharui"
                  },
                  {
                      "name": "Keberadaan kerjasama antar desa tahun 2018",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Keberadaan warga yang menggunakan telepon seluler\/handphone",
                      "value": "Sebagian besar warga"
                  },
                  {
                      "name": "Keberadaan internet untuk warnet, game online, dan fasilitas lainnya di desa",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Jumlah menara telepon seluler atau Base Transceiver Station (BTS)",
                      "value": "0"
                  },
                  {
                      "name": "Jumlah operator layanan komunikasi telepon seluler\/handphone yang menjangkau di desa",
                      "value": "2"
                  },
                  {
                      "name": "Sinyal telepon seluler\/handphone di sebagian besar wilayah desa",
                      "value": "Sinyal sangat kuat"
                  },
                  {
                      "name": "Fasilitas internet di kantor kepala desa",
                      "value": "Berfungsi"
                  },
                  {
                      "name": "Kantor pos\/pos pembantu\/rumah pos",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Komputer\/PC\/laptop yang masih berfungsi di kantor kepala desa",
                      "value": "Digunakan"
                  }
              ]
          },
          {
              "name": "Kelembagaan Desa Dinamis dan Budaya Desa Adaptif #18",
              "body": [
                  {
                      "name": "Badan Permusyawaratan Desa",
                      "value": "Ada"
                  },
                  {
                      "name": "Kegiatan pemerintahan desa dilaksanakan di",
                      "value": "Kantor kepala desa"
                  },
                  {
                      "name": "Kebiasaan masyarakat membakar ladang\/kebun di desa untuk proses usaha pertanian",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Keberadaan lokasi penggalian Golongan C (misalnya: batu kali, pasir, kapur, kaolin, pasir kuarsa, tanah liat, dll.) di desa",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Situs cagar budaya di desa",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Kebiasaan dan keterlibatan warga dalam kegiatan gotong royong di desa\/kelurahan untuk kepentingan umum\/komunitas (seperti: kerja bakti, siskamling, pesta rakyat, dll) selama 1 tahun terakhir",
                      "value": "Ada, sebagian kecil warga terlibat"
                  },
                  {
                      "name": "Jumlah lembaga kemasyarakatan desa",
                      "value": "6"
                  },
                  {
                      "name": "Jumlah Sekretariat Desa (kau keuangan, kaur perencanaan, dll)",
                      "value": "3"
                  },
                  {
                      "name": "Jumlah Pelaksana Teknis (kasi pemerintahan, kasi kesejahteraan, dll)",
                      "value": "3"
                  },
                  {
                      "name": "Jumlah Pelaksana Kewilayahan (kadus, ketua RT, ketua RW, dll.)",
                      "value": "3"
                  },
                  {
                      "name": "Kepemilikan Tanah kas desa\/ulayat",
                      "value": "Tidak ada"
                  },
                  {
                      "name": "Kepemilikan Bangunan milik desa (balai desa, balai rakyat, dll.)",
                      "value": "Ada, digunakan"
                  }
              ]
          }
      ]
  ],
  "sumber": "Sumber data : Podes 2018, Kor Podes 2019, Data DTKS Kemensos, Data Stunting Kemenkes, IDM 2020 Kemendesa PDTT"
  
}';
    }

    public function dd_get()
    {
        echo '{
  "main": [
      {
          "tahun": "2020",
          "dana": "962,724,000"
      },
      {
          "tahun": "2019",
          "dana": "958,469,000"
      },
      {
          "tahun": "2018",
          "dana": "810,396,000"
      },
      {
          "tahun": "2017",
          "dana": "790,967,000"
      },
      {
          "tahun": "2016",
          "dana": "619,462,000"
      },
      {
          "tahun": "2015",
          "dana": "283,151,000"
      }
  ],
  "detail": [
      [
          {
              "name": "2020",
              "body": [
                  {
                      "name": "Penyusunan, Pendataan, dan Pemutakhiran Profil Desa **)",
                      "value": "9,987,000"
                  },
                  {
                      "name": "Penyelenggaraan Musyawarah Perencanaan Desa\/Pembahasan APBDes (Reguler)",
                      "value": "16,000,000"
                  },
                  {
                      "name": "Penyelenggaraan Musyawaran Desa Lainnya (Musdus, rembug desa Non Reguler)",
                      "value": "2,500,000"
                  },
                  {
                      "name": "Penyusunan Dokumen Perencanaan Desa (RPJMDesa\/RKPDesa dll)",
                      "value": "5,000,000"
                  },
                  {
                      "name": "Penyusunan Laporan Kepala Desa, LPPDesa dan Informasi Kepada Masyarakat",
                      "value": "3,500,000"
                  },
                  {
                      "name": "Pengembangan Sistem Informasi Desa",
                      "value": "152,228,460"
                  },
                  {
                      "name": "Penyelenggaran PAUD\/TK\/TPA\/TKA\/TPQ\/Madrasah NonFormal Milik Desa (Honor, Pakaian dll)",
                      "value": "57,200,000"
                  },
                  {
                      "name": "Pengelolaan Perpustakaan Milik Desa (Pengadaan Buku, Honor, Taman Baca)",
                      "value": "24,273,000"
                  },
                  {
                      "name": "Penyelenggaraan Pos Kesehatan Desa\/Polindes Milik Desa (obat, Insentif, KB, dsb)",
                      "value": "3,240,000"
                  },
                  {
                      "name": "Penyelenggaraan Posyandu (Mkn Tambahan, Kls Bumil, Lamsia, Insentif)",
                      "value": "19,880,000"
                  },
                  {
                      "name": "Pembangunan\/Rehabilitasi\/Peningkatan Prasarana Jalan Desa (Gorong, selokan dll)",
                      "value": "132,087,000"
                  },
                  {
                      "name": "Pembangunan\/Rehabilitasi\/Peningkatan Fasilitas Pengelolaan Sampah **)",
                      "value": "81,900,000"
                  },
                  {
                      "name": "Penyelenggaraan Informasi Publik Desa (Poster, Baliho Dll)",
                      "value": "3,600,000"
                  },
                  {
                      "name": "Penanganan Keadaan Darurat",
                      "value": "30,000,000"
                  },
                  {
                      "name": "Penanganan Keadaan Mendesak",
                      "value": "464,400,000"
                  }
              ]
          },
          {
              "name": "2019",
              "body": [
                  {
                      "name": "Penyelenggaraan Musyawarah Perencanaan Desa\/Pembahasan APBDes (Reguler)",
                      "value": "3,500,000"
                  },
                  {
                      "name": "Penyusunan Laporan Kepala Desa, LPPDesa dan Informasi Kepada Masyarakat",
                      "value": "7,400,000"
                  },
                  {
                      "name": "Penyelenggaran PAUD\/TK\/TPA\/TKA\/TPQ\/Madrasah NonFormal Milik Desa (Honor, Pakaian dll)",
                      "value": "57,200,000"
                  },
                  {
                      "name": "Penyuluhan dan Pelatihan Pendidikan Bagi Masyarakat",
                      "value": "2,401,000"
                  },
                  {
                      "name": "Pembangunan\/Rehabilitasi\/Peningkatan\/Pengadaan Sarana\/Prasarana\/Alat Peraga",
                      "value": "20,000,000"
                  },
                  {
                      "name": "Penyelenggaraan Posyandu (Mkn Tambahan, Kls Bumil, Lamsia, Insentif)",
                      "value": "27,060,000"
                  },
                  {
                      "name": "Pembangunan\/Rehabilitasi\/Peningkatan\/Pengadaan Sarana\/Prasarana Posyandu\/Polindes\/PKD **",
                      "value": "7,775,000"
                  },
                  {
                      "name": "Pembangunan\/Rehabilitas\/Peningkatan\/Pengerasan Jalan Desa **)",
                      "value": "148,592,663"
                  },
                  {
                      "name": "Pembangunan\/Rehabilitas\/Peningkatan Fasilitas Jamban Umum\/MCK umum, dll **)",
                      "value": "119,798,000"
                  },
                  {
                      "name": "Pembuatan dan Pengelolaan Jaringan\/Instalasi Komunikasi dan Informasi Lokal Desa",
                      "value": "6,000,000"
                  },
                  {
                      "name": "Pelatihan\/Penyuluhan\/Sosialisasi kepada Masy. di Bid. Hukum & Pelindungan Masy.",
                      "value": "1,500,000"
                  },
                  {
                      "name": "Pelatihan dan Penyuluhan Perlindungan Anak",
                      "value": "2,668,000"
                  },
                  {
                      "name": "Pelatihan Manajemen Koperasi\/KUD\/UMKM",
                      "value": "2,725,000"
                  },
                  {
                      "name": "Pengembangan Sarana Prasarana Usaha Mikro, Kecil, Menengah dan Koperasi",
                      "value": "75,000,000"
                  },
                  {
                      "name": "Pelatihan Pengelolaan BUM Desa (Pelatihan yg dilaksanakan oleh Pemdes)",
                      "value": "5,000,000"
                  },
                  {
                      "name": "Penyertaan Modal Desa",
                      "value": "438,248,337"
                  }
              ]
          },
          {
              "name": "2018",
              "body": [
                  {
                      "name": "Kegiatan Pengadaan Sarana dan Prasarana Lingkungan Pemukiman",
                      "value": "30,000,000"
                  },
                  {
                      "name": "Kegiatan Pembangunan Sarana dan Prasarana Lingkungan Pemukiman",
                      "value": "40,000,000"
                  },
                  {
                      "name": "Kegiatan Pengadaan Sarana dan Prasarana Kesehatan",
                      "value": "25,000,000"
                  },
                  {
                      "name": "Kegiatan Pembangunan Sarana dan Prasarana Kesehatan",
                      "value": "97,180,000"
                  },
                  {
                      "name": "Kegiatan Pengembangan Sarana dan Prasarana Pendidikan dan Kebudayaan",
                      "value": "250,816,000"
                  },
                  {
                      "name": "Kegiatan Pelatihan Usaha Ekonomi, Pertanian, Perikanan dan Perdagangan",
                      "value": "2,000,000"
                  },
                  {
                      "name": "Kegiatan Pengelolaan Pelayanan Kesehatan Masyarakat",
                      "value": "2,400,000"
                  },
                  {
                      "name": "Kegiatan Pengelolaan Pelayanan Pendidikan dan Kebudayaan",
                      "value": "48,800,000"
                  },
                  {
                      "name": "Kegiatan Pengelolaan Informasi dan komunikasi",
                      "value": "41,750,000"
                  },
                  {
                      "name": "Penyertaan Modal Desa",
                      "value": "277,250,000"
                  }
              ]
          }
      ],
      [
          {
              "name": "2017",
              "body": [
                  {
                      "name": "Kegiatan Pengembangan Sarana dan Prasarana Transportasi",
                      "value": "50,500,000"
                  },
                  {
                      "name": "Kegiatan Pembangunan Sarana dan Prasarana Informasi dan Komunikasi",
                      "value": "330,000,000"
                  },
                  {
                      "name": "Kegiatan Pembangunan Sarana dan Prasarana Pengolahan Hasil Pertanian",
                      "value": "260,000,000"
                  },
                  {
                      "name": "Kegiatan Peningkatan Kapasitas Lembaga Masyarakat",
                      "value": "2,000,000"
                  },
                  {
                      "name": "Kegiatan Pemberdayaan Posyandu, UP2K dan BKB",
                      "value": "9,167,000"
                  },
                  {
                      "name": "Kegiatan Pengelolaan Pelayanan Pendidikan dan Kebudayaan",
                      "value": "44,000,000"
                  },
                  {
                      "name": "Penyertaan Modal BUMDES",
                      "value": "95,300,000"
                  }
              ]
          },
          {
              "name": "2016",
              "body": [
                  {
                      "name": "Pembangunan Saluran Irigasi Tersier",
                      "value": "84,065,000"
                  },
                  {
                      "name": "Pembangunan Balai Pendidikan",
                      "value": "21,637,500"
                  },
                  {
                      "name": "Pembangunan Sanggar Tani",
                      "value": "26,000,000"
                  },
                  {
                      "name": "Pengadaan, Pemeliharaan dan Pengembangan sarana Prasarana PAUD",
                      "value": "10,486,000"
                  },
                  {
                      "name": "Pembentukan dan Pembiayaan lembaga ketrampilan desa",
                      "value": "5,000,000"
                  },
                  {
                      "name": "Pengadaan Sarana dan prasarana Lembaga Ketrampilan Desa",
                      "value": "42,641,500"
                  },
                  {
                      "name": "Pengadaan alat dan bahan usaha pabrik roti",
                      "value": "30,000,000"
                  },
                  {
                      "name": "Pengadaan alat dan bahan usaha pabrik kue",
                      "value": "20,000,000"
                  },
                  {
                      "name": "Pembentukan dan pemberian modal usaha kios tani dan lumbung pangan desa",
                      "value": "51,000,000"
                  },
                  {
                      "name": "Operasional PAUD",
                      "value": "6,389,000"
                  },
                  {
                      "name": "Pengadaan Sapi untuk usaha penggemukan",
                      "value": "8,000,000"
                  },
                  {
                      "name": "Pengadaan Peralatan Qasidah untuk Majelis Taklim",
                      "value": "11,025,000"
                  },
                  {
                      "name": "Penyertaan Modal Desa",
                      "value": "303,218,000"
                  }
              ]
          },
          {
              "name": "2015",
              "body": [
                  {
                      "name": "Pembinaan dan pengelolaan pendidikan anak usia dini.",
                      "value": "3,200,000"
                  },
                  {
                      "name": "Pembangunan dan pemeliharaan sanitasi lingkungan",
                      "value": "48,035,402"
                  },
                  {
                      "name": "Pembangunan dan pemeliharaan jalan Desa",
                      "value": "36,032,361"
                  },
                  {
                      "name": "Pendirian dan pengembangan BUM Desa",
                      "value": "7,500,000"
                  },
                  {
                      "name": "Penguatan permodalan BUM Desa",
                      "value": "114,135,479"
                  },
                  {
                      "name": "Kegiatan pengembangan potensi ekonomi lokal lainnya",
                      "value": "74,247,758"
                  }
              ]
          }
      ]
  ]
  
  }';
    }

    public function apbdes_get()
    {
        echo '[
  {
      "tahun": "2020",
      "body": [
          {
              "title": "PENDAPATAN",
              "body": [
                  {
                      "kode_rek": "4.1.1.01",
                      "uraian": "Bagi Hasil BUMDes",
                      "anggaran": "15,000,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.2.1.01",
                      "uraian": "Dana Desa",
                      "anggaran": "962,724,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.2.2.01",
                      "uraian": "Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten\/kota",
                      "anggaran": "6,315,353",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.2.3.01",
                      "uraian": "Alokasi Dana Desa",
                      "anggaran": "316,620,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.3.6.01",
                      "uraian": "Bunga Bank",
                      "anggaran": "562,843",
                      "sumber_dana": "-"
                  }
              ]
          },
          {
              "title": "BELANJA",
              "body": [
                  {
                      "kode_rek": "1.01.01",
                      "uraian": "Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa",
                      "anggaran": "37,800,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.02",
                      "uraian": "Penyediaan Penghasilan Tetap dan Tunjangan Perangkat Desa",
                      "anggaran": "201,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.03",
                      "uraian": "Penyediaan Jaminan Sosial bagi Kepala Desa dan Perangkat Desa",
                      "anggaran": "1,404,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.04",
                      "uraian": "Penyediaan Operasional Pemerintah Desa (ATK, Honor PKPKD dan PPKD dll)",
                      "anggaran": "29,544,696",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.05",
                      "uraian": "Penyediaan Tunjangan BPD",
                      "anggaran": "34,200,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.06",
                      "uraian": "Penyediaan Operasional BPD (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)",
                      "anggaran": "3,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.90",
                      "uraian": "Penyediaan Operasional LPM (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)",
                      "anggaran": "3,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.91",
                      "uraian": "Penyediaan Operasional PKK (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)",
                      "anggaran": "3,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.02.01",
                      "uraian": "Penyediaan Sarana (Aset Tetap) Perkantoran\/Pemerintahan",
                      "anggaran": "15,650,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.03.02",
                      "uraian": "Penyusunan, Pendataan, dan Pemutakhiran Profil Desa **)",
                      "anggaran": "9,987,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.01",
                      "uraian": "Penyelenggaraan Musyawarah Perencanaan Desa\/Pembahasan APBDes (Reguler)",
                      "anggaran": "16,000,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.02",
                      "uraian": "Penyelenggaraan Musyawaran Desa Lainnya (Musdus, rembug desa Non Reguler)",
                      "anggaran": "2,500,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.03",
                      "uraian": "Penyusunan Dokumen Perencanaan Desa (RPJMDesa\/RKPDesa dll)",
                      "anggaran": "5,000,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.07",
                      "uraian": "Penyusunan Laporan Kepala Desa, LPPDesa dan Informasi Kepada Masyarakat",
                      "anggaran": "3,500,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.08",
                      "uraian": "Pengembangan Sistem Informasi Desa",
                      "anggaran": "152,228,460",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.01.01",
                      "uraian": "Penyelenggaran PAUD\/TK\/TPA\/TKA\/TPQ\/Madrasah NonFormal Milik Desa (Honor, Pakaian dll)",
                      "anggaran": "57,200,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.01.08",
                      "uraian": "Pengelolaan Perpustakaan Milik Desa (Pengadaan Buku, Honor, Taman Baca)",
                      "anggaran": "24,273,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.02.01",
                      "uraian": "Penyelenggaraan Pos Kesehatan Desa\/Polindes Milik Desa (obat, Insentif, KB, dsb)",
                      "anggaran": "3,240,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.02.02",
                      "uraian": "Penyelenggaraan Posyandu (Mkn Tambahan, Kls Bumil, Lamsia, Insentif)",
                      "anggaran": "19,880,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.03.14",
                      "uraian": "Pembangunan\/Rehabilitasi\/Peningkatan Prasarana Jalan Desa (Gorong, selokan dll)",
                      "anggaran": "132,087,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.04.15",
                      "uraian": "Pembangunan\/Rehabilitasi\/Peningkatan Fasilitas Pengelolaan Sampah **)",
                      "anggaran": "81,900,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.06.02",
                      "uraian": "Penyelenggaraan Informasi Publik Desa (Poster, Baliho Dll)",
                      "anggaran": "3,600,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.06.02",
                      "uraian": "Penyelenggaraan Informasi Publik Desa (Poster, Baliho Dll)",
                      "anggaran": "169,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "3.02.03",
                      "uraian": "Penyelenggaran Festival Kesenian, Adat\/Kebudayaan, dan Kegamaan (HUT RI, Raya Keagamaan dll)",
                      "anggaran": "5,940,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "4.03.01",
                      "uraian": "Peningkatan kapasitas kepala Desa",
                      "anggaran": "1,800,000",
                      "sumber_dana": "PBH"
                  },
                  {
                      "kode_rek": "5.02.01",
                      "uraian": "Penanganan Keadaan Darurat",
                      "anggaran": "30,000,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "5.03.01",
                      "uraian": "Penanganan Keadaan Mendesak",
                      "anggaran": "464,400,000",
                      "sumber_dana": "DDS"
                  }
              ]
          },
          {
              "title": "PEMBIAYAAN",
              "body": [
                  {
                      "kode_rek": "6.1.1.01",
                      "uraian": "SILPA Tahun Sebelumnya",
                      "anggaran": "43,480,960",
                      "sumber_dana": ""
                  }
              ]
          }
      ]
  },
  {
      "tahun": "2019",
      "body": [
          {
              "title": "PENDAPATAN",
              "body": [
                  {
                      "kode_rek": "4.2.1.01",
                      "uraian": "Dana Desa",
                      "anggaran": "958,469,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.2.2.01",
                      "uraian": "Bagian dari Hasil Pajak dan Retribusi Daerah Kabupaten\/kota",
                      "anggaran": "4,566,450",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.2.3.01",
                      "uraian": "Alokasi Dana Desa",
                      "anggaran": "338,774,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.3.5.01",
                      "uraian": "Koreksi kesalahan belanja tahun-tahun anggaran sebelumnya yang mengakibatkan penerimaan di kas Desa pada tahun anggaran berjalan",
                      "anggaran": "1,500,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "4.3.6.01",
                      "uraian": "Bunga Bank",
                      "anggaran": "614,843",
                      "sumber_dana": "-"
                  }
              ]
          },
          {
              "title": "BELANJA",
              "body": [
                  {
                      "kode_rek": "1.01.01",
                      "uraian": "Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa",
                      "anggaran": "36,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.02",
                      "uraian": "Penyediaan Penghasilan Tetap dan Tunjangan Perangkat Desa",
                      "anggaran": "143,400,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.03",
                      "uraian": "Penyediaan Jaminan Sosial bagi Kepala Desa dan Perangkat Desa",
                      "anggaran": "520,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.04",
                      "uraian": "Penyediaan Operasional Pemerintah Desa (ATK, Honor PKPKD dan PPKD dll)",
                      "anggaran": "56,420,843",
                      "sumber_dana": "PAD"
                  },
                  {
                      "kode_rek": "1.01.05",
                      "uraian": "Penyediaan Tunjangan BPD",
                      "anggaran": "46,200,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.06",
                      "uraian": "Penyediaan Operasional BPD (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)",
                      "anggaran": "3,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.90",
                      "uraian": "Penyediaan Operasional LPM (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)",
                      "anggaran": "4,200,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.01.91",
                      "uraian": "Penyediaan Operasional PKK (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)",
                      "anggaran": "7,200,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.02.01",
                      "uraian": "Penyediaan Sarana (Aset Tetap) Perkantoran\/Pemerintahan",
                      "anggaran": "21,479,497",
                      "sumber_dana": "PAD"
                  },
                  {
                      "kode_rek": "1.02.02",
                      "uraian": "Pemeliharaan Gedung\/Prasarana Kantor Desa",
                      "anggaran": "13,323,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "1.03.05",
                      "uraian": "Pemetaan dan Analisis Kemiskinan Desa secara Partisipatif",
                      "anggaran": "2,000,000",
                      "sumber_dana": "PAD"
                  },
                  {
                      "kode_rek": "1.04.01",
                      "uraian": "Penyelenggaraan Musyawarah Perencanaan Desa\/Pembahasan APBDes (Reguler)",
                      "anggaran": "3,500,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.07",
                      "uraian": "Penyusunan Laporan Kepala Desa, LPPDesa dan Informasi Kepada Masyarakat",
                      "anggaran": "7,400,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "1.04.10",
                      "uraian": "Dukungan & Sosialisasi Pelaksanaan Pilkades, Pemilihan Ka. Kewilayahan & BPD",
                      "anggaran": "9,441,450",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.01.01",
                      "uraian": "Penyelenggaran PAUD\/TK\/TPA\/TKA\/TPQ\/Madrasah NonFormal Milik Desa (Honor, Pakaian dll)",
                      "anggaran": "57,200,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.01.03",
                      "uraian": "Penyuluhan dan Pelatihan Pendidikan Bagi Masyarakat",
                      "anggaran": "2,401,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.01.06",
                      "uraian": "Pembangunan\/Rehabilitasi\/Peningkatan\/Pengadaan Sarana\/Prasarana\/Alat Peraga",
                      "anggaran": "20,000,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.02.02",
                      "uraian": "Penyelenggaraan Posyandu (Mkn Tambahan, Kls Bumil, Lamsia, Insentif)",
                      "anggaran": "27,060,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.02.09",
                      "uraian": "Pembangunan\/Rehabilitasi\/Peningkatan\/Pengadaan Sarana\/Prasarana Posyandu\/Polindes\/PKD **",
                      "anggaran": "7,775,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.03.05",
                      "uraian": "Pemeliharaan Prasarana Jalan Desa (Gorong-gorong, Selokan, Box\/Slab Culvert, Drainase, Prasarana Jalan lain)",
                      "anggaran": "8,601,000",
                      "sumber_dana": "PAD"
                  },
                  {
                      "kode_rek": "2.03.10",
                      "uraian": "Pembangunan\/Rehabilitas\/Peningkatan\/Pengerasan Jalan Desa **)",
                      "anggaran": "148,592,663",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.04.12",
                      "uraian": "Pembangunan\/Rehabilitasi\/Peningkatan Sambungan Air Bersih ke Rumah Tangga (pipanisasi, dll) **",
                      "anggaran": "25,000,000",
                      "sumber_dana": "PAD"
                  },
                  {
                      "kode_rek": "2.04.14",
                      "uraian": "Pembangunan\/Rehabilitas\/Peningkatan Fasilitas Jamban Umum\/MCK umum, dll **)",
                      "anggaran": "119,798,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "2.06.02",
                      "uraian": "Penyelenggaraan Informasi Publik Desa (Poster, Baliho Dll)",
                      "anggaran": "750,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.06.03",
                      "uraian": "Pembuatan dan Pengelolaan Jaringan\/Instalasi Komunikasi dan Informasi Lokal Desa",
                      "anggaran": "6,000,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "3.01.07",
                      "uraian": "Pelatihan\/Penyuluhan\/Sosialisasi kepada Masy. di Bid. Hukum & Pelindungan Masy.",
                      "anggaran": "1,500,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "3.02.02",
                      "uraian": "Pengiriman Kontingen Group Kesenian & Kebudayaan (Wakil Desa tkt. Kec\/Kab\/Kot)",
                      "anggaran": "6,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "3.02.03",
                      "uraian": "Penyelenggaran Festival Kesenian, Adat\/Kebudayaan, dan Kegamaan (HUT RI, Raya Keagamaan dll)",
                      "anggaran": "7,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "4.03.01",
                      "uraian": "Peningkatan Kapasitas Kepala Desa",
                      "anggaran": "5,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "4.04.02",
                      "uraian": "Pelatihan dan Penyuluhan Perlindungan Anak",
                      "anggaran": "2,668,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "4.05.01",
                      "uraian": "Pelatihan Manajemen Koperasi\/KUD\/UMKM",
                      "anggaran": "2,725,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "4.05.02",
                      "uraian": "Pengembangan Sarana Prasarana Usaha Mikro, Kecil, Menengah dan Koperasi",
                      "anggaran": "75,000,000",
                      "sumber_dana": "DDS"
                  },
                  {
                      "kode_rek": "4.06.02",
                      "uraian": "Pelatihan Pengelolaan BUM Desa (Pelatihan yg dilaksanakan oleh Pemdes)",
                      "anggaran": "5,000,000",
                      "sumber_dana": "DDS"
                  }
              ]
          },
          {
              "title": "PEMBIAYAAN",
              "body": [
                  {
                      "kode_rek": "6.1.1.01",
                      "uraian": "SILPA Tahun Sebelumnya",
                      "anggaran": "17,679,497",
                      "sumber_dana": ""
                  },
                  {
                      "kode_rek": "6.2.2.01",
                      "uraian": "Penyertaan Modal Desa",
                      "anggaran": "438,248,337",
                      "sumber_dana": "DDS"
                  }
              ]
          }
      ]
  },
  {
      "tahun": "2018",
      "body": [
          {
              "title": "PENDAPATAN",
              "body": [
                  {
                      "kode_rek": "1.1",
                      "uraian": "Pendapatan Lain Lain",
                      "anggaran": "1,506,256",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "1.1",
                      "uraian": "Bagi Hasil Pajak dan Retribusi Daerah",
                      "anggaran": "5,979,497",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "1.2.1",
                      "uraian": "Dana Desa",
                      "anggaran": "810,396,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "1.2.3",
                      "uraian": "Alokasi Dana Desa ( ADD )",
                      "anggaran": "330,407,000",
                      "sumber_dana": "-"
                  }
              ]
          },
          {
              "title": "BELANJA",
              "body": [
                  {
                      "kode_rek": "2.1",
                      "uraian": "Pembayaran Penghasilan Tetap dan Tunjangan",
                      "anggaran": "178,200,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1",
                      "uraian": "Kegiatan Operasional Kantor Desa",
                      "anggaran": "75,071,753",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1",
                      "uraian": "Kegiatan Pengelolaan Informasi Desa",
                      "anggaran": "4,100,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1",
                      "uraian": "Kegiatan Pendidikan,Pelatihan dan Penyuluhan bagi Kepala Desa,Perangkat Desa,dan BPD",
                      "anggaran": "4,500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1",
                      "uraian": "Kegiatan Pengelolaan Arsip Desa",
                      "anggaran": "5,986,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1",
                      "uraian": "Kegiatan Hari Besar Nasional",
                      "anggaran": "12,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1",
                      "uraian": "Kegiatan Hari Besar Keagamaan",
                      "anggaran": "10,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.23",
                      "uraian": "Kegiatan Penyusunan LPPD dan LKPJ Tahunan",
                      "anggaran": "3,500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.3",
                      "uraian": "Kegiatan Operasional BPD",
                      "anggaran": "2,400,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.33",
                      "uraian": "Kegiatan Pendataan Basis Data Terpadu",
                      "anggaran": "2,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.5",
                      "uraian": "Kegiatan Operasional LPM",
                      "anggaran": "3,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.6",
                      "uraian": "Kegiatan Operasional PKK",
                      "anggaran": "6,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.7",
                      "uraian": "Kegiatan Operasional Karang Taruna",
                      "anggaran": "1,500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.8",
                      "uraian": "Kegiatan Penyelenggaraan Musyawarah Desa",
                      "anggaran": "3,100,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.9",
                      "uraian": "Kegiatan Perencanaan Pembangunan Desa",
                      "anggaran": "500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.2",
                      "uraian": "Kegiatan Pengadaan Sarana dan Prasarana Lingkungan Pemukiman",
                      "anggaran": "30,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2",
                      "uraian": "Kegiatan Pembangunan Sarana dan Prasarana Lingkungan Pemukiman",
                      "anggaran": "40,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2",
                      "uraian": "Kegiatan Pengadaan Sarana dan Prasarana Kesehatan",
                      "anggaran": "25,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2",
                      "uraian": "Kegiatan Pengembangan Sarana dan Prasarana Pendidikan dan Kebudayaan",
                      "anggaran": "250,816,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2",
                      "uraian": "Kegiatan Pemeliharaan Sarana dan Prasarana Fisik kantor Desa",
                      "anggaran": "2,785,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.2.18",
                      "uraian": "Kegiatan Pembangunan Sarana dan Prasarana Kesehatan",
                      "anggaran": "97,180,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2.58",
                      "uraian": "Kegiatan Pembangunan Gapura dan Tanda Batas Desa",
                      "anggaran": "2,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.3",
                      "uraian": "Kegiatan Pembinaan Kerukunan Umat Beragama",
                      "anggaran": "10,200,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.3.2",
                      "uraian": "Kegiatan Pembinaan Pemuda dan Olahraga",
                      "anggaran": "1,500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.4",
                      "uraian": "Kegiatan Pengelolaan Pelayanan Pendidikan dan Kebudayaan",
                      "anggaran": "48,800,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4",
                      "uraian": "Kegiatan Pengelolaan Informasi dan komunikasi",
                      "anggaran": "41,750,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4.1",
                      "uraian": "Kegiatan Pelatihan Usaha Ekonomi, Pertanian, Perikanan dan Perdagangan",
                      "anggaran": "2,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4.3",
                      "uraian": "Kegiatan Pemberdayaan Posyandu, UP2K dan BKB",
                      "anggaran": "4,800,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.4.8",
                      "uraian": "Kegiatan Pengelolaan Pelayanan Kesehatan Masyarakat",
                      "anggaran": "2,400,000",
                      "sumber_dana": "DD"
                  }
              ]
          },
          {
              "title": "PEMBIAYAAN",
              "body": [
                  {
                      "kode_rek": "3.1.1",
                      "uraian": "Sisa Lebih Perhitungan Anggaran Tahun Sebelumnya",
                      "anggaran": "50,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "3.2",
                      "uraian": "Penyertaan Modal Desa",
                      "anggaran": "277,250,000",
                      "sumber_dana": "DD"
                  }
              ]
          }
      ]
  },
  {
      "tahun": "2017",
      "body": [
          {
              "title": "PENDAPATAN",
              "body": [
                  {
                      "kode_rek": "1.2.1",
                      "uraian": "Dana Desa",
                      "anggaran": "790,967,000",
                      "sumber_dana": "-"
                  },
                  {
                      "kode_rek": "1.2.3",
                      "uraian": "Alokasi Dana Desa ( ADD )",
                      "anggaran": "317,211,000",
                      "sumber_dana": "-"
                  }
              ]
          },
          {
              "title": "BELANJA",
              "body": [
                  {
                      "kode_rek": "2.1.1",
                      "uraian": "Pembayaran Penghasilan Tetap dan Tunjangan",
                      "anggaran": "178,950,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.1",
                      "uraian": "Kegiatan Operasional PKK",
                      "anggaran": "6,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.1",
                      "uraian": "Kegiatan Penjaringan dan Penetapan Perangkat Desa",
                      "anggaran": "1,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.1",
                      "uraian": "Kegiatan Penetapan Organisasi Pemerintah Desa (SOTK Desa)",
                      "anggaran": "5,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.1",
                      "uraian": "Kegiatan Pengelolaan Aset Desa",
                      "anggaran": "2,400,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.1",
                      "uraian": "Kegiatan Pengelolaan Arsip Desa",
                      "anggaran": "7,681,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Operasional Kantor Desa",
                      "anggaran": "38,680,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Pengembangan Sistem Administrasi dan Informasi Desa",
                      "anggaran": "6,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Penyusunan LPPD dan LKPJ Tahunan",
                      "anggaran": "250,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Penyelenggaraan Evaluasi Tingkat Perkembangan Pemerintah Desa",
                      "anggaran": "400,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Hari Besar Nasional",
                      "anggaran": "1,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Hari Besar Keagamaan",
                      "anggaran": "3,500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.2",
                      "uraian": "Kegiatan Hari Ulang tahun Desa",
                      "anggaran": "3,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.3",
                      "uraian": "Kegiatan Operasional BPD",
                      "anggaran": "2,400,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.3",
                      "uraian": "Kegiatan Evaluasi Perkembangan Desa dan lomba Desa",
                      "anggaran": "12,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.5",
                      "uraian": "Kegiatan Penyelenggaraan Musyawarah Desa",
                      "anggaran": "250,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.6",
                      "uraian": "Kegiatan Perencanaan Pembangunan Desa",
                      "anggaran": "500,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.7",
                      "uraian": "Kegiatan Pengelolaan Informasi Desa",
                      "anggaran": "3,600,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.1.9",
                      "uraian": "Kegiatan Operasional LPM",
                      "anggaran": "3,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.2.1",
                      "uraian": "Kegiatan Pembangunan Sarana dan Prasarana Informasi dan Komunikasi",
                      "anggaran": "330,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2.3",
                      "uraian": "Kegiatan Pembangunan Sarana dan Prasarana Pengolahan Hasil Pertanian",
                      "anggaran": "260,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.2.5",
                      "uraian": "Kegiatan Pembangunan Gapura dan Tanda Batas Desa",
                      "anggaran": "1,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.2.6",
                      "uraian": "Kegiatan Pengembangan Sarana dan Prasarana fisik kantor Desa",
                      "anggaran": "28,000,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.2.7",
                      "uraian": "Kegiatan Pengembangan Sarana dan Prasarana Transportasi",
                      "anggaran": "50,500,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.3.5",
                      "uraian": "Kegiatan Pembinaan Kerukunan Umat Beragama",
                      "anggaran": "7,800,000",
                      "sumber_dana": "ADD"
                  },
                  {
                      "kode_rek": "2.4",
                      "uraian": "Penyertaan Modal BUMDES",
                      "anggaran": "95,300,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4.1",
                      "uraian": "Kegiatan Pengelolaan Pelayanan Pendidikan dan Kebudayaan",
                      "anggaran": "44,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4.2",
                      "uraian": "Kegiatan Peningkatan Kapasitas Lembaga Masyarakat",
                      "anggaran": "2,000,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4.3",
                      "uraian": "Kegiatan Pemberdayaan Posyandu, UP2K dan BKB",
                      "anggaran": "9,167,000",
                      "sumber_dana": "DD"
                  },
                  {
                      "kode_rek": "2.4.3",
                      "uraian": "Kegiatan Pemberdayaan Posyandu, UP2K dan BKB",
                      "anggaran": "4,800,000",
                      "sumber_dana": "ADD"
                  }
              ]
          },
          {
              "title": "PEMBIAYAAN",
              "body": []
          }
      ]
  }
  
  ]';
    }
}
