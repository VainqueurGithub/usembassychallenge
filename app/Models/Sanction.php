<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    protected $fillable=['Detail_id', 'Sanction', 'Etat'];
}
