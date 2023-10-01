<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $with = ['replys'];

    protected $guarded = [];

    public function replys()
    {
        return $this->hasMany(Comment::class);
    }

    public function getDate(){
        $formatted = Carbon::parse($this->updated_at)->diffForHumans();
return $formatted;

    }
}
