<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['cin','nom','prenom','telephone','situation'];

    public function services(){
        return $this->belongsToMany(Service::class)->withPivot('date_debut','service_termine');
    }
}
