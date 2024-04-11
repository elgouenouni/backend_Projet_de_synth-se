<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceReservation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['date_actuel','reservation_termine','service_id','reservation_id','client_cin'];
}
