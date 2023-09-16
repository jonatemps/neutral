<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // protected $with = ['circonscriptions'];
    public function circonscriptions()
    {
        return $this->hasMany(Circumscription::class,'id_province','id');
    }

    public function nameUc()
    {
        return ucfirst(strtolower($this->name));
    }
}
