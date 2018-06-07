<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Workouts extends Model
{

    protected $table = 'workouts';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'WorkoutTitle', 'WorkoutCategory', 'BloggerId', 'WorkoutHeroImage', 'WorkoutImage', 'WorkoutBoxImage', 'WorkoutContentOne', 'WorkoutContentTwo', 'created_at', 'updated_at'
    ];





}

