<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    /** @use HasFactory<\Database\Factories\SegmentFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function medications()
    {
        return $this->hasMany(Medication::class);
    }
}
