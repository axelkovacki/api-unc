<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewQuestion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'deleted_at',
    ];

    public function options() {
        return $this->hasMany('App\ReviewQuestionOption');
    }
}
