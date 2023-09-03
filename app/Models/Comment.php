<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // protected $with = ['comments'];

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getDate(){
        $formatted = Carbon::parse($this->updated_at)->translatedFormat('l, F j, Y');
return $formatted;

    }
}
