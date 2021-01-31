<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HobbyUser extends Model
{
    use HasFactory;

    protected $table      = 'hobby_user';
    protected $primaryKey = 'id';

    protected $guarded = [];
}
