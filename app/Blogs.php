<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{

    protected $table = 'blogs';
    public $timestamps = false; // added for 10** error
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */



    protected $fillable = [
        'BlogTitle', 'BlogCategory', 'BlogAuthorName', 'BlogAuthorBio', 'BlogAuthorBirthdate', 'BlogAuthorImage', 'BlogAuthorOrigin', 'BlogHeroImage', 'BlogImage', 'BlogContentOne', 'BlogContentTwo'
    ];





}

