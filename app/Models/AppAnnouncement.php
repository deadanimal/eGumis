<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppAnnouncement extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'app_announcements';
    protected $timestamps = false;
}
