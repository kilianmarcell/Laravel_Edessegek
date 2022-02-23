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

    public static function csokisakCukorTartalma() : float {
        //$candies = Candy::all();

        //$sum = 0;
        //$count = 0;

        //foreach ($candies as $c) {
        //    if ($c->cocoa_content > 0) {
        //        $sum += $c->sugar_content;
        //        $count++;
        //    }
        //}

        //if ($count === 0) {
        //    return NAN;
        //}

        //return floatval($sum) / $count;

        $atlag = Candy::where('cocoa_content', '>', 0)
            ->avg('sugar_content');

        if ($atlag === null) {
            return NAN;
        }

        return $atlag;
    }
}
