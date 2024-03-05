<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    protected $table = 'observation';
    protected $fillable = ['description'];

    public function ordesrs()
    {
        return $this->hasMany(Causal::class);
    }
}
