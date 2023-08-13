<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Memo extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getDate(){
        $formatted = Carbon::parse($this->updated_at)->translatedFormat('l, F j, Y');
return $formatted;

    }

}
