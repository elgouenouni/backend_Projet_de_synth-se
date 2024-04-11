<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestataireService extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['date_debut','service_termine','cin_prestataire','service_id'];
}
