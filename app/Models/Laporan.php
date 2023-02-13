<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Laporan extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'audit_log_mas';

    public function User()
    {
        return $this->hasMany(Laporan::class);

    }

    public function DaftarPengguna(){
        return $this->hasOneThrough(Laporan::class, 'id');
    }

    public function SecUser()
    {
        return $this->hasOne(SecUser::class, 'username');
    }
}
