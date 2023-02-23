<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'sec_audit_logs';
    
    public function SecUser()
    {
        return $this->belongsTo(SecUser::class, 'jenis_pengguna');
    }
}
