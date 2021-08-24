<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCar extends Model
{
    use HasFactory;

    protected $fillable = [
      'from_destination',
      'to_destination',
      'start_date',
      'end_date',
    ];


    protected $table = 'order_car';
}
