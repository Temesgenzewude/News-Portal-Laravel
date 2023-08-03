<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "site_name",
        "site_desc",
        "twitter",
        "facebook",
        "instagram",
        "site_logo",
        'about',
        "linkedin",
        "youtube"
    ];
}
