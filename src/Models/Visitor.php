<?php

namespace SenishinAleksey\LaravelAnalytics\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'value',
        'route',
        'ip_address',
    ];

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
