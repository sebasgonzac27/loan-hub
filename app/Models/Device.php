<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'inventory_number',
        'status',
        'category_id',
        'campus_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
}
