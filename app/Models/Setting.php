<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_email',
        'site_logo', 'site_phone1', 'site_phone2', 'user_id', 'site_location', 'site_slogan', 'site_facebook', 'site_instagram', 'site_twitter', 'site_linkedin', 'site_youtube',
    ];
}