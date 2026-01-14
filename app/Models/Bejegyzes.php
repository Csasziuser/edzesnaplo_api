<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bejegyzes extends Model
{
     protected $table = "bejegyzesek";
     protected $fillable = [
            "gyakorlat",
            "ismetlesszam",
            "datum"
     ];
}
