<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    protected $fillable=[
        'site-title',
        'site-keywords',
        'site-description',
        'site-adres',
        'telephone',
        'general-mail',
        'adress',
        'il',
        'ilce',
        'facebook',
        'twitter',
        'insta',
        'youtube',
        'username',
        'password',
        'smtphost',
        'smtpport'
        ];
}
