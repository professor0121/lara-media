<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = ['name', 'slug', 'title', 'role', 'bio', 'image_path', 'is_active'];
}
