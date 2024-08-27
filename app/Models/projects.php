<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'projectID';
    protected $table = 'projects';
    use HasFactory;
}
