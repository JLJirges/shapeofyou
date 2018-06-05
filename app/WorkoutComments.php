<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class WorkoutComments extends Model
{

    protected $table = 'workoutcomment';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'WorkoutId', 'UserId', 'WorkoutCommentDate', 'WorkoutCommentContent'
    ];

}

