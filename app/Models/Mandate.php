<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\ElseIf_;

class Mandate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getStyleMandate()
    {
        if ($this->slug == 'depute-provincial') {
           return '<span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>';
        }elseif ($this->slug == 'depute-national') {
            return '<span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>';
        }elseif ($this->slug == 'presidence') {
            return '<span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>';
        }
    }




}
