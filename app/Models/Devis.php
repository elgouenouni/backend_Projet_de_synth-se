<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['dateDevis','totale','devis_valid','devis_estPayé','reservation_id','client_cin','fondateur_id'];
}
