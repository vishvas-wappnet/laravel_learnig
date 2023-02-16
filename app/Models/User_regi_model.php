<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_regi_model extends Model
{
    use HasFactory;

    protected $table = "user_regi";
    protected $primaryKey = "id";
}
