<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Section;

class Student extends Model
{

    protected $fillable = [
        'name',  'section_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
