<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplayBanner extends Model
{
    use HasFactory;
    protected $fillable = ['type','image','banner_title','banner_head','banner_description'];
}
