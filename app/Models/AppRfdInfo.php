<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppRfdInfo extends Model
{
    use HasFactory;
    protected $table = 'app_rfd_infos';

    public function AppRfdBos()
    {
        return $this->hasOne(LaporanSemakanWTD::class);
    }

    public function LaporanSemakanWTD()
    {
        return $this->hasOne(AppRfdInfo::class);
    }
}
