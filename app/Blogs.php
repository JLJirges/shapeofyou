<?php

namespace App;

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blogs extends Authenticatable
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
        'blogtitle', 'blog-category', 'blog-author-name', 'blog-author-bio', 'blog-author-birthdate', 'blog-author-image', 'blog-author-origin', 'blog-hero-image', 'blog-image', 'blog-content-one', 'blog-content-two'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
