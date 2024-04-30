<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
