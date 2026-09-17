<?php
namespace Config;
use CodeIgniter\Config\BaseConfig;
class Project extends BaseConfig {
 public string $title = 'Sistem Inventaris Sekolah';
 public string $database = 'db_inventaris_sekolah';
 public int $stage = 1;
 public array $authTables = ['pengguna', 'peminjam'];
 public array $authNameFields = ['nama_pengguna', 'nama_peminjam', 'nama', 'username'];
 public array $resources = [];
 public array $allRelations = ['barang' => ['id_kategori' => ['kategori_barang', 'id_kategori', 'nama_kategori'], 'id_ruangan' => ['ruangan', 'id_ruangan', 'nama_ruangan']], 'peminjaman_barang' => ['id_barang' => ['barang', 'id_barang', 'nama_barang'], 'id_pengguna' => ['pengguna', 'id_pengguna', 'nama_pengguna']], 'pengembalian_barang' => ['id_peminjaman' => ['peminjaman_barang', 'id_peminjaman', 'id_peminjaman']]];
 public string $reportTitle = 'Laporan Inventaris dan Peminjaman Barang';
}
