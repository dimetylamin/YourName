<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic_chapter extends Model
{
    use HasFactory;
    protected $table='comic_chapter';
    protected $primarykey='id';
}
