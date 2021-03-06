<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{

    protected $table = 'blogs';
    public $timestamps = true; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'BlogTitle', 'BlogCategory','BloggerId', 'BlogHeroImage', 'BlogImage', 'BlogContentOne', 'BlogContentTwo', 'created_at', 'updated_at'
    ];





}

