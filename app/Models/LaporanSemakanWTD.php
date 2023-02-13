<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanSemakanWTD extends Model
{
    use HasFactory;
    protected $table = 'app_rfd_bos';

    public function AppRfdInfo()
    {
        return $this->belongsTo(LaporanSemakanWTD::class);
    }

    public function LaporanGagalLogMasuk()
    {
        return $this->belongsTo(SecUser::class, 'username');
    }


}
