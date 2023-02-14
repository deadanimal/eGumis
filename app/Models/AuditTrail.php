<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    use HasFactory;
    protected $table = 'sec_audit_logs';
    
    public function SecUser()
    {
        return $this->hasOne(SecUser::class);
    }
}
