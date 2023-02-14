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

    public function Sec_Audit()
    {
        return $this->hasOne(PengurusanPengguna::class, 'entity_name');
    }

    public function RefBoMaster()
    {
       return $this->belongsTo(RefBoMaster::class, 'status');
    }
}

