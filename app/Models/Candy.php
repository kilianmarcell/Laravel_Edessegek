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
        //$candies = Candy::all();

        //$sum = 0;
        //$count = 0;

        //foreach ($candies as $c) {
        //    if ($candies->cocoa_content > 0) {
        //        $sum += $c->sugar_content;
        //        $count++;
        //    }
        //}

        //return $sum / $count;

        return Candy::where('cocoa_content', '>', 0)->avg('sugar_content');
    }
}
