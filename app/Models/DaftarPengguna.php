<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPengguna extends Model
{
    use HasFactory;
    protected $table = 'sec_users';

    // public function AuditLogMa()
    // {
    //    return $this->hasOne(DaftarPengguna::class, 'id', 'username');
    // }

}

