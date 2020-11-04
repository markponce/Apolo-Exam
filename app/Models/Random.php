<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    use HasFactory;

    public function breakdowns() {
        return $this->hasMany('App\Models\Breakdown');
    }

    public static function generate($min=1, $max=5) {
        $randomNum = rand($min,$max);
        $firstCreationDate = '';
        for ($i=0; $i < $randomNum; $i++) {
            $random = Random::factory()->create();
            if($i == 0) {
                $firstCreationDate = $random->created_at;
            }
            $randomBreakdownNum = rand($min,$max);
            $random->breakdowns()->saveMany(
                Breakdown::factory()->count($randomBreakdownNum)->make()
            );
        }
        return Random::with('breakdowns')->where('created_at', '>=', $firstCreationDate)->get();
    }
}
