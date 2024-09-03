<?php
return [
  'nama_app'  => 'Sistem Informasi Managemen Ruang dan Laborarorium',
  'deskripsi' => 'Sebuah sistem yang dirancang untuk mengelola dan mengatur penggunaan ruang serta laboratorium secara efektif dan efisien. Sistem ini memanfaatkan teknologi informasi untuk mengumpulkan, menyimpan, mengolah, dan menyajikan data-data terkait ruang dan laboratorium',
  'singkatan' => 'Marun',
  'url_app'   => 'http://marun.apps/',
  'logo'      => 'ubt.png',
  'logologin' => 'ubt.webp',
  'icon'      => 'favicon.ico',
  // 'wa'        => 'https://wa.me/628115307023',
  'ukuran'    => '1024',
  'role'      => [
    '10' => 'Super Admin',
    '20' => 'Admin',
    '30' => 'Vaerifikator',
    '40' => 'Operator Data Ruang',
    '90' => 'Personal'
  ],
  'tahap' => [
    '1' => 'Verifikasi Email',
    '2' => 'Tahap 1 Pengisian Biodata Mahasiswa',
    '3' => 'Tahap 2 Isi Survei, Pemberkasan, Validasi Bebas Lab',
    '4' => 'Tahap 3 Validasi Keuangan & Pilih Periode Wisuda',
    '5' => 'Print Bukti Pendaftaran',
  ],
  'status' => [
    '0' => 'Tolak Peserta',
    '1' => 'Belum Mendaftar',
    '2' => 'Proses Verifikasi',
    '3' => 'Perbaikan',
    '4' => 'Sudah Valid',
  ],
];
