<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = "tbl_produk";
    protected $primaryKey = 'id_produk';
    protected $allowedFields = [
        "nama_produk",
        "jenis_produk",
        "deskripsi_produk",
        "harga_produk",
        "image"
    ];
}

?>