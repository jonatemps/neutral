<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitle(){
        if ($this->title > substr($this->title,0,40)) {
            return substr($this->title,0,40).'...';
        } else {
            return substr($this->title,0,40);
        }
    }
}
