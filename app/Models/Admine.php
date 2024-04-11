<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom','prenom','adress','password',"login"];
}
