<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Circumscription extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    protected $guarded = [];

    public function province()
    {
       return $this->belongsTo(Province::class,'id_province');
    }

    public function nameUc()
    {
        return ucfirst(strtolower($this->name));
    }
}
