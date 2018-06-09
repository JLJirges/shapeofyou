<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{

    protected $table = 'jobs';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'JobTitle', 'JobDescription', 'YourSkills', 'ContactUs', 'created_at', 'updated_at'
    ];





}

