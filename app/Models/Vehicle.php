<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    use HasFactory;


    protected $fillable = [
        'mark', 'model', 'year', 'value','quantity','image'
    ];

    public function sales(): HasMany{
        return $this->hasMany(Sale::class);
    }


}
