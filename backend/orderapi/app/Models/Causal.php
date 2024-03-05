<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causal extends Model
{
    use HasFactory;
    protected $table = 'causal';
    protected $fillable =['description'];

    public function ordesrs()
    {
        return $this->hasMany(Causal::class);
    }
}
