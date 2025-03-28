<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// class SecUser extends Model
// {
//     use HasFactory;
// }

class SecUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = ['id'];
    protected $table = 'sec_users';

    // public function Laporan()
    // {
    //     return $this->belongsTo(Laporan::class);
    // }

    // public function LaporanLogGagalMasuk()
    // {
    //     return $this->belongsTo(LaporanGagalLogMasuk::class);
    // }

    // public function AuditTrail()
    // {
    //    return $this->hasOne(AuditTrail::class);
    // }
    
}