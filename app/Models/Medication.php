<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    /** @use HasFactory<\Database\Factories\MedicationFactory> */
    use HasFactory;
    protected $fillable = [
        'category_id',
        'segment_id',
        'name',
        'description'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function segment()
    {
        return $this->belongsTo(Segment::class, 'segment_id');
    }
}
