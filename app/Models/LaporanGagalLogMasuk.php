<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanGagalLogMasuk extends Model
{
    use HasFactory;
    protected $table = 'sec_users';
    protected $table1 = 'app_rfd_infos';

    public function SecUser()
    {
        return $this->hasMany(LaporanGagalLogMasuk::class);
    }

    


}
