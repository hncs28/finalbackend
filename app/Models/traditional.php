<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traditional extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'tradiID';
    protected $table = 'traditional';
    use HasFactory;
}
