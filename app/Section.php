<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Section extends Model
{

    protected $table='section';
    protected $fillable = [
        'title' , 'user_id', 'is_lower_section'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function student () {
        return $this->hasMany('App\Student');
    }
}
