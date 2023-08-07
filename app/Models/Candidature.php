<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Candidature extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    protected $with = ['mandats'];
    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */

     public function candidate()
     {
        return $this->belongsTo(Candidate::class,'candidate_id');
     }

     public function mandats()
     {
        return $this->belongsToMany(Mandate::class);
     }
     public function circumscription()
     {
        return $this->belongsTo(Circumscription::class,'id_circumscription');
     }

     public function year()
     {
        return $this->belongsTo(Year::class,'id_year');
     }
}
