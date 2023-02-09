<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusanPengguna extends Model
{
    use HasFactory;
    protected $table = 'sec_audit_trxs';

    public function Sec_User()
    {
        return $this->belongsTo(DaftarPengguna::class);
    }

}
