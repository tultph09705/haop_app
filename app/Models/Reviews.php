<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'time',
        'rate',
        'user_id',
        'course_id',
        'parent_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeMain($query)
    {
        return $query->orderBy('parent_id', config('home.high_to_low'))->limit(config('reviews.review_number_home'));
    }
}
