<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'email'];

    public function programs(){
        return $this->belongsToMany(Program::class, 'clients_programs')->withTimestamps();
    }

    public function loans(){
        return $this->hasMany(Loan::class);
    }
}
