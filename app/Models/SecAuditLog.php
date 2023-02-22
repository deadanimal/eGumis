<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecAuditLog extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $table = 'sec_audit_logs';

}
