<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = "tbl_komentar";
    protected $primaryKey = 'id_komentar';
    protected $allowedFields = [
        "username",
        "deskripsi",
    ];
}

?>