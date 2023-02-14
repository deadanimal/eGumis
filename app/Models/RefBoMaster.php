<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefBoMaster extends Model
{
    use HasFactory;
    protected $table = 'ref_bo_masters';

    public function DaftarPengguna()
    {
        return $this->hasOne(DaftarPengguna::class);
    }
}
