<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "tbl_user";
    protected $primaryKey = 'id';
    protected $allowedFields = [
        "username",
        "email",
        "password",
        "nama",
        "jenis_kelamin",
        "alamat",
        "type"
    ];
}
?>