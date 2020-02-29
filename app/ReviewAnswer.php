<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewAnswer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review_id',
        'review_question_id',
        'review_question_option_id'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at', 'deleted_at',
    ];

    public function review() {
        return $this->belongsTo('App\Review');
    }

    public function question() {
        return $this->belongsTo('App\ReviewQuestion');
    }

    public function questionOption() {
        return $this->belongsTo('App\ReviewQuestionOption');
    }
}
