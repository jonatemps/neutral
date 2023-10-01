<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Testimony extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    
    public function getStarts(){
        if ($this->star_number == 1) {
            return '<span class="star fas fa-star text-warning"></span>
            <span class="star far fa-star text-gray"></span>
            <span class="star far fa-star text-gray"></span>
            <span class="star far fa-star text-gray"></span>
            <span class="star far fa-star text-gray"></span>';
        }elseif ($this->star_number == 2) {
            return '<span class="star fas fa-star text-warning"></span>
        <span class="star fas fa-star text-warning"></span>
        <span class="star far fa-star text-gray"></span>
        <span class="star far fa-star text-gray"></span>
        <span class="star far fa-star text-gray"></span>';
        }elseif ($this->star_number == 3) {
            return '<span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star far fa-star text-gray"></span>
                <span class="star far fa-star text-gray"></span>';
        }elseif ($this->star_number == 4) {
            return '<span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star far fa-star text-gray"></span>';
        }elseif ($this->star_number == 5) {
            return '<span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>
                <span class="star fas fa-star text-warning"></span>';
        }

    }
}
