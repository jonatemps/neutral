<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Ramsey\Uuid\Uuid;

class Candidate extends Model
{
    use HasFactory,HasUuids,AsSource, Filterable, Attachable;
    // protected $with = ['party'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    // protected $with = ['candidature'];
    protected $guarded = [];

    public function newUniqueId()
    {
        return (string) Uuid::uuid4();
    }

    public function uniqueIds()
    {
        return ['discount_code'];
    }


    public function fullName()
    {
        return $this->name.' '.$this->lastname.' '.$this->firstname;
    }


    public function party()
    {
        return $this->belongsTo(Party::class,'id_party');
    }

    public function diplomas()
    {
        return $this->hasMany(Diploma::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function memo()
    {
        return $this->belongsTo(Memo::class,'id','candidate_id');
    }

    public function candidature()
    {
       return $this->belongsTo(Candidature::class,'id','candidate_id');
    }
}
