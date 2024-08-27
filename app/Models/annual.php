<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annual extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'annualID';
    protected $table = 'annual';
    use HasFactory;
}
