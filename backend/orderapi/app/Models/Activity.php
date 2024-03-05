<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';
    protected $fillable =[
        'description',
        'hours',
        'technician_id',
        'type_id'
    ];

    /**
     * se debe colocar el nombre de la FK ya que esta hace referencia al 
     * campo document de de technician y por llamarse diferente 
     */

    public function technician()
    {
    return $this->belongTO(Technician::class, 'technician_id');
    }

    public function type_activity()
    {
    return $this->belongTO(TypeActivity::class, 'type_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_activity', 'order_id', 'activity_id');
    }
   




}