<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cocoa_content', 'sugar_content'
    ];

    public static function csokisakTartalma() {
        return Candy::all()->avg('sugar_content');
    }
}
