<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class DeclineModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'blurb',
        'story_flow',
        'user_id'

    ];

    protected $casts = [
        'genre'=>'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
