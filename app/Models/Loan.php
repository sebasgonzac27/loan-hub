<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'program_id',
        'status',
        'loan_date',
        'return_date',
        'activity',
        'classroom_id',
        'observations',
        'User_id',
        'User_id_return',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function device()
    {
        return $this->belongsToMany(Device::class, 'devices_loans')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
