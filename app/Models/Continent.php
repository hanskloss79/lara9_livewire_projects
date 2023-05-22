<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Continent extends Model
{
    use HasFactory;

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
