<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class CommunityPost extends Model
{
    use HasFactory,Commentable;
    protected $guarded = [];

    protected $casts = [
        'tag' => 'array'
    ];



    public function user()
    {
        return $this->belongsTo(User::class,);
    }
    public function getImageUrlAttribute($value)
    {
        // Check if $value contains the substring 'google'
        if (strpos($value, 'https://') !== false) {
            return $value; // Return original $value if it contains 'google'
        } else {
            return $value ? asset('storage/' . $value) : null; // Otherwise, prepend 'storage/' and return
        }
    }
}
