<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewQuestionOption extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review_question_id',
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

    public function question() {
        return $this->belongsTo('App\ReviewQuestion');
    }
}
