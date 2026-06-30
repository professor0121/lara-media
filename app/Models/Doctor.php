<?php

namespace App\Models;

use Database\Factories\DoctorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<DoctorFactory> */
    use HasFactory;

    protected $fillable = ['department_id', 'name', 'slug', 'title', 'specialty', 'bio', 'image_path'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
